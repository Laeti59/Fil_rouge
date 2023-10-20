<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class OpelZafira2010 extends CI_Controller {
    public function index() {
        $this->load->helper('url');
        $this->load->view('header-footer/header_view');
        $this->load->view('container_fiche_opel_zafira_2010');
        $this->load->view('header-footer/footer_view');
    }
}

?>