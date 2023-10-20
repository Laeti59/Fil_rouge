<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class CrudModelClient extends CI_Model {

    public function displayCustomer($id) {

        $this->load->database();

        $requete = "SELECT * FROM clients ";
        $resultat = $this->db->query($requete,array($id));
        $liste = $resultat->result();

        return $liste;
    }

    public function createCustomer($nom, $prenom, $adresse, $zipcode, $ville, $phone,
    $mail, $vehicule, $login, $password) {
        $this->load->database();
    
        if (empty($nom) || empty($prenom) || empty($adresse) || empty($zipcode) || empty($ville)
        || empty($phone) || empty($mail) || empty($vehicule) || empty($login) || empty($password)) {
            return false;
        }
    
        $data = array(
            'cli_nom' => $nom,
            'cli_prenom' => $prenom,
            'cli_adresse' => $adresse,
            'cli_zipcode' => $zipcode,
            'cli_ville' => $ville,
            'cli_phone' => $phone,
            'cli_mail' => $mail,
            'cli_vehicule' => $vehicule,
            'cli_login' => $login,
            'cli_password'=> $password
        );
    
        if ($this->db->insert('clients', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteCustomer($id) {
        $this->load->database();
        $this->db->where('cli_id', $id);
        if ($this->db->delete('clients')) {
            return true;
        } else {
            return false;
        }
    }

    public function updateCar($posted_id, $nom, $prenom, $adresse, $zipcode, $ville, $phone, $mail) {
        $this->load->database();
    
        $data = array(
            'cli_id' => $posted_id,
            'cli_nom' => $nom,
            'cli_prenom' => $prenom,
            'cli_adresse' => $adresse,
            'cli_zipcode' => $zipcode,
            'cli_ville' => $ville,
            'cli_phone' => $phone,
            'cli_mail' => $mail
        );
    
        $this->db->where('cli_id', $posted_id);

        if ($this->db->update('clients', $data)) {
            return true;
        } else {
            return false;
        }
    }    
}

?>