<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class EspacePro extends CI_Controller {
    
    public function recupereNom() {
        $this->load->model('IdentificationModel'); 
        $this->load->library('session');
    
        $userData = $this->session->userdata('user');
        
        if($userData && isset($userData->emp_nom) && isset($userData->emp_prenom)){
            $nom = $userData->emp_nom;
            $prenom = $userData->emp_prenom;
    
            $this->load->helper('url');
            $this->load->view("header-footer/header_view");
    
            $donnees["nom"] = $nom;
            $donnees["prenom"] = $prenom;
            $this->load->view("container_espace_pro", $donnees);
    
            $this->load->view("header-footer/footer_view");
        } else {
            redirect(base_url("PageAccueil")); // Redirige vers la page d'accueil si l'utilisateur n'est pas connecté ou si les données de l'utilisateur ne sont pas présentes
        }
    }
    
    public function deconnexion() {
        $this->load->library('session');
        $this->session->sess_destroy(); // Détruit toutes les données de session de l'utilisateur
        redirect(base_url("PageAccueil")); 
    }
}
?>