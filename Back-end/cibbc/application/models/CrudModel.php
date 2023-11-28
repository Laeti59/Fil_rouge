<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class CrudModel extends CI_Model {

    //  Fonction pour afficher la liste des véhciules de la base de donnée
    public function displayCar() {

        $this->load->database();

        $requete = "SELECT * FROM vehicules";
        $resultat = $this->db->query($requete,array());
        $liste = $resultat->result();

        return $liste;
    }
    //FIN

    // Fonction pour afficher la liste des véhicules avec leurs options (Page afficher véhicule)
    public function listeVehicules($id) {
        $this->load->database();
        $requete = "SELECT v.*, c.cli_nom, c.cli_prenom, 
            GROUP_CONCAT(REPLACE(ov.opt_libelle, ', ', '\n') SEPARATOR '\n ') as options
            FROM vehicules v
            LEFT JOIN clients_vehicules cv ON v.veh_id = cv.cv_veh_id
            LEFT JOIN clients c ON c.cli_id = cv.cv_cli_id 
            LEFT JOIN assigner a ON v.veh_id = a.ass_veh_id 
            LEFT JOIN options_vehicules ov ON ov.opt_id = a.ass_opt_id
            GROUP BY v.veh_id";
    
        $resultat = $this->db->query($requete);
        $liste = $resultat->result();
    
        return $liste;
    }
    //FIN

    //  Fonction pour ajouter des véhciules à la base de donnée
    public function createCar($marque, $modele, $annee, $kilometrage, $couleur,
    $carburant, $transmission, $prix, $clientID) {
        $this->load->database();

        if (empty($marque) || empty($modele) || empty($annee) || empty($kilometrage)
        || empty($couleur) || empty($carburant) || empty($transmission) || empty($prix)) {
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

        $this->db->insert('vehicules', $data);
        $vehiculeID = $this->db->insert_id();

        $vehiculeInfo = $this->getCarDetails($vehiculeID);

        if ($vehiculeInfo) {
            $this->associerVehiculeClient(
                $clientID,
                $vehiculeID,
            );
        }

        return $vehiculeID;
    }
    //FIN

    // Fonction qui permet de récupérer les informations de mes tables véhicules,
    // client et clients_vehicules pour pouvoir faire les assocations
    public function getCarDetails($vehiculeID) {
        $this->load->database();
        
        $requete = "SELECT v.*, c.cli_nom, c.cli_prenom
            FROM vehicules v
            JOIN clients_vehicules cv ON v.veh_id = cv.cv_veh_id
            JOIN clients c ON c.cli_id = cv.cv_cli_id
            WHERE v.veh_id = ?";
        
        $resultat = $this->db->query($requete, array($vehiculeID));
    
        if ($resultat->num_rows() > 0) {
            return $resultat->row();
        } else {
            return false;
        }
    }
    //FIN
    
    // Fonction qui me permet de faire les assocations avec ma table clients_vehicules
    public function associerVehiculeClient($clientIDs, $vehiculeID) {
        foreach ($clientIDs as $clientID) {
            $data = array(
                'cv_cli_id' => $clientID,
                'cv_veh_id' => $vehiculeID,
            );
    
            $this->db->insert('clients_vehicules', $data);
        }
    }
    //FIN

    // Fonction qui permet d'ajouter les photos après la création du nouveau véhicules
    public function addPhoto($path, $vehiculeId) {
        $this->load->database();
    
        if (empty($path) || empty($vehiculeId)) {
            return false;
        }
    
        $data = array(
            'pho_path' => $path,
            'pho_veh_id' => $vehiculeId
        );
    
        $insert_success = $this->db->insert('photos', $data);
    
        return $insert_success;
    }
    //FIN
    
    // Fonction qui permet de récupérer la liste des options afin de les afficher sur la page
    public function getOptions() {
        $this->load->database();

        $query = $this->db->get('options_vehicules');
        return $query->result();
    }

    // Fonction qui permet d'associé le véhicule aux options sélectionnées
    public function associerOptionsVehicule($options, $vehiculeID) {
        $this->load->database();
    
        if (empty($options) || empty($vehiculeID)) {
            return false;
        }
    
        foreach ($options as $optionID) {
            $data = array(
                'ass_veh_id' => $vehiculeID,
                'ass_opt_id' => $optionID, 
            );
    
            $this->db->insert('assigner', $data);
        }
    
        return true;
    }
    //FIN
    
    //  Fonction pour supprimer des véhciules de la base de donnée
    public function deleteCar($id) {
        $this->load->database();
    
        // Désactiver temporairement la vérification des clés étrangères
        $this->db->query('SET foreign_key_checks = 0');
    
        // Supprimer les enregistrements des options
        $this->db->where('ass_veh_id', $id);
        $this->db->delete('assigner');
        
        // Supprimer d'abord les enregistrements liés dans clients_vehicules
        $this->db->where('cv_veh_id', $id);
        $this->db->delete('clients_vehicules');
        
        // Supprimer les enregistrements liés dans photos
        $this->db->where('pho_veh_id', $id);
        $this->db->delete('photos');
        
        // Enfin, supprimer l'enregistrement dans vehicules
        $this->db->where('veh_id', $id);
        
        if ($this->db->delete('vehicules')) {
            // Réactiver la vérification des clés étrangères
            $this->db->query('SET foreign_key_checks = 1');
            return true;
        } else {
            // Réactiver la vérification des clés étrangères en cas d'échec
            $this->db->query('SET foreign_key_checks = 1');
            return false;
        }
    }
    
    //FIN
    

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
    //FIN
}
?>