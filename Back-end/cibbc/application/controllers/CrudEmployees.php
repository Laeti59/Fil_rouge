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
        $this->load->library('email');
        $autoload['libraries'] = array('logging');


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

            $insertion_reussie = $this->CrudModelEmployees->createEmployees($nom, $prenom, $adresse,
            $zipcode, $ville, $phone, $mail, $login, $password);

            var_dump($insertion_reussie);
        

            if($insertion_reussie) {
                
                $this->email->from('laetitia.thouvenin@outlook.fr', 'THOUVENIN Laetitia'); // Adresse e-mail de l'expéditeur et nom
                $this->email->to($mail); 
                $this->email->subject('Nouveau compte d\'employé créé'); // Sujet de l'e-mail
                $this->email->message("Bonjour, Votre compte d'employé a été créé avec succès. Veuillez trouver ci-dessous vos informations de connexion :
                Login : $login
                Mot de passe : $password");

                $envoiMail = $this->email->send();

                var_dump($envoiMail);
                
                if ($envoiMail) { // Envoi de l'e-mail
                    redirect('EspacePro'); // Redirection vers l'espace professionnel
                } else {                
                    show_error($error_message); // Afficher les erreurs en cas de problème
                }
            }
        }
        else {
            $this->load->view('header-footer/header_view');

            $this->load->view('container_ajouter_employes');

            $this->load->view('header-footer/footer_view');
        }
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
        $this->load->library('email');
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
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $employe_id = $this->input->post('id');

            if($hashed_password === false) {
                echo "Erreur lors que hashage du mot de passe";
            }
            else {
                $modification_reussie = $this->CrudModelEmployees->updateEmployees($posted_id, $nom, $prenom, $adresse,
            $zipcode, $ville, $phone, $mail, $login, $hashed_password);
            }
    
            if ($modification_reussie) {
                $previousData = $this->CrudModelEmployees->displayEmployees($posted_id);

                $previousLogin = $previousData->emp_login;
                $previousPassword = $previousData->emp_password;
                
                $login_changed = $this->input->post('login') !== $previousLogin;
                $password_changed = $this->input->post('password') !== $previousPassword;
                
                if ($login_changed || $password_changed) {
                    // Code pour envoyer l'e-mail
                    $this->email->from('laetitia.thouvenin@outlook.fr', 'THOUVENIN Laetitia');
                    $this->email->to($mail);
                    $this->email->subject('Modification identifiants de connexion');
                    $this->email->message("Bonjour, Vos identifiants ont bien été modifiés. Veuillez trouver ci-dessous vos informations de connexion :
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
        $this->load->view('container_modifier_employes', $donnee);
        $this->load->view('header-footer/footer_view');
    }
}
?>