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
    

    public function createCustomerWithCar($nom, $prenom, $adresse, $zipcode, $ville, $phone,
    $mail, $login, $password, $marque = null, $modele = null, $annee = null, $kilometrage = null,
    $couleur = null, $carburant = null, $transmission = null, $prix = null) {

    $this->load->database();

    // Créer le client avec ou sans le véhicule associé
    $dataClient = array(
        'cli_nom' => $nom,
        'cli_prenom' => $prenom,
        'cli_adresse' => $adresse,
        'cli_zipcode' => $zipcode,
        'cli_ville' => $ville,
        'cli_phone' => $phone,
        'cli_mail' => $mail,
        'cli_login' => $login,
        'cli_password'=> password_hash($password, PASSWORD_DEFAULT)
    );

    if ($this->db->insert('clients', $dataClient)) {
        // Récupérer l'ID du client nouvellement inséré
        $lastInsertedClientId = $this->db->insert_id();

        return true;
    } else {
        return false;
    }
}
    //FIN

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

        $this->associerVehiculeClient([$clientID], $vehiculeID);
        

        return $vehiculeID;
    }
    //FIN

    // Fonction pour récupérer l'ID du client
    public function getClientIDByLogin($login) {
        $this->load->database();
        $query = $this->db->select('cli_id')->from('clients')->where('cli_login', $login)->get();
        return $query->row()->cli_id;
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
    // FIN

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
    // FIN

    // Fonction qui permet de supprimer un client
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