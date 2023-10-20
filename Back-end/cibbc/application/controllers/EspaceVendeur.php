<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class EspaceVendeur extends CI_Controller {
    public function index() {
        $this->load->helper('url');
        $this->load->view('header-footer/header_view');
        $this->load->view('container_espace_personnel_vendeur');
        $this->load->view('header-footer/footer_view');
    }
}

?>