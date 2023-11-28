<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fichevehicule extends CI_Controller {

    public function recupererId($id) {
        $this->load->model('FicheVehiculeModel');
        $vehicule = $this->FicheVehiculeModel->afficherListe($id);
        $photos = $this->FicheVehiculeModel->afficherPhoto($id); 
        $options = $this->FicheVehiculeModel->afficherOptions($id);
    
        $data['vehicule'] = $vehicule;
        $data['photos'] = $photos;
        $data['assigner'] = $options;
    
        $this->load->view('header-footer/header_view');
        $this->load->view('container_fiches_vehicules', $data);
        $this->load->view('header-footer/footer_view');
    }  
}
?>
