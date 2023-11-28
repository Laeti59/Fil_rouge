<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Crud extends CI_Controller {


    //  Fonction pour afficher la liste des véhciules de la base de donnée
    public function afficherVehicule($id) {
        $this->load->model('CrudModel');
        $this->load->helper('url');

        // Afficher la liste des véhicule avec les options
        $liste = $this->CrudModel->listeVehicules($id);
        $donnee["liste"] = $liste;

        $this->load->view('header-footer/header_view');
        $this->load->view('container_afficher_vehicule', $donnee);
        $this->load->view('header-footer/footer_view');
    }


    //  Fonction pour ajouter des véhciules à la base de donnée

    public function ajouterVehicule() {
        $this->load->model('CrudModel');
        $this->load->model('CrudModelClient');

        // Récupérer les données du formulaire
        $marque = $this->input->post('marque');
        $modele = $this->input->post('modele');
        $annee = $this->input->post('annee');
        $kilometrage = $this->input->post('kilometrage');
        $couleur = $this->input->post('couleur');
        $carburant = $this->input->post('carburant');
        $transmission = $this->input->post('transmission');
        $prix = $this->input->post('prix');
        $options_selectionnees = $this->input->post('options');        
        $clientID = $this->input->post('checkboxId');
    
        // Créer le véhicule
        $vehiculeID = $this->CrudModel->createCar($marque, $modele, $annee, $kilometrage, $couleur,
        $carburant, $transmission, $prix, $clientID);

        // Afficher la liste des clients
        $data['liste'] = $this->CrudModelClient->displayCustomer();

        // Afficher la liste des options
        $data['liste_options'] = $this->CrudModel->getOptions();

        if ($vehiculeID) {
            $upload_config['upload_path'] =  FCPATH . "Assets/UplodedPictures";
            $upload_config['allowed_types'] = 'gif|jpg|png';
            $upload_config['max_size'] = 2048;

            $this->load->library('upload', $upload_config);
            $this->upload->initialize($upload_config);

            if (!empty($_FILES['images']['name'])) {
                foreach ($_FILES['images']['name'] as $key => $value) {
                    $_FILES['image']['name'] = $_FILES['images']['name'][$key];
                    $_FILES['image']['type'] = $_FILES['images']['type'][$key];
                    $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$key];
                    $_FILES['image']['error'] = $_FILES['images']['error'][$key];
                    $_FILES['image']['size'] = $_FILES['images']['size'][$key];

                    // Effectue le téléchargement pour chaque image
                    if ($this->upload->do_upload('image')) {
                        $upload_data = $this->upload->data();
                        $photo = $upload_data['file_name'];

                        // Insérer la photo dans la base de données avec l'ID du véhicule
                        $path = $photo;
                        $vehiculeId = $vehiculeID;
                        $insertion_photo_reussie = $this->CrudModel->addPhoto($path, $vehiculeId);

                        if (!$insertion_photo_reussie) {
                            echo "Erreur lors de l'ajout de la photo.";
                            return;
                        }
                    } else {
                        echo $this->upload->display_errors();
                        return;
                    }
                }
            }

            $this->CrudModel->associerOptionsVehicule($options_selectionnees, $vehiculeID);

            $this->CrudModel->associerVehiculeClient($clientID, $vehiculeID);
    
            redirect('EspacePro');
        }
    
        $this->load->view('header-footer/header_view');
        $this->load->view('container_ajouter_vehicule', $data);
        $this->load->view('header-footer/footer_view');     
    }

    //  Fonction pour supprimer des véhciules de la base de donnée
    public function supprimerVehicule($id = null) {
        $this->load->model('CrudModel');
        $this->load->helper('url');
    
        if ($this->input->post('id')) {
            $vehicule_id = $this->input->post('id');
            $suppression_reussie = $this->CrudModel->deleteCar($vehicule_id);
            if ($suppression_reussie) {
                redirect('EspacePro'); 
            }
        }
    
        $liste = $this->CrudModel->displayCar($id);
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

        $liste = $this->CrudModel->displayCar($id);
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