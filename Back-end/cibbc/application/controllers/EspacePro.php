<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class EspacePro extends CI_Controller {
    
    public function recupereNom($id) {
        $this->load->model("EspaceProModel");
        $nom = $this->EspaceProModel->getNom($id);

        $this->load->helper('url');
        $this->load->view("header-footer/header_view");

        $donnee["nom"] = $nom;
        $this->load->view("container_espace_pro", $donnee);

        $this->load->view("header-footer/footer_view");
    }
}

?>