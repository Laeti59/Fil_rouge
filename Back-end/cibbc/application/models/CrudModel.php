<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class CrudModel extends CI_Model {

    //  Fonction pour afficher la liste des véhciules de la base de donnée
    public function afficherVehicule($id) {

        $this->load->database();

        $requete = "SELECT * FROM vehicules ";
        $resultat = $this->db->query($requete,array($id));
        $liste = $resultat->result();

        return $liste;
    }

    //  Fonction pour ajouter des véhciules à la base de donnée
    public function createCar($marque, $modele, $annee, $kilometrage, $couleur, $carburant, $transmission, $prix) {
        $this->load->database();
    
        if (empty($marque) || empty($modele) || empty($annee) || empty($kilometrage) || empty($couleur) || empty($carburant) || empty($transmission) || empty($prix)) {
            return false;
        }
    
        $data = array(
            'veh_marque' => $marque,
            'veh_modele' => $modele,
            'veh_annee' => $annee,
            'veh_kilometre' => $kilometrage,
            'veh_couleur' => $couleur,
            'veh_carburant' => $carburant,
            'veh_transmission' => $transmission,
            'veh_prix' => $prix
        );
    
        if ($this->db->insert('vehicules', $data)) {
            return true;
        } else {
            return false;
        }
    }

    // Fonction pour ajouter des photos à la base de donnée
    public function addPhoto($path, $vehiculeId) {
        $this->load->database();
    
        if (empty($path) || empty($vehiculeId)) {
            return false;
        }
    
        $data = array(
            'pho_path' => $path,
            'pho_veh_id' => $vehiculeId
        );
    
        if ($this->db->insert('photos', $data)) {
            return true;
        } else {
            return false;
        }
    }
    
    //  Fonction pour supprimer des véhciules de la base de donnée
    public function deleteCar($id) {
        $this->load->database();

        $this->db->where('pho_veh_id', $id);
        $this->db->delete('photos');

        $this->db->where('veh_id', $id);


        if ($this->db->delete('vehicules')) {
            return true;
        } else {
            return false;
        }
    }

    //  Fonction pour modifier des véhciules dans la base de donnée
    public function updateCar($posted_id, $marque, $modele, $annee, $kilometrage, $couleur, $carburant, $transmission, $prix) {
        $this->load->database();
    
        $data = array(
            'veh_id' => $posted_id,
            'veh_marque' => $marque,
            'veh_modele' => $modele,
            'veh_annee' => $annee,
            'veh_kilometre' => $kilometrage,
            'veh_couleur' => $couleur,
            'veh_carburant' => $carburant,
            'veh_transmission' => $transmission,
            'veh_prix' => $prix
        );
    
        $this->db->where('veh_id', $posted_id);

        if ($this->db->update('vehicules', $data)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function afficherVehiculeParID($id) {
        $this->load->database();
    
        $requete = "SELECT * FROM vehicules WHERE veh_id = ?";
        $resultat = $this->db->query($requete, array($id));

        $vehicule = $resultat->row(); 
        return $vehicule;
    }
    
    
}

?>