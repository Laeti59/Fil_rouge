<?php
defined('BASEPATH') OR exit('No direct script acces allowed');


class FicheVehiculeModel extends CI_Model {

    public function afficherListe($id) {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM vehicules WHERE veh_id = ?", array($id));
        return $query->row();
    }

    public function afficherPhoto($vehiculeId) {
        $this->load->database();
    
        $query = $this->db->query("SELECT pho_path FROM photos WHERE pho_veh_id = ?", array($vehiculeId));
        return $query->result();
    }

    public function afficherOptions($vehiculeId) {
        $this->load->database();
        
        $query = $this->db->query("
            SELECT o.opt_libelle 
            FROM options_vehicules AS o
            JOIN assigner AS a ON o.opt_id = a.ass_opt_id
            WHERE a.ass_veh_id = ?", array($vehiculeId));
        
        return $query->result();
    }
}
?>