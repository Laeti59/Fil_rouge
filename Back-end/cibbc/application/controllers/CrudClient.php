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
        $login = $this->input->post('login');
        $password = $this->input->post('password');
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        if($hashed_password === false) {
            echo "Erreur lors que hashage du mot de passe";
        }
        else {
            $insertion_reussie = $this->CrudModelClient->createCustomer($nom, $prenom, $adresse,
        $zipcode, $ville, $phone, $mail, $login, $hashed_password);
        }

        if ($insertion_reussie) {
            // Code pour envoyer l'e-mail
            $this->email->from('laetitia.thouvenin@outlook.fr', 'THOUVENIN Laetitia');
            $this->email->to($mail);
            $this->email->subject('Création du compte client');
            $this->email->message("Bonjour, \n Votre compte client à bien était créé. Veuillez trouver ci-dessous vos informations de connexion :
            Login : $login
            Mot de passe : $password");

            $envoiMail = $this->email->send();

            if ($envoiMail) {
                redirect('EspacePro');
            } 
            else {
                show_error($this->email->log_message());
            }
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
    
        $liste = $this->CrudModelClient->displayCustomer();
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
    
                    var_dump($envoiMail);
    
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