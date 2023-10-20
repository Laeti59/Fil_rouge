<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class EspaceProModel extends CI_Model {
    public function getNom($id) {
        $this->load->database();

        $idPrepare = $this->db->escape($id); 
        $requete = "SELECT emp_nom, emp_prenom FROM employees WHERE emp_id = 1";
        $resultat = $this->db->query($requete,array($id));

        $nom = $resultat->result();

        return $nom;
    }
}

?>