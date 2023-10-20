<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class CrudEmployees extends CI_Controller {

    //  Fonction pour afficher la liste des clients de la base de donnée
    public function afficherEmployes() {
        $this->load->model('CrudModelEmployees');
        $liste = $this->CrudModelEmployees->displayEmployees();

        $this->load->view('header-footer/header_view');

        $donnee["liste"] = $liste;
        $this->load->view('container_afficher_employes', $donnee);

        $this->load->view('header-footer/footer_view');
    }


    //  Fonction pour ajouter des véhciules à la base de donnée
    public function ajouterEmployes() {
        $this->load->model('CrudModelEmployees');
        $this->load->helper('url');

        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $adresse = $this->input->post('adresse');
        $zipcode = $this->input->post('zipcode');
        $ville = $this->input->post('ville');
        $phone = $this->input->post('phone');
        $mail = $this->input->post('mail');
        $login = $this->input->post('login');
        $password = $this->input->post('password');

        $insertion_reussie = $this->CrudModelEmployees->createEmployees($nom, $prenom, $adresse,
        $zipcode, $ville, $phone, $mail, $login, $password);

        if ($insertion_reussie) {
            redirect('EspacePro');
        }

        $this->load->view('header-footer/header_view');

        $this->load->view('container_ajouter_employes');

        $this->load->view('header-footer/footer_view');
        
    }

    //  Fonction pour supprimer des véhciules de la base de donnée
    public function supprimerEmployes() {
        $this->load->model('CrudModelEmployees');
        $this->load->helper('url');
    
        if ($this->input->post('id')) {
            $employe_id = $this->input->post('id');
            $suppression_reussie = $this->CrudModelEmployees->deleteEmployees($employe_id);
            if ($suppression_reussie) {
                redirect('EspacePro'); 
            }
        }
    
        $liste = $this->CrudModelEmployees->displayEmployees();
        $donnee["liste"] = $liste;
    
        $this->load->view('header-footer/header_view');
        $this->load->view('container_supprimer_employes', $donnee);
        $this->load->view('header-footer/footer_view');
    }


    //  Fonction pour modifier des véhciules dans la base de donnée
    public function modifierEmployes() {
        $this->load->model('CrudModelEmployees');
        $this->load->helper('url');
    
        $id = $this->input->post('id');

        $liste = $this->CrudModelEmployees->displayEmployees($id);
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
            $login = $this->input->post('login');
            $password = $this->input->post('password');
    
            $employe_id = $this->input->post('id');

            $modification_reussie = $this->CrudModelEmployees->updateEmployees($posted_id, $nom, $prenom, $adresse,
            $zipcode, $ville, $phone, $mail, $login, $password);

            if ($modification_reussie) {
                redirect('EspacePro'); 
            }
        }
        
        $this->load->view('header-footer/header_view');
        $this->load->view('container_modifier_employes', $donnee);
        $this->load->view('header-footer/footer_view');

    }
}
?>