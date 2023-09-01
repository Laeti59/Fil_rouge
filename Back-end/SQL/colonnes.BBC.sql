INSERT INTO `clients` (`cli_id`, `cli_nom`, `cli_prenom`, `cli_adresse`, `cli_zipcode`, `cli_ville`, `cli_phone`, `cli_mail`, `cli_vehicule`,`cli_login`, `cli_password`) VALUES
(1, 'LAVIGNE', 'Francis', '15 rue de vendières', '59830', 'Haubourdin', '0782459632', 'francis.lavigne@gmail.com', 'Citroën Aicross', 'lavigne.francis', 'lavigne.F'),
(2, 'FRANCO', 'Robert', '27 rue Carnot', '59150', 'Wattrelos', '0712598765', 'franco.r@outlook.fr', 'Peugeot 3008','franco.robert', 'france.R'),
(3, 'ROUTIER', 'Denis', '29 rue Auguste Testelin', '59100', 'Roubaix', '0699365520', 'routier.denis@gmail.com', 'Peugeot 5008', 'routier.denis', 'routier.D'),
(4, 'CARPENTIER', 'Elisabeth', '24 rue Henri Roth', '59000', 'Lille', '0644587111', 'carp.beth@gmail.com', 'Jeep Grand Cherokee','carpentier.elisabeht', 'carpentier.E'),
(5, 'SIMEON', 'Virginie', '114 Bis rue de Lille', '59200', 'Tourcoing', '0712598963', 'simeon.virginie@outlook.fr', 'Mercedes Classe A', 'simeon.virginie', 'simeon.V'),
(6, 'LEULEU', 'Jordan', '88 rue de la Poste', '59100', 'Roubaix', '0641458732', 'jojo59@gmail.com', 'Opel Zafira (2017)','leuleu.jordan', 'leuleu.J'),
(7, 'VANDERVASTE', 'Lucie', '12/4 rue de la Vigne', '59200', 'Tourcoing', '0751996321', 'lucie.vander@outlook.com', 'Peugeot 308', 'vandervaste.lucie', 'vandervaste.L');
(8, 'DUFOUR', 'Valentin', '78 rue Anatole France', '59170', 'Croix', '0608784105', 'valentin52@gmail.com', 'Opel Zafira (2010)','dufour.valentin', 'dufour.V'),
(9, 'GRINSCOKI', 'Sylvie', '112/4 rue Louis Brailleur', '59000', 'Lille', 'Null', 'sylvie.grin-59@outlook.fr', 'Ford Escosport', 'grinscoki.sylvie', 'grinscoki.S'),

INSERT INTO `agence` (`age_id`, `age_nom`, `age_adresse`, `age_zipcode`, `age_ville`, `age_ville`, `age_phone`, `age_mail`) VALUES
(1, 'Bye Buy Car Lille', '11 rue du Jardin Public', '59235', 'Bercée', '06.51.53.65.32', 'm.costeaux@bye-buy-car.com');

INSERT INTO `posts` (`pos_id`, `pos_libelle`) VALUES
(1, 'Gérant'),
(2, 'Commerciale');

INSERT INTO `employees` (`emp_nom`, `emp_prenom`, `emp_adresse`, `emp_zipcode`, `emp_ville`, `emp_phone`, `emp_mail`, `emp_age_id`) VALUES
('COSTEAUX', 'Morgan', '11 rue du Jardin Public', '59235', 'Bercée', '06.51.53.65.32', 'm.costeaux@bye-buy-car.com', 1),
('SURIN', 'Benjamin', '24 rue Pasteur', '59113', 'Seclin', '0756431212', 'benjamin.surin@bye-buy-car.com', 1);

INSERT INTO `vehicules` (`veh_id`, `veh_marque`, `veh_modele`, `veh_annee`, `veh_kilometre`, `veh_couleur`, `veh_carburant`, `veh_transmission`, `veh_prix`) VALUES
(1, 'Citroën', 'Aircross Shine', '2019', '12 900km', 'noir', 'Essence', 'Manuelle', '18 900€'),
(2, 'Peugeot', '3008', '2018', '20 500km', 'Gris', 'Diesel', 'Automatique', '30 900€'),
(3, 'Peugeot', '5008', '2019', '96 500km', 'Bleu Foncé', 'Diesel', 'Manuelle', '23 490€'),
(4, 'Jeep', 'Grand Cherokee', '2017', '158 000km', 'Noir', 'Diesel', 'Automatique', '27 490€'),
(5, 'Mercedes', 'Classe A', '2017', '93 000km', 'Bleu Foncé', 'Diesel', 'Manuelle', '21 990€'),
(6, 'Opel', 'Zafira', '2017', '168 000km', 'Noir', 'Diesel', 'Manuelle', '8 690€'),
(7, 'Peugeot', '308', '2009', '197 200km', 'Blanc', 'Diesel', 'Manuelle', '7 490€'),
(8, 'Opel', 'Zafira', '2010', '171 500km', 'Gris Foncé', 'Diesel', 'Manuelle', '9 990€'),
(9, 'Ford', 'Ecosport', '2014', '104 000km', 'Blanc', 'Essence', 'Manuelle', '10 500€');


INSERT INTO `vendre` (`ven_veh_id`, `ven_cli_id`, `ven_status`) VALUES
(1, 1, 'En cours'),
(2, 2, 'En cours'),
(3, 3, 'En cours'),
(4, 4, 'En cours'),
(5, 5, 'En cours'),
(6, 6, 'En cours'),
(7, 7, 'En cours'),
(8, 8, 'En cours'),
(9, 9, 'En cours'),
(1, 1, 'Résilier'),
(2, 2, 'Résilier'),
(3, 2, 'Résilier'),
(4, 4, 'Résilier'),
(5, 5, 'Résilier'),
(6, 6, 'Résilier'),
(7, 7, 'Résilier'),
(8, 8, 'Résilier'),
(9, 9, 'Résilier'),
(1, 1, 'Virement reçu'),
(2, 2, 'Virement reçu'),
(3, 3, 'Virement reçu'),
(4, 4, 'Virement reçu'),
(5, 5, 'Virement reçu'),
(6, 6, 'Virement reçu'),
(7, 7, 'Virement reçu'),
(8, 8, 'Virement reçu'),
(9, 9, 'Virement reçu'),
(1, 1, 'Vendu'),
(2, 2, 'Vendu'),
(3, 3, 'Vendu'),
(4, 4, 'Vendu'),
(5, 5, 'Vendu'),
(6, 6, 'Vendu'),
(7, 7, 'Vendu'),
(8, 8, 'Vendu'),
(9, 9, 'Vendu');

INSERT INTO `acheter` (`ach_status`) VALUES
('Commande validée'),
('Réception du virement'),
('En cours de préparation'),
('Livraison planifiée'),
('Facture envoyée');

INSERT INTO `controler` (`con_veh_id`, `con_emp_id`, `date_test`, `result_test`, `test_mecanique`, `verif_docs`) VALUES
(1, 1, '2023-05-16', True, True, True),
(2, 1, '2023-05-29', True, True, True),
(3, 2, '2023-06-08', True, True, True),
(4, 2, '2023-06-18', True, True, True),
(5, 2, '2023-06-27', True, True, True),
(6, 1, '2023-07-05', True, True, True),
(7, 2, '2023-07-20', True, True, True),
(8, 1, '2023-08-02', True, True, True),
(9, 1, '2023-08-10', True, True, True);

INSERT INTO `photos` (`pho_id`, `pho_path`, `pho_veh_id`) VALUES
(1, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Citroën C3 Aircross/photo.jpg', 1),
(2, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Ford Ecosport/1.jpg', 9),
(3, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Ford Ecosport/2.jpg', 9),
(4, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Ford Ecosport/3.jpg', 9),
(5, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Ford Ecosport/4.jpg', 9),
(6, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Ford Ecosport/5.jpg', 9),
(7, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Ford Ecosport/6.jpg', 9),
(8, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Ford Ecosport/7.jpg', 9),
(9, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Ford Ecosport/8.jpg', 9),
(10, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Ford Ecosport/9.jpg', 9),
(11, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Ford Ecosport/10.jpg', 9),
(12, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Jeep Grand Cherokee/photo.jpg', 4),
(13, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Mercedes Classe A/1.jpg', 5),
(14, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Mercedes Classe A/2.jpg', 5),
(15, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Mercedes Classe A/3.jpg', 5),
(16, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Mercedes Classe A/4.jpg', 5),
(17, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Mercedes Classe A/5.jpg', 5),
(18, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Mercedes Classe A/6.jpg', 5),
(19, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Mercedes Classe A/7.jpg', 5),
(20, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Mercedes Classe A/8.jpg', 5),
(21, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Mercedes Classe A/9.jpg', 5),
(22, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Opel Zafira/photo.jpg', 6),
(23, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Opel Zafira 2/1.jpg', 8),
(24, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Opel Zafira 2/2.jpg', 8),
(25, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Opel Zafira 2/3.jpg', 8),
(26, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Opel Zafira 2/4.jpg', 8),
(27, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Opel Zafira 2/5.jpg', 8),
(28, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Opel Zafira 2/6.jpg', 8),
(29, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Opel Zafira 2/7.jpg', 8),
(30, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Opel Zafira 2/8.jpg', 8),
(31, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Opel Zafira 2/9.jpg', 8),
(32, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Opel Zafira 2/10.jpg', 8),
(33, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 308/1.jpg', 7),
(34, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 308/2.jpg', 7),
(35, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 308/3.jpg', 7),
(36, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 308/4.jpg', 7),
(37, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 308/5.jpg', 7),
(38, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 308/6.jpg', 7),
(39, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 308/7.jpg', 7),
(40, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 308/8.jpg', 7),
(41, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 308/9.jpg', 7),
(42, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 308/10.jpg', 7),
(43, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 308/11.jpg', 7),
(44, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 308/12.jpg', 7),
(45, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 308/13.jpg', 7),
(46, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 3008/photo.jpg', 2),
(47, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 5008/1.jpg', 3),
(48, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 5008/2.jpg', 3),
(49, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 5008/3.jpg', 3),
(50, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 5008/4.jpg', 3),
(51, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 5008/5.jpg', 3),
(52, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 5008/6.jpg', 3),
(53, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 5008/7.jpg', 3),
(54, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 5008/8.jpg', 3),
(55, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 5008/9.jpg', 3),
(56, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 5008/10.jpg', 3),
(57, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 5008/11.jpg', 3),
(58, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 5008/12.jpg', 3),
(59, 'formation_dev/Fil rouge/Fil_rouge/Front_end/Assets/Voiture/Peugeot 5008/13.jpg', 3);

INSERT INTO `options_vehicules` (`opt_libelle`) VALUES
('ABS (Antiblocage de roues)'),
('Accès et démarrage mains-libres'),
('Accoudoir'),
('Accoudoir central avant à ouverture papillon, avec compartiment de rangement éclairé et réfrigérable'),
('Aide au démarrage en pente'),
('Aide au stationnement AV-AR'),
('Airbags frontaux conducteur et passager adaptatifs (passager neutralisable), latéraux avant et rideaux avant et arrière'),
('Alarme sonore d''oubli d''extinction des feux'),
('Alertes visuelles et sonores de non bouclage et de débouclage des ceintures de sécurité'),
('Alerte de changement de voie intempestif'),
('Alerte de temps de conduite'),
('Alerte distance de sécurité'),
('Allumage automatique des feux'),
('Allumage automatique des feux de détresse en cas de forte décélération'),
('Antidémarrage codé électronique'),
('Appuie-tête arrière (x 3) réglables en hauteur'),
('Appuie-tête avant réglables en hauteur'),
('Apple CarPlay / Android Auto'),
('Barres de toit'),
('Becquet arrière couleur carrosserie'),
('Bluetooth'),
('Boite à gant réfrigérée'),
('Caméra de recul'),
('Capteur de pluie'),
('Capteur de luminosité'),
('Climatisation'),
('Eclairage d''accompagnement manuel'),
('Ecrous anti-vol'),
('ESP (régulation de comportement dynamique)'),
('Essuie-glaces automatique'),
('Feux automatiques'),
('Feux arrière à LED'),
('Feux de jour à LED'),
('Fixations Isofix'), 
('Fonction Mirror Screen'),
('Frein de stationnement électrique'),
('GPS'),
('Indicateur de maintenance'),
('Indicateur de température extérieure'),
('Jantes alliage'),
('Kit anti-crevaison TIREFIT'),
('Lève-vitres électriques (x4) à commande séquentielle et dispositif anti-pincement'),
('Lunette arrière chauffante'),
('Pack City 1'),
('Pack d''éclairage intérieur'),
('Pack Eclairage d''ambiance'), 
('Pack Safety Plus'),
('Pack Titanium'),
('Pack Visibilité'),
('Prises USB / Aux'),
('Radar de recul'),
('Radar de recul avec lignes de guidage'),
('Radar d''aide au stationnement'),
('Rangement dans le coffre, spécifique pour triangle de pré-signalisation et trousse de secours'),
('Reconnaissance des panneaux de signalisation'),
('Reconnaissance des panneaux de vitesse et préconisation'), 
('Régulateur et limiteur de vitesse adaptatif'),
('Rétroviseurs extérieurs avec éclairage d''approche à LED'),
('Rétroviseurs intérieur jour/nuit automatique'),
('Rétroviseurs rabattables manuel'),
('Rétroviseurs rabattables électriques'),
('Siège réglable électrique'),
('Siège réglable manuel'),
('Siège avant avec soutien lombaire'),
('Sièges chauffants'),
('Système "Flex7"'),
('Système anticollision'),
('Système de freinage d''urgence'),
('Système de détection de somnolence'),
('Système de surveillance de la pression des pneus'),
('Système multimédia avec écran tactile'), 
('Système Stop & Start'),
('Toit en verre panoramique'),
('Toit ouvrant'), 
('Vitres électriques'),
('Vitres arrières surteintées'),
('Volant réglable en hauteur et en profondeur'),
('Volant en cuir'),
('Volant multifonction');

INSERT INTO `assigner` (`ass_opt_id`, `ass_veh_id`) VALUES
(161, 9),
(161, 5),
(161, 7),
(162, 9),
(162, 5),
(162, 2),
(162, 3),
(163, 5),
(163, 2),
(164, 3),
(165, 1),
(165, 2),
(165, 3),
(165, 4),
(165, 5),
(166, 2),
(166, 3),
(166, 4),
(166, 6),
(167, 7),
(168, 7),
(169, 7),
(170, 1),
(170, 2),
(170, 4),
(170, 6),
(171, 2),
(172, 2),
(172, 6),
(173, 1),
(173, 5),
(173, 6),
(173, 7),
(174, 7),
(175, 7),
(176, 7),
(177 ,7),
(178, 3),
(179, 1),
(179, 2),
(180, 7),
(181, 1),
(181, 9),
(181, 4),
(181, 5),
(181, 7),
(181, 2),
(182, 9),
(182, 7),
(183, 4),
(183, 3),
(184, 4),
(184, 5),
(184, 6),
(185, 4),
(186, 1),
(186, 2),
(186, 3),
(186, 4),
(186, 5),
(186, 6),
(186, 7),
(186, 8),
(186, 9),
(188, 8),
(189, 1),
(189, 4),
(189, 5),
(189, 8),
(189, 7),
(190, 9),
(190, 7),
(191, 9),
(191, 6),
(192, 7),
(193, 7),
(194, 9),
(194, 5),
(194, 8),
(194, 7),
(194, 3),
(195, 3),
(196, 2),
(196, 3),
(197, 5),
(197, 2),
(198, 8),
(199, 7),
(200, 5),
(200, 8),
(200, 3),
(201, 5),
(201, 7),
(202, 7),
(202, 3),
(203, 8),
(203, 7),
(204, 3),
(205, 5),
(206, 3),
(207, 3),
(208, 9),
(209, 3),
(210, 1),
(210, 9),
(210, 4),
(210, 5),
(210, 7),
(210, 3),
(211, 9),
(212, 5),
(213, 1),
(214, 7),
(215, 6),
(216, 2),
(216, 3),
(217, 1),
(217, 2),
(217, 3),
(217, 4),
(217, 5),
(217, 6),
(217, 7),
(217, 8),
(218, 3),
(219, 5),
(219, 6),
(221, 1),
(221, 2),
(221, 3),
(221, 4),
(221, 5),
(221, 6),
(221, 7),
(221, 8),
(221, 9),
(222, 9),
(222, 5),
(223, 8),
(223, 7),
(223, 3),
(224, 9),
(224, 5),
(224, 8),
(225, 4),
(226, 8),
(227, 4),
(227, 5),
(227, 6),
(228, 4),
(228, 5),
(228, 7),
(228, 2),
(229, 5),
(230, 7),
(230, 7),
(230, 3),
(231, 6),
(231, 8),
(232, 5),
(233, 4),
(234, 1),
(234, 4),
(235, 9),
(235, 5),
(235, 3),
(236, 9),
(236, 5),
(236, 8),
(236, 3),
(237, 5),
(237, 8),
(237, 7),
(238, 9),
(239, 9),
(239, 8);

INSERT INTO `occuper` (`occ_emp_id`, `occ_pos_id`) VALUES
(1, 1),
(2, 2);

