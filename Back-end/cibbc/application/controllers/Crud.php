<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Crud extends CI_Controller {


    //  Fonction pour afficher la liste des véhciules de la base de donnée
    public function afficherVehicule($id) {
        $this->load->model('CrudModel');
        $liste = $this->CrudModel->afficherVehicule($id);

        $this->load->view('header-footer/header_view');

        $donnee["liste"] = $liste;
        $this->load->view('container_afficher_vehicule', $donnee);

        $this->load->view('header-footer/footer_view');
    }


    //  Fonction pour ajouter des véhciules à la base de donnée
    public function ajouterVehicule() {
        $this->load->model('CrudModel');
        $this->load->model('CrudModelClient');
        $this->load->helper('url');
    
        if ($this->input->post()) {
            $marque = $this->input->post('marque');
            $modele = $this->input->post('modele');
            $annee = $this->input->post('annee');
            $kilometrage = $this->input->post('kilometrage');
            $couleur = $this->input->post('couleur');
            $carburant = $this->input->post('carburant');
            $transmission = $this->input->post('transmission');
            $prix = $this->input->post('prix');
            $photo = $this->input->post('images')[0];
    
            $insertion_reussie = $this->CrudModel->createCar($marque, $modele, $annee,
            $kilometrage, $couleur, $carburant, $transmission, $prix);
    
            if ($insertion_reussie) {
                $lastInsertedId = $this->db->insert_id();
    
                $insertion_photo_reussie = $this->CrudModel->addPhoto($photo, $lastInsertedId);
    
                if ($this->input->post('nouveau_client')) {
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
    
                    $insertion_client_reussie = $this->CrudModelClient->createCustomer($nom, $prenom,
                    $adresse, $zipcode, $ville, $phone, $mail, $vehicule, $login, $password);
    
                    if ($insertion_client_reussie) {
                        redirect('EspacePro');
                    } else {
                        echo "Erreur lors de l'insertion des données du client.";
                    }
                } else {
                    redirect('EspacePro');
                }
            } else {
                echo "Erreur lors de l'insertion des données du véhicule.";
            }
        }

        $this->load->view('header-footer/header_view');

        $this->load->view('container_ajouter_vehicule');

        $this->load->view('header-footer/footer_view');
    }

    //  Fonction pour supprimer des véhciules de la base de donnée
    public function supprimerVehicule($id) {
        $this->load->model('CrudModel');
        $this->load->helper('url');
    
        if ($this->input->post('id')) {
            $vehicule_id = $this->input->post('id');
            $suppression_reussie = $this->CrudModel->deleteCar($vehicule_id);
            if ($suppression_reussie) {
                redirect('EspacePro'); 
            }
        }
    
        $liste = $this->CrudModel->afficherVehicule($id);
        $donnee["liste"] = $liste;
    
        $this->load->view('header-footer/header_view');
        $this->load->view('container_supprimer_vehicule', $donnee);
        $this->load->view('header-footer/footer_view');
    }


    //  Fonction pour modifier des véhciules dans la base de donnée
    public function modifierVehicule() {
        $this->load->model('CrudModel');
        $this->load->helper('url');
    
        $id = $this->input->post('id');

        $liste = $this->CrudModel->afficherVehicule($id);
        $donnee["liste"] = $liste;
    
        if ($this->input->post('id')) {
            $posted_id = $this->input->post('id');
            $marque = $this->input->post('marque');
            $modele = $this->input->post('modele');
            $annee = $this->input->post('annee');
            $kilometrage = $this->input->post('kilometrage');
            $couleur = $this->input->post('couleur');
            $carburant = $this->input->post('carburant');
            $transmission = $this->input->post('transmission');
            $prix = $this->input->post('prix');
    
            $vehicule_id = $this->input->post('id');

            $modification_reussie = $this->CrudModel->updateCar($posted_id, 
            $marque, $modele, $annee, $kilometrage, $couleur, $carburant,
            $transmission, $prix);

                if ($modification_reussie) {
                redirect('EspacePro'); 
            }
        }
        
        $this->load->view('header-footer/header_view');
        $this->load->view('container_modifier_vehicule', $donnee);
        $this->load->view('header-footer/footer_view');

    }
}
?>