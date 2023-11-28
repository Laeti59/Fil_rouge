<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class PageAccueil extends CI_Controller {

    public function index() {
        $this->load->helper('url');

        $this->load->view('header-footer/header_view');
        $this->load->view('container_accueil');
        $this->load->view('header-footer/footer_view');
    }
    
    public function connection() {
        
        $this->load->model('IdentificationModel'); 

        $id = 1;
        $nom = "COSTEAUX";
        $prenom = "Morgan";
        $adresse = "11 rue du Jardin Public";
        $zipcode = "59235";
        $ville = "Bercée";
        $phone = "06.51.53.65.32";
        $mail = "m.costeaux@bye-buy-car.com";
        $nom_utilisateur = 'morgan.c';
        $mot_de_passe = "morgan.gerant!";
        $mot_de_passe_hashe = password_hash($mot_de_passe, PASSWORD_DEFAULT);

        $this->IdentificationModel->ajouterUtilisateur($id, $nom, $prenom, $adresse, $zipcode, $ville, $phone, $mail, $nom_utilisateur, $mot_de_passe_hashe);

    }

    public function authentifierUtilisateur() {
        $this->load->model('IdentificationModel');
        $this->load->helper('url');
        $this->load->library('session');
        
        $login = $this->input->post('username');
        $password = $this->input->post('password');
    
        $userData = $this->IdentificationModel->verifierUtilisateur($login, $password);
        
        if($userData){
            // Stocker les informations de l'utilisateur dans la session
            $this->session->set_userdata('user', $userData);
    
            redirect(base_url("EspacePro/recupereNom/" . $userData->id)); // Rediriger vers l'espace pro avec l'ID de l'utilisateur
        }
        else {
            $this->session->set_flashdata('error', 'Identifiants invalides');
            redirect(base_url("PageAccueil")); 
        }
    }    
}
?>