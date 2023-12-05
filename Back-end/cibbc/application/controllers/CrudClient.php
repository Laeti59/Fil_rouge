<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class CrudClient extends CI_Controller {

    //  Fonction pour afficher la liste des clients de la base de donnée
    public function afficherClient() {
        $this->load->model('CrudModelClient');
        $liste = $this->CrudModelClient->displayCustomer();

        $this->load->view('header-footer/header_view');

        $donnee["liste"] = $liste;

        $this->load->view('container_afficher_clients', $donnee);

        $this->load->view('header-footer/footer_view');
    }


    //  Fonction pour ajouter des clients à la base de donnée
    public function ajouterClient() {
        $this->load->model('CrudModelClient');
        $this->load->helper('url');
        $this->load->library('email');
    
        // Récupérer les données du formulaire client
        if($this->input->post()) {
            $nom = $this->input->post('nom');
            $prenom = $this->input->post('prenom');
            $adresse = $this->input->post('adresse');
            $zipcode = $this->input->post('zipcode');
            $ville = $this->input->post('ville');
            $phone = $this->input->post('phone');
            $mail = $this->input->post('mail');
            $login = $this->input->post('login');
            $password = $this->input->post('password');
            $marque = $this->input->post('marque');
            $modele = $this->input->post('modele');
            $annee = $this->input->post('annee');
            $kilometrage = $this->input->post('kilometrage');
            $couleur = $this->input->post('couleur');
            $carburant = $this->input->post('carburant');
            $transmission = $this->input->post('transmission');
            $prix = $this->input->post('prix');
            $options_selectionnees = $this->input->post('options');
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        
            if ($hashed_password === false) {
                echo "Erreur lors du hachage du mot de passe";
                return;
            }
        
            // Créer le client avec ou sans véhicule
            $insertion_reussie = $this->CrudModelClient->createCustomerWithCar(
                $nom, $prenom, $adresse, $zipcode, $ville, $phone,
                $mail, $login, $hashed_password,
                $marque, $modele, $annee, $kilometrage, $couleur,
                $carburant, $transmission, $prix
            );
        
            if ($insertion_reussie) {
                // Code pour envoyer l'e-mail
                $this->email->from('laetitia.thouvenin@outlook.fr', 'THOUVENIN Laetitia');
                $this->email->to($mail);
                $this->email->subject('Création du compte client');
                $this->email->message("Bonjour, \n Votre compte client a bien été créé. Veuillez trouver ci-dessous vos informations de connexion :
                Login : $login
                Mot de passe : $password");
        
                $envoiMail = $this->email->send();
        
                if ($envoiMail) {
                    // Récupérer l'ID du client nouvellement inséré
                    $clientID = $this->CrudModelClient->getClientIDByLogin($login);
            
                    // Appeler la fonction pour ajouter le véhicule
                    $this->ajouterVehicule($options_selectionnees, $marque, $modele, $annee, $kilometrage, $couleur,
                        $carburant, $transmission, $prix, $clientID);
                    
                    redirect('EspacePro');
                } else {
                    show_error($this->email->log_message());
                }
            }
        }
    // Afficher la liste des options
    $data['liste_options'] = $this->CrudModelClient->getOptions();
    
        $this->load->view('header-footer/header_view');
        $this->load->view('container_ajouter_clients', $data);
        $this->load->view('header-footer/footer_view');
    }

    // Fonction pour ajouter le véhicule
    public function ajouterVehicule($options_selectionnees, $marque, $modele, $annee, $kilometrage, $couleur,
    $carburant, $transmission, $prix, $clientID) {
        $this->load->model('CrudModelClient');
        $this->load->helper('url');

        // Créer le véhicule
        if (!empty($marque) && !empty($modele) && !empty($annee) && !empty($kilometrage)
        && !empty($couleur) && !empty($carburant) && !empty($transmission) && !empty($prix)) {

            $vehiculeID = $this->CrudModelClient->createCar($marque, $modele, $annee, $kilometrage, $couleur,
            $carburant, $transmission, $prix, $clientID);
        }
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
                        $insertion_photo_reussie = $this->CrudModelClient->addPhoto($path, $vehiculeId);

                        var_dump($insertion_photo_reussie);

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

            // Si le véhciules est créé alors on peut insérer les options
            $this->CrudModelClient->associerOptionsVehicule($options_selectionnees, $vehiculeID);

            // Si le véhciules est créé alors on peut associer le véhciule à un client
            $this->CrudModelClient->associerVehiculeClient($clientID, $vehiculeID);
        }
    }

    //  Fonction pour supprimer des clients de la base de donnée
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
    
        $liste = $this->CrudModelClient->displayCustomer();
        $donnee["liste"] = $liste;
    
        $this->load->view('header-footer/header_view');
        $this->load->view('container_supprimer_clients', $donnee);
        $this->load->view('header-footer/footer_view');
    }


    //  Fonction pour modifier des clients dans la base de donnée
    public function modifierClient() {
        $this->load->model('CrudModelClient');
        $this->load->helper('url');
    
        $id = $this->input->post('id');

        $liste = $this->CrudModelClient->displayCustomer();
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
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
            $client_id = $this->input->post('id');

            if($hashed_password === false) {
                echo "Erreur lors que hashage du mot de passe";
            }
            else {
                $modification_reussie = $this->CrudModelClient->updateCustomer($posted_id, $nom, $prenom, $adresse,
            $zipcode, $ville, $phone, $mail, $login, $hashed_password);
            }
    
            if ($modification_reussie) {
                $previousData = $this->CrudModelClient->displayCustomer($posted_id);

                $previousLogin = $previousData->cli_login;
                $previousPassword = $previousData->cli_password;
                
                $login_changed = $this->input->post('login') !== $previousLogin;
                $password_changed = $this->input->post('password') !== $previousPassword;
                
                if ($login_changed || $password_changed) {
                    // Code pour envoyer l'e-mail
                    $this->email->from('laetitia.thouvenin@outlook.fr', 'THOUVENIN Laetitia');
                    $this->email->to($mail);
                    $this->email->subject('Modification identifiants de connexion');
                    $this->email->message("Bonjour, \n Vos identifiants ont bien été modifiés. Veuillez trouver ci-dessous vos informations de connexion :
                    Login : $login
                    Mot de passe : $password");
    
                    $envoiMail = $this->email->send();
        
                    if ($envoiMail) {
                        redirect('EspacePro');
                    } else {
                        show_error($this->email->log_message());
                    }
                } else {
                    redirect('EspacePro');
                }
            }
        }
        
        $this->load->view('header-footer/header_view');
        $this->load->view('container_modifier_clients', $donnee);
        $this->load->view('header-footer/footer_view');
    }
}
?>