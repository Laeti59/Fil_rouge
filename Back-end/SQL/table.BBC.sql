DROP DATABASE IF EXISTS bye_buy_car_lille;
CREATE DATABASE IF NOT EXISTS bye_bye_car_lille;

USE bye_buy_car_lille;


DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
    `cli_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `cli_nom` varchar(50) NOT NULL,
    `cli_prenom` varchar(50) NOT NULL,
    `cli_adresse` varchar(50) NOT NULL,
    `cli_zipcode` varchar(50) NOT NULL, 
    `cli_ville` varchar(50) NOT NULL,
    `cli_phone` varchar(50) NOT NULL,
    `cli_mail` varchar(50) NOT NULL,
    `cli_login` varchar(50) NOT NULL,
    `cli_password` varchar(50) NOT NULL
);

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
    `pos_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `pos_libelle` varchar(50) NOT NULL
);

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
    `emp_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `emp_nom` varchar(50) NOT NULL,
    `emp_prenom` varchar(50) NOT NULL,
    `emp_adresse` varchar(50) NOT NULL,
    `emp_zipcode` varchar(50) NOT NULL,
    `emp_ville` varchar(50) NOT NULL,
    `emp_phone` varchar(50) NOT NULL,
    `emp_mail` varchar(50) NOT NULL,
    `emp_login` varchar(50) NOT NULL,
    `emp_password` varchar(255) NOT NULL
);

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
    `uti_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `uti_nom_utilisateur` varchar(50) NOT NULL,
    `uti_mot_de_passe` varchar(255) NOT NULL
); 

DROP TABLE IF EXISTS `vehicules`;
CREATE TABLE IF NOT EXISTS `vehicules` (
    `veh_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `veh_marque` varchar(50) NOT NULL,
    `veh_modele` varchar(50) NOT NULL,
    `veh_annee` varchar(4) NOT NULL,
    `veh_kilometre` varchar(50) NOT NULL,
    `veh_couleur` varchar(50) NOT NULL, 
    `veh_carburant` varchar(50) NOT NULL,
    `veh_transmission` varchar(50) NOT NULL,
    `veh_prix` varchar(50) NOT NULL,
    `cli_id` INT NOT NULL,
    CONSTRAINT FK_VEHICULES_CLIENTS FOREIGN KEY (cli_id) REFERENCES clients (cli_id)
);

DROP TABLE IF EXISTS `vendre`;
CREATE TABLE IF NOT EXISTS `vendre` (
    `ven_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `ven_veh_id` INT NOT NULL, 
    `ven_cli_id` INT NOT NULL,
    CONSTRAINT FK_VENDRE_VEHICULE FOREIGN KEY (ven_veh_id) REFERENCES vehicules (veh_id),
    CONSTRAINT FK_VENDRE_CLIENTS FOREIGN KEY (ven_cli_id) REFERENCES clients (cli_id),
    `ven_status` varchar(50) NOT NULL
);

DROP TABLE IF EXISTS `acheter`;
CREATE TABLE IF NOT EXISTS `acheter` (
    `ach_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `ach_veh_id` INT, 
    `ach_cli_id` INT,
    CONSTRAINT FK_ACHETER_VEHICULE FOREIGN KEY (ach_veh_id) REFERENCES vehicules (veh_id),
    CONSTRAINT FK_ACHETER_CLIENTS FOREIGN KEY (ach_cli_id) REFERENCES clients (cli_id),
    `ach_status` varchar(50) NOT NULL
);

DROP TABLE IF EXISTS `controler`;
CREATE TABLE IF NOT EXISTS `controler` (
    `con_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `con_veh_id` INT NOT NULL, 
    `con_emp_id` INT NOT NULL,
    CONSTRAINT  FK_CONTROLER_VEHICULE FOREIGN KEY (con_veh_id) REFERENCES vehicules (veh_id),
    CONSTRAINT FK_CONTROLER_CLIENTS FOREIGN KEY (con_emp_id) REFERENCES employees (emp_id),
    `date_test` DATETIME NOT NULL,
    `result_test` BOOLEAN NOT NULL,
    `test_mecanique` BOOLEAN NOT NULL,
    `verif_docs` BOOLEAN NOT NULL
);

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
    `pho_id` INT NOT Null AUTO_INCREMENT PRIMARY KEY,
    `pho_path` varchar(255) NOT NULL,
    `pho_veh_id` INT NOT NULL,
    CONSTRAINT FK_PHOTOS_VEHICULES FOREIGN KEY (pho_veh_id) REFERENCES vehicules (veh_id)
);

DROP TABLE IF EXISTS `options_vehicules`;
CREATE TABLE IF NOT EXISTS `options_vehicules` (
    `opt_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `opt_libelle` varchar (255) NOT NULL
    `opt_veh_id` INT NOT NULL,
    CONSTRAINT FK_OPTIONS_VEHICULES FOREIGN KEY (opt_veh_id) REFERENCES vehicules (veh_id)
);

DROP TABLE IF EXISTS `assigner`;
CREATE TABLE IF NOT EXISTS `assigner` (
    `ass_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `ass_veh_id` INT NOT NULL,
    `ass_opt_id` INT NOT NULL,
    CONSTRAINT FK_ASSIGNER_VEHICULES FOREIGN KEY (ass_veh_id) REFERENCES vehicules (veh_id),
    CONSTRAINT FK_ASSIGNER_OPTIONS_VEHICULES FOREIGN KEY (ass_opt_id) REFERENCES options_vehicules (opt_id)
);

DROP TABLE IF EXISTS `occuper`;
CREATE TABLE IF NOT EXISTS `occuper` (
    `occ_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `occ_emp_id` INT NOT NULL,
    `occ_pos_id` INT NOT NULL,
    CONSTRAINT FK_OCCUPER_EMPLOYEE FOREIGN KEY (occ_emp_id) REFERENCES employees (emp_id),
    CONSTRAINT FK_OCCUPER_POSTS FOREIGN KEY (occ_pos_id) REFERENCES posts (pos_id),
    UNIQUE KEY `unique_employee_occupation` (`occ_emp_id`)
);

DROP TABLE IF EXISTS `messagerie`;
CREATE TABLE IF NOT EXISTS `messagerie` (
    `mes_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `mes_contenu` varchar(255) NOT NULL,
    `mes_emp_id` INT NOT NULL,
    `mes_cli_id` INT NOT NULL,
    CONSTRAINT FK_MESSAGERIE_EMPLOYEES FOREIGN KEY (mes_emp_id) REFERENCES employees (emp_id),
    CONSTRAINT FK_MESSAGERIE_CLIENTS FOREIGN KEY (mes_cli_id) REFERENCES clients (cli_id)
);

DROP TABLE IF EXISTS `clients_vehicules`;
CREATE TABLE IF NOT EXISTS `clients_vehicules` (
    `cv_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `cv_veh_id` INT NOT NULL,
    `cv_cli_id` INT NOT NULL,
    CONSTRAINT FK_CLIENTS_VEHICULES_VEHICULES FOREIGN KEY (cv_veh_id) REFERENCES vehicules (veh_id),
    CONSTRAINT FK_CLIENTS_VEHICULES_CLIENTS FOREIGN KEY (cv_cli_id) REFERENCES clients (cli_id),
);