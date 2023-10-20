<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Identification extends CI_Controller {

    public function connection() {
        
        $this->load->model('IdentificationModel'); 
        $nom_utilisateur = 'morgan.c';
        $mot_de_passe = "morgan.gerant!";
        $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);
        $this->Identification_model->ajouterUtilisateur($nom_utilisateur, $mot_de_passe_hache);
    }
}
?>
