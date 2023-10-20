<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IdentificationModel extends CI_Model {

    public function ajouterUtilisateur($nom_utilisateur, $mot_de_passe_hache) {
        $data = array(
            'uti_nom_utilisateur' => $nom_utilisateur,
            'uti_mot_de_passe' => $mot_de_passe_hache
        );
        $this->db->insert('utilisateurs', $data);
    }
}
?>


