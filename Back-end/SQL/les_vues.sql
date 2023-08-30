-- Vue des postes occupés par les employées
CREATE VIEW postes_occupe
AS
SELECT emp_nom, emp_prenom, pos_libelle
FROM employees
JOIN occuper
ON emp_id = occ_emp_id
JOIN posts 
ON pos_id = occ_pos_id;


-- Vue des véhciules qui sont à vendre
CREATE VIEW vehicules_a_vendre
AS
SELECT veh_marque, veh_modele, cli_nom, cli_prenom
FROM vehicules
JOIN clients
ON veh_id = cli_id;


-- Vue de toutes les options de la Citroën Aircross
CREATE VIEW options_citroen_aircross_shine
AS
SELECT veh_marque, veh_modele, opt_libelle
FROM vehicules
JOIN assigner
ON veh_id = ass_veh_id
JOIN options_vehicules
ON opt_id = ass_opt_id
WHERE veh_marque = 'Citroën' AND veh_modele = 'Aircross Shine';


-- Vue de toutes les options de la Peugeot 3008
CREATE VIEW options_peugeot_3008
AS
SELECT veh_marque, veh_modele, opt_libelle
FROM vehicules
JOIN assigner
ON veh_id = ass_veh_id
JOIN options_vehicules
ON opt_id = ass_opt_id
WHERE veh_marque = 'Peugeot' AND veh_modele = '3008';


-- Vue de toutes les options de la Peugeot 5008
CREATE VIEW options_peugeot_5008
AS
SELECT veh_marque, veh_modele, opt_libelle
FROM vehicules
JOIN assigner
ON veh_id = ass_veh_id
JOIN options_vehicules
ON opt_id = ass_opt_id
WHERE veh_marque = 'Peugeot' AND veh_modele = '5008';


-- Vue de toutes les options de la Peugeot 308
CREATE VIEW options_peugeot_308
AS
SELECT veh_marque, veh_modele, opt_libelle
FROM vehicules
JOIN assigner
ON veh_id = ass_veh_id
JOIN options_vehicules
ON opt_id = ass_opt_id
WHERE veh_marque = 'Peugeot' AND veh_modele = '308';


-- Vue de toutes les options de Jeep Grand Cherokee
CREATE VIEW options_jeep_grand_cherokee
AS
SELECT veh_marque, veh_modele, opt_libelle
FROM vehicules
JOIN assigner
ON veh_id = ass_veh_id
JOIN options_vehicules
ON opt_id = ass_opt_id
WHERE veh_marque = 'Jeep' AND veh_modele = 'Grand Cherokee';


-- Vue de toutes les options de la Mercedes CLasse A
CREATE VIEW options_mercedes_classe_A
AS
SELECT veh_marque, veh_modele, opt_libelle
FROM vehicules
JOIN assigner
ON veh_id = ass_veh_id
JOIN options_vehicules
ON opt_id = ass_opt_id
WHERE veh_marque = 'Mercedes' AND veh_modele = 'Classe A';


-- Vue de toutes les options de l'Opel Zafira de 2017
CREATE VIEW options_opel_zafira_2017
AS
SELECT veh_marque, veh_modele, veh_annee, opt_libelle
FROM vehicules
JOIN assigner
ON veh_id = ass_veh_id
JOIN options_vehicules
ON opt_id = ass_opt_id
WHERE veh_marque = 'Opel' AND veh_modele = 'Zafira' AND veh_annee = '2017';


-- Vue de toutes les options de l'Opel Zafira de 2010
CREATE VIEW options_opel_zafira_2010
AS
SELECT veh_marque, veh_modele, veh_annee, opt_libelle
FROM vehicules
JOIN assigner
ON veh_id = ass_veh_id
JOIN options_vehicules
ON opt_id = ass_opt_id
WHERE veh_marque = 'Opel' AND veh_modele = 'Zafira' AND veh_annee = '2010';


-- Vue de toutes les options de la Ford Ecosport
CREATE VIEW options_ford_ecosport
AS
SELECT veh_marque, veh_modele, opt_libelle
FROM vehicules
JOIN assigner
ON veh_id = ass_veh_id
JOIN options_vehicules
ON opt_id = ass_opt_id
WHERE veh_marque = 'Ford' AND veh_modele = 'Ecosport';


-- Vue des photos de la Citroën Aircross Shine
CREATE VIEW photos_citroen_aircross
AS
SELECT veh_marque, veh_modele, pho_path
FROM vehicules
JOIN photos
ON veh_id = pho_veh_id
WHERE veh_marque = 'Citroën' AND veh_modele = 'Aircross Shine' AND veh_id = 1;


-- Vue des photos de la Peugeot 3008
CREATE VIEW photos_peugeot_3008
AS
SELECT veh_marque, veh_modele, pho_path
FROM vehicules
JOIN photos
ON veh_id = pho_veh_id
WHERE veh_marque = 'Peugeot' AND veh_modele = '3008';


-- Vue des photos de la Peugeot 5008
CREATE VIEW photos_peugeot_5008
AS
SELECT veh_marque, veh_modele, pho_path
FROM vehicules
JOIN photos
ON veh_id = pho_veh_id
WHERE veh_marque = 'Peugeot' AND veh_modele = '5008';


-- Vue des photos de la Peugeot 308
CREATE VIEW photos_peugeot_308
AS
SELECT veh_marque, veh_modele, pho_path
FROM vehicules
JOIN photos
ON veh_id = pho_veh_id
WHERE veh_marque = 'Peugeot' AND veh_modele = '308';


-- Vue des photos de la Jeep Grand Cherokee
CREATE VIEW photos_jeep_grand_cherokee
AS
SELECT veh_marque, veh_modele, pho_path
FROM vehicules
JOIN photos
ON veh_id = pho_veh_id
WHERE veh_marque = 'Jeep' AND veh_modele = 'Grand Cherokee';


-- Vue des photos de la Mercedes CLasse A
CREATE VIEW photos_mercedes_classe_A
AS
SELECT veh_marque, veh_modele, pho_path
FROM vehicules
JOIN photos
ON veh_id = pho_veh_id
WHERE veh_marque = 'Mercedes' AND veh_modele = 'Classe A';


-- Vue des photos de la Ford Ecosport
CREATE VIEW photos_ford_ecosport
AS
SELECT veh_marque, veh_modele, pho_path
FROM vehicules
JOIN photos
ON veh_id = pho_veh_id
WHERE veh_marque = 'Ford' AND veh_modele = 'Ecosport';


-- Vue des photos de l'Opel Zafira de 2017
CREATE VIEW photos_opel_zafira_2017
AS
SELECT veh_marque, veh_modele, veh_annee, pho_path
FROM vehicules
JOIN photos
ON veh_id = pho_veh_id
WHERE veh_marque = 'Opel' AND veh_modele = 'Zafira' AND veh_annee = '2017';


-- Vue des photos de l'Opel Zafira de 2010
CREATE VIEW photos_opel_zafira_2010
AS
SELECT veh_marque, veh_modele, veh_annee, pho_path
FROM vehicules
JOIN photos
ON veh_id = pho_veh_id
WHERE veh_marque = 'Opel' AND veh_modele = 'Zafira' AND veh_annee = '2010';