<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class PageClientModel extends CI_Model{
    public function verifierUtilisateur($login, $password) {
        $this->load->database();
    
        $query = $this->db->get_where('clients', array('cli_login' => $login));
        $utilisateur = $query->row();
    
        if ($utilisateur && password_verify($password, $utilisateur->cli_password)) {
            return $utilisateur;
        } 
        else {
            return false;
        }
    }
}
?>