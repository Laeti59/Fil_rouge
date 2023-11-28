<?php
defined('BASEPATH') OR exit('No direct script acces allowed');


class ListeVehiculeModel extends CI_Model {

    public function afficherListe($id) {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM vehicules WHERE veh_id = ?", array($id));
        return $query->row();
    }

    public function afficherPhoto($vehiculeId) {
        $this->load->database();
    
        $query = $this->db->query("SELECT pho_path FROM photos WHERE pho_veh_id = ? LIMIT 1", array($vehiculeId));
        return $query->result();
    }
}
?>