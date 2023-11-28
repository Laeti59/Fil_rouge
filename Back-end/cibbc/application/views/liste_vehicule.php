<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/container-liste-vehicule.css') ?>" >

</head>

<body>

    <section class="haut-page">

        <div class="bloc-recherche">

            <div class="bloc-1">
                <div class="titre-recherche">
                    <h3>Recherche Avancée</h3>
                    <hr class="ligne-bloc">
                </div>
            </div>

            <div class="bloc-2">
                <div class="prix-bloc">
                    <h4>Prix</h4>
                </div>
            </div>

            <div class="bloc-3">
                <div class="annee-bloc">
                    <h4>Année du modèle</h4>
                </div>
            </div>

            <div class="bloc-4">
                <div class="marque">
                    <p>Par marque</p>
                    <img src="<?= base_url('Assets/Image/icons8-chevron-down-30.png') ?>" alt="chevron-down">
                </div>
                <div class="type">
                    <p>Par type</p>
                    <img src="<?= base_url('Assets/Image/icons8-chevron-down-30.png') ?>" alt="chevron-down">
                </div>
                <div class="carburant-bloc">
                    <p>Par carburant</p>
                    <img src="<?= base_url('Assets/Image/icons8-chevron-down-30.png') ?>" alt="chevron-down">
                </div>
                <div class="couleur">
                    <p>Par couleur</p>
                    <img src="<?= base_url('Assets/Image/icons8-chevron-down-30.png') ?>" alt="chevron-down">
                </div>
                <div class="transmission-bloc">
                    <p>Par transmission</p>
                    <img src="<?= base_url('Assets/Image/icons8-chevron-down-30.png') ?>" alt="chevron-down">
                </div>
                <div class="kilometrage-bloc">
                    <p>Par kilométrage</p>
                    <img src="<?= base_url('Assets/Image/icons8-chevron-down-30.png') ?>" alt="chevron-down">
                </div>
            </div>
        </div>

        <div class="fiche-vehicule">

            <div class="vehicule">
                <img src="<?= $photos->pho_path ?>" alt="Peugeot 308">
                <a href="../HTML/fiche.peugeot.308.html">
                    <h2><?= $vehicule->veh_marque . " " . $vehicule7->veh_modele ?></h2>
                </a>
                <hr class="separateur">
                <hr class="separateur_2">
                <p class="prix"><?= $vehicule7->veh_prix ?></p>
                <p class="annee"><?= $vehicule7->veh_annee ?></p>
                <p class="transmission"><?= $vehicule7->veh_transmission ?></p>
                <p class="kilometrage"><?= $vehicule7->veh_kilometre ?></p>
                <p class="carburant"><?= $vehicule7->veh_carburant?></p>
            </div>

            <div class="vehicule">
                <img src="<?= base_url('Assets/Voiture/Citroën C3 Aircross/photo.jpg') ?>" alt="Citroën Aircross">
                <a href="../HTML/fiche.citroen.aircross.html">
                    <h2>Citroën Aircross</h2>
                </a>
                <hr class="separateur">
                <hr class="separateur_2">
                <p class="prix">7 490€</p>
                <p class="annee">2009</p>
                <p class="transmission">Manuelle</p>
                <p class="kilometrage">197 200km</p>
                <p class="carburant">Diesel</p>
            </div>

            <div class="vehicule">
                <img src="<?= base_url('Assets/Voiture/Ford Ecosport/1.jpg') ?>" alt="Ford Ecosport">
                <a href="../HTML/fiche.ford.ecosport.html">
                    <h2>Ford Ecosport</h2>
                </a>
                <hr class="separateur">
                <hr class="separateur_2">
                <p class="prix">10 500€</p>
                <p class="annee">2014</p>
                <p class="transmission">Manuelle</p>
                <p class="kilometrage">104 000km</p>
                <p class="carburant">Essence</p>
            </div>

            <div class="vehicule">
                <img src="<?= base_url('Assets/Voiture/Peugeot 3008/photo.jpg') ?>" alt="Peugeot 3008">
                <a href="../HTML/fiche.peugeot.3008.html">
                    <h2>Peugeot 3008</h2>
                </a>
                <hr class="separateur">
                <hr class="separateur_2">
                <p class="prix">30 900€</p>
                <p class="annee">2018</p>
                <p class="transmission">Automatique</p>
                <p class="kilometrage">20 500km</p>
                <p class="carburant">Diesel</p>
            </div>

            <div class="vehicule">
                <img src="<?= base_url('Assets/Voiture/Jeep Grand Cherkoee/photo.jpg') ?>" alt="Jeep Grand Cherkoee">
                <a href="../HTML/fiche.jeep.grand.cherokee.html">
                    <h2>Jeep Grand Cherkoee</h2>
                </a>
                <hr class="separateur">
                <hr class="separateur_2">
                <p class="prix">27 490€</p>
                <p class="annee">2017</p>
                <p class="transmission">Automatique</p>
                <p class="kilometrage">158 000km</p>
                <p class="carburant">Diesel</p>
            </div>

            <div class="vehicule">
                <img src="<?= base_url('Assets/Voiture/Mercedes Classe A/1.jpg') ?>" alt="Mercedes Classe A">
                <a href="../HTML/fiche.mercedes.classe.a.html">
                    <h2>Mercedes Classe A</h2>
                </a>
                <hr class="separateur">
                <hr class="separateur_2">
                <p class="prix">21 990€</p>
                <p class="annee">2017</p>
                <p class="transmission">Manuelle</p>
                <p class="kilometrage">93 000km</p>
                <p class="carburant">Diesel</p>
            </div>

            <div class="vehicule">
                <img src="<?= base_url('Assets/Voiture/Opel Zafira/photo.jpg') ?>" alt="Opel Zafira">
                <a href="../HTML/fiche.opel.zafira.2017.html">
                    <h2>Opel Zafira</h2>
                </a>
                <hr class="separateur">
                <hr class="separateur_2">
                <p class="prix">8 690€</p>
                <p class="annee">2017</p>
                <p class="transmission">Manuelle</p>
                <p class="kilometrage">168 000km</p>
                <p class="carburant">Diesel</p>
            </div>

            <div class="vehicule">
                <img src="<?= base_url('Assets/Voiture/Peugeot 5008/1.jpg') ?>" alt="Peugeot 5008">
                <a href="../HTML/fiche.peugeot.5008.html">
                    <h2>Peugeot 5008</h2>
                </a>
                <hr class="separateur">
                <hr class="separateur_2">
                <p class="prix">23 490€</p>
                <p class="annee">2019</p>
                <p class="transmission">Manuelle</p>
                <p class="kilometrage">96 500km</p>
                <p class="carburant">Diesel</p>
            </div>

            <div class="vehicule">
                <img src="<?= base_url('Assets/Voiture/Opel Zafira 2/1.jpg') ?>" alt="Opel Zafira">
                <a href="../HTML/fiche.opel.zafira.2010.html">
                    <h2>Opel Zafira</h2>
                </a>
                <hr class="separateur">
                <hr class="separateur_2">
                <p class="prix">9 990€</p>
                <p class="annee">2010</p>
                <p class="transmission">Manuelle</p>
                <p class="kilometrage">171 500km</p>
                <p class="carburant">Diesel</p>
            </div>

        </div>

        <div class="encart-droite">
            <div class="trier">
                <p>Trier par</p>
                <img src="../Assets/Image/icons8-chevron-down-30.png" alt="chevron-down">
            </div>
        </div>
    </section>

</body>