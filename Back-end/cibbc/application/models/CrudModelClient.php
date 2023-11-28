<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class CrudModelClient extends CI_Model {

    public function displayCustomer() {
        $this->load->database();
        $requete = "SELECT c.*, GROUP_CONCAT(DISTINCT CONCAT(v.veh_marque, ' ', v.veh_modele) SEPARATOR ', ') AS vehicules
        FROM clients c
        LEFT JOIN clients_vehicules cv ON c.cli_id = cv.cv_cli_id
        LEFT JOIN vehicules v ON v.veh_id = cv.cv_veh_id
        GROUP BY c.cli_id";
        $resultat = $this->db->query($requete);
        $liste = $resultat->result();
        return $liste;
    }
    

    public function createCustomer($nom, $prenom, $adresse, $zipcode, $ville, $phone,
        $mail, $login, $password) {
        $this->load->database();
    
        if (empty($nom) || empty($prenom) || empty($adresse) || empty($zipcode) || empty($ville)
        || empty($phone) || empty($mail) || empty($login) || empty($password)) {
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
            'cli_login' => $login,
            'cli_password'=> $password
        );

        if ($this->db->insert('clients', $data)) {
            // Récupérer l'ID du client nouvellement inséré
            $lastInsertedClientId = $this->db->insert_id();
    
            // Ajouter le client à la table clients_vehicules avec nom et prénom
            $this->db->insert('clients_vehicules', array(
                'cv_cli_id' => $lastInsertedClientId,
                'cv_veh_id' => null,
                'cv_cli_nom' => $nom,
                'cv_cli_prenom' => $prenom
            ));
    
            return true;
        } else {
            return false;
        }
    }

    public function deleteCustomer($id) {
        $this->load->database();
    
        // Supprime d'abord les entrées dans la table de liaison clients_vehicules
        $this->db->where('cv_cli_id', $id);
        $this->db->delete('clients_vehicules');
    
        // Ensuite, supprime le client
        $this->db->where('cli_id', $id);
        
        if ($this->db->delete('clients')) {
            return true;
        } else {
            return false;
        }
    }
    

    public function updateCustomer($posted_id, $nom, $prenom, $adresse, $zipcode, $ville, $phone, $mail) {
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