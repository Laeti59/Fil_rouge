<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class PageClient extends CI_Controller {

    public function contactVendeur() {
        $this->load->model('IdentificationModel');
        $this->load->helper('url');
        
        $login = $this->input->post('username');
        $password = $this->input->post('password');
    
        $userData = $this->IdentificationModel->verifierUtilisateur($login, $password);
        
        if($userData){
            // Stocker les informations de l'utilisateur dans la session
            $this->session->set_userdata('user', $userData);
    
            redirect(base_url("PageClient/recupereNom" . $userData->id)); // Redirige vers l'espace pro avec l'ID de l'utilisateur
        }
        else {
            $this->session->set_flashdata('error', 'Identifiants invalides');
            redirect(base_url("PageAccueil")); 
        }
        
        $this->load->view('header-footer/header_view');
        $this->load->view('container_etre_recontacte_vendeur');
        $this->load->view('header-footer/footer_view');
    }

    public function contactAcheteur() {
        $this->load->model('IdentificationModel');
        $this->load->helper('url');
        
        $login = $this->input->post('username');
        $password = $this->input->post('password');
    
        $userData = $this->IdentificationModel->verifierUtilisateur($login, $password);
        
        if($userData){
            // Stocker les informations de l'utilisateur dans la session
            $this->session->set_userdata('user', $userData);
    
            redirect(base_url("PageClient/recupereNom" . $userData->id)); // Redirige vers l'espace pro avec l'ID de l'utilisateur
        }
        else {
            $this->session->set_flashdata('error', 'Identifiants invalides');
            redirect(base_url("PageAccueil")); 
        }

        $this->load->view('header-footer/header_view');
        $this->load->view('container_etre_recontacte_acheteur');
        $this->load->view('header-footer/footer_view');
    }

    public function recupereNom() {
        $this->load->model('IdentificationModel');
    
        $userData = $this->session->userdata('user');
        
        if($userData && isset($userData->emp_nom) && isset($userData->emp_prenom)){
            $nom = $userData->emp_nom;
            $prenom = $userData->emp_prenom;
    
            $this->load->helper('url');
            $this->load->view("header-footer/header_view");
    
            $donnees["nom"] = $nom;
            $donnees["prenom"] = $prenom;
            // a changer => $this->load->view("container_espace_pro", $donnees);
    
            $this->load->view("header-footer/footer_view");
        } else {
            redirect(base_url("PageAccueil")); // Redirige vers la page d'accueil si l'utilisateur n'est pas connecté ou si les données de l'utilisateur ne sont pas présentes
        }
    }
    
    

    public function deconnexion() {
        $this->session->sess_destroy(); // Détruit toutes les données de session de l'utilisateur
        redirect(base_url("PageAccueil")); 
    }
}
?>
