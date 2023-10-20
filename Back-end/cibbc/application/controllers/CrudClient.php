<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class CrudClient extends CI_Controller {

    //  Fonction pour afficher la liste des clients de la base de donnée
    public function afficherClient($id) {
        $this->load->model('CrudModelClient');
        $liste = $this->CrudModelClient->displayCustomer($id);

        $this->load->view('header-footer/header_view');

        $donnee["liste"] = $liste;
        $this->load->view('container_afficher_clients', $donnee);

        $this->load->view('header-footer/footer_view');
    }


    //  Fonction pour ajouter des véhciules à la base de donnée
    public function ajouterClient() {
        $this->load->model('CrudModelClient');
        $this->load->helper('url');

        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $adresse = $this->input->post('adresse');
        $zipcode = $this->input->post('zipcode');
        $ville = $this->input->post('ville');
        $phone = $this->input->post('phone');
        $mail = $this->input->post('mail');
        $vehicule = $this->input->post('vehicule');
        $login = $this->input->post('login');
        $password = $this->input->post('password');

        $insertion_reussie = $this->CrudModelClient->createCustomer($nom, $prenom, $adresse,
        $zipcode, $ville, $phone, $mail, $vehicule, $login, $password);

        if ($insertion_reussie) {
            redirect('EspacePro');
        }

        $this->load->view('header-footer/header_view');

        $this->load->view('container_ajouter_clients');

        $this->load->view('header-footer/footer_view');
        
    }

    //  Fonction pour supprimer des véhciules de la base de donnée
    public function supprimerClient($id) {
        $this->load->model('CrudModelClient');
        $this->load->helper('url');
    
        if ($this->input->post('id')) {
            $client_id = $this->input->post('id');
            $suppression_reussie = $this->CrudModelClient->deleteCustomer($client_id);
            if ($suppression_reussie) {
                redirect('EspacePro'); 
            }
        }
    
        $liste = $this->CrudModelClient->displayCustomer($id);
        $donnee["liste"] = $liste;
    
        $this->load->view('header-footer/header_view');
        $this->load->view('container_supprimer_clients', $donnee);
        $this->load->view('header-footer/footer_view');
    }


    //  Fonction pour modifier des véhciules dans la base de donnée
    public function modifierClient() {
        $this->load->model('CrudModelClient');
        $this->load->helper('url');
    
        $id = $this->input->post('id');

        $liste = $this->CrudModelClient->displayCustomer($id);
        $donnee["liste"] = $liste;
    
        if ($this->input->post('id')) {
            $posted_id = $this->input->post('id');
            $nom = $this->input->post('nom');
            $prenom = $this->input->post('prenom');
            $adresse = $this->input->post('adresse');
            $zipcode = $this->input->post('zipcode');
            $ville = $this->input->post('ville');
            $phone = $this->input->post('phone');
            $mail = $this->input->post('mail');
    
            $client_id = $this->input->post('id');

            $modification_reussie = $this->CrudModelClient->updateCustomer($posted_id, $nom, $prenom, $adresse, $zipcode, $ville, $phone, $mail);

            if ($modification_reussie) {
                redirect('EspacePro'); 
            }
        }
        
        $this->load->view('header-footer/header_view');
        $this->load->view('container_modifier_clients', $donnee);
        $this->load->view('header-footer/footer_view');

    }
}
?>