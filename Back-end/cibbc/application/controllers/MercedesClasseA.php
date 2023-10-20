<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class MercedesClasseA extends CI_Controller {
    public function index() {
        $this->load->helper('url');
        $this->load->view('header-footer/header_view');
        $this->load->view('container_fiche_mercedes_classeA');
        $this->load->view('header-footer/footer_view');
    }
}

?>