<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class CrudModelEmployees extends CI_Model {

    public function displayEmployees() {

        $this->load->database();

        $requete = "SELECT * FROM employees";
        $resultat = $this->db->query($requete,array());
        $liste = $resultat->result();

        return $liste;
    }

    public function createEmployees($nom, $prenom, $adresse,
    $zipcode, $ville, $phone, $mail, $login, $password) {
        $this->load->database();
    
        if (empty($nom) || empty($prenom) || empty($adresse) || empty($zipcode) || empty($ville)
        || empty($phone) || empty($mail) ||empty($login) || empty($password)) {
            return false;
        }
    
        $data = array(
            'emp_nom' => $nom,
            'emp_prenom' => $prenom,
            'emp_adresse' => $adresse,
            'emp_zipcode' => $zipcode,
            'emp_ville' => $ville,
            'emp_phone' => $phone,
            'emp_mail' => $mail,
            'cli_login' => $login,
            'cli_password'=> $password
        );
    
        if ($this->db->insert('employees', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteEmployees($id) {
        $this->load->database();
        $this->db->where('emp_id', $id);
        if ($this->db->delete('employees')) {
            return true;
        } else {
            return false;
        }
    }

    public function updateEmployees($posted_id, $nom, $prenom, $adresse,
    $zipcode, $ville, $phone, $mail, $login, $password) {
        $this->load->database();
    
        $data = array(
            'emp_id' => $posted_id,
            'emp_nom' => $nom,
            'emp_prenom' => $prenom,
            'emp_adresse' => $adresse,
            'emp_zipcode' => $zipcode,
            'emp_ville' => $ville,
            'emp_phone' => $phone,
            'emp_mail' => $mail,
            'cli_login' => $login,
            'cli_password'=> $password
        );
    
        $this->db->where('emp_id', $posted_id);

        if ($this->db->update('employees', $data)) {
            return true;
        } else {
            return false;
        }
    }    
}

?>