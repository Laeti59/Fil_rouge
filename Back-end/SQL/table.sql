DROP TABLE IF EXISTS `vehicule`;
CREATE TABLE IF NOT EXISTS `vehicule` (
    `veh_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `veh_marque` varchar(50) NOT NULL,
    `veh_modele` varchar(50) NOT NULL,
    `veh_annee` varchar(4) NOT NULL,
    `veh_kilometre` varchar(50) NOT NULL,
    `veh_couleur` varchar(50) NOT NULL, 
    `veh_carburant` varchar(50) NOT NULL,
    `veh_transmission` varchar(50) NOT NULL,
    `veh_date_mise_en_ligne` DATETIME NOT NULL;
    `veh_acheteur` INT NOT NULL,
    `veh_vendeur` INT NOT NULL,
    CONSTRAINT FK_VEHICULE_VENDEUR FOREIGN KEY (veh_ven_id) REFERENCE (ven_id),
    CONSTRAINT FK_VEHICULE_ACHETEUR FOREIGN KEY (veh_ach_id) REFERENCE (ach_id);
) 

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
    `ven_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `ven_nom` varchar(50) NOT NULL,
    `ven_prenom` varchar(50) NOT NULL,
    `ven_address` varchar(50) NOT NULL,
    `ven_zipcode` varchar(50) NOT NULL, 
    `ven_ville` varchar(50) NOT NULL,
    `ven_phone` varchar(50) NOT NULL,
    `ven_mail` varchar(50) NOT NULL,
    `ven_vehicule` varchar(50) NOT NULL,
)

DROP TABLE IF EXISTS `acheteur`;
CREATE TABLE IF NOT EXISTS `acheteur` (
    `ach_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `ach_nom` varchar(50) NOT NULL,
    `ach_prenom` varchar(50) NOT NULL, 
    `ach_address` varchar(50) NOT NULL, 
    `ach_zipcode` varchar(50) NOT NULL,
    `ach_ville` varchar(50) NOT NULL,
    `ach_phone` varchar(50) NOT NULL,
    `ach_mail` varchar(50) NOT NULL,
    `ach_vehicule` varchar(50) NOT NULL,
)

DROP TABLE IF EXISTS `order_acheteur`;
CREATE TABLE IF NOT EXISTS `order_acheteur` (
    `ord_ach_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `ord_ach_status` varchar(50) NOT NULL,
    `ord_ach_acheteur` INT NOT NULL, 
    `ord_ach_vehicule` INT NOT NULL,
    CONSTRAINT FK_ORDER_ACHETEUR_ACHETEUR FOREIGN KEY (ord_ach_ach_id) REFERENCE acheteur (ach_id),
    CONSTRAINT FK_ORDER_ACHETEUR_VEHICULE FOREIGN KEY (ord_ach_veh_id) REFERENCE vehicule (veh_id);
)

DROP TABLE IF EXISTS `order_vendeur`;
CREATE TABLE IF NOT EXISTS `order_vendeur` (
    `ord_ven_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `ord_ven_status` varchar(50) NOT NULL,
    `ord_ven_vendeur` INT NOT NULL, 
    `ord_ven_vehicule` INT NOT NULL,
    CONSTRAINT FK_ORDER_VENDEUR_VENDEUR FOREIGN KEY (ord_ven_ven_id) REFERENCE vendeur (ven_id),
    CONSTRAINT FK_ORDER_VENDEUR_VEHICULE FOREIGN KEY (ord_ven_veh_id) REFERENCE vehicule (veh_id);
)

DROP TABLE IF EXISTS `agence`;
CREATE TABLE IF NOT EXISTS `agence` (
    `age_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `age_nom` varchar(50) NOT NULL,
    `age_adress` varchar(50) NOT NULL,
    `age_zipcode` varchar(50) NOT NULL,
    `age_ville` varchar(50) NOT NULL,
    `age_phone` varchar(50) NOT NULL,
    `age_mail` varchar(50) NOT NULL;
)

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
    `pos_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `pos_libelle` varchar(50) NOT NULL,
    `pos_agence` INT NOT NULL,
    CONSTRAINT FK_POSTS_AGENCE FOREIGN KEY (pos_age_id) REFERENCE (age_id);
)

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
    `emp_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `emp_nom` varchar(50) NOT NULL,
    `emp_prenom` varchar(50) NOT NULL,
    `emp_adress` varchar(50) NOT NULL,
    `emp_zipcode` varchar(50) NOT NULL,
    `emp_ville` varchar(50) NOT NULL,
    `emp_phone` varchar(50) NOT NULL,
    `emp_mail` varchar(50) NOT NULL,
    `emp_poste` INT NOT NULL,
    `emp_agence` INT NOT NULL,
    CONSTRAINT FK_EMPLOYEES_POSTS FOREIGN KEY (emp_pos_id) REFERENCE (pos_id),
    CONSTRAINT FK_EMPLOYEES_AGENCE FOREIGN KEY (emp_age_id) REFERENCE (age_id);
)

