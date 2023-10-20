<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListeVehicule extends CI_Controller {
    public function index() {
        $this->load->helper('url');
        $this->load->view('header-footer/header_view');
        $this->load->view('liste_vehicule');
        $this->load->view('header-footer/footer_view');
    }
}
?>