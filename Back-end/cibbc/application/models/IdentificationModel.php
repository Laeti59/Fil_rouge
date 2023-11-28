<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IdentificationModel extends CI_Model {

    public function ajouterUtilisateur($id, $nom, $prenom, $adresse,
    $zipcode, $ville, $phone, $mail, $login, $password) {
        $this->load->database();

        $data = array(
            'emp_id' => $id,
            'emp_nom' => $nom,
            'emp_prenom' => $prenom,
            'emp_adresse' => $adresse,
            'emp_zipcode' => $zipcode,
            'emp_ville' => $ville,
            'emp_phone' => $phone,
            'emp_mail' => $mail,
            'emp_login' => $login,
            'emp_password' => $password
        );

        if ($this->db->insert('employees', $data)) {
            return true;
        }
        else{
            return false;
        }
    }

    public function verifierUtilisateur($login, $password) {
        $this->load->database();
    
        $query = $this->db->get_where('employees', array('emp_login' => $login));
        $utilisateur = $query->row();
    
        if ($utilisateur && password_verify($password, $utilisateur->emp_password)) {
            return $utilisateur;
        } else {
            return false;
        }
    } 
}
?>