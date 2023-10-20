<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class JeepGrandCherokee extends CI_Controller {
    public function index() {
        $this->load->helper('url');
        $this->load->view('header-footer/header_view');
        $this->load->view('container_fiche_jeep_grand_cherokee');
        $this->load->view('header-footer/footer_view');
    }
}

?>