<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListeVehicule extends CI_Controller {

    public function recupererId() {
        $this->load->model('ListeVehiculeModel');
        $vehicule = $this->ListeVehiculeModel->afficherListe();
        $photo = array();

        $vehicule1 = $this->ListeVehiculeModel->afficherListe(1);
        $vehicule2 = $this->ListeVehiculeModel->afficherListe(2);
        $vehicule3 = $this->ListeVehiculeModel->afficherListe(3);
        $vehicule4 = $this->ListeVehiculeModel->afficherListe(4);
        $vehicule5 = $this->ListeVehiculeModel->afficherListe(5);
        $vehicule6 = $this->ListeVehiculeModel->afficherListe(6);
        $vehicule7 = $this->ListeVehiculeModel->afficherListe(7);
        $vehicule8 = $this->ListeVehiculeModel->afficherListe(8);
    
        $data['vehicule1'] = $vehicule1;
        $data['vehicule2'] = $vehicule2;
        $data['vehicule3'] = $vehicule3;
        $data['vehicule4'] = $vehicule4;
        $data['vehicule5'] = $vehicule5;
        $data['vehicule6'] = $vehicule6;
        $data['vehicule7'] = $vehicule7;
        $data['vehicule8'] = $vehicule8;
        
        $data['photos'] = $photos;
    
        $this->load->view('header-footer/header_view');
        $this->load->view('liste_vehicule', $data);
        $this->load->view('header-footer/footer_view');
    }  
}
?>
