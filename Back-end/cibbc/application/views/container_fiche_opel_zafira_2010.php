<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/container_fiche_opel_zafira_2010.css') ?>" >

</head>

<section class="section-one">

        <div class="presentation-produit">
            <div class="titre">
                <h1 class="h3-titre">Opel Zafira</h1>
            </div>

            <div class="carousel">
                <div class="mySlides"><img src="<?= base_url('Assets/Voiture/Opel Zafira 2/1.jpg') ?>" alt="Opel Zafira" width="350px"
                        height="350px"></div>
                <div class="mySlides"><img src="<?= base_url('Assets/Voiture/Opel Zafira 2/2.jpg') ?>" alt="Opel Zafira" width="350px"
                        height="350px"></div>
                <div class="mySlides"><img src="<?= base_url('Assets/Voiture/Opel Zafira 2/3.jpg') ?>" alt="Opel Zafira" width="350px"
                        height="350px"></div>
                <div class="mySlides"><img src="<?= base_url('Assets/Voiture/Opel Zafira 2/4.jpg') ?>" alt="Opel Zafira" width="350px"
                        height="350px"></div>
                <div class="mySlides"><img src="<?= base_url('Assets/Voiture/Opel Zafira 2/5.jpg') ?>" alt="Opel Zafira" width="350px"
                        height="350px"></div>
                <div class="mySlides"><img src="<?= base_url('Assets/Voiture/Opel Zafira 2/6.jpg') ?>" alt="Opel Zafira" width="350px"
                        height="350px"></div>
                <div class="mySlides"><img src="<?= base_url('Assets/Voiture/Opel Zafira 2/7.jpg') ?>" alt="Opel Zafira" width="350px"
                        height="350px"></div>
                <div class="mySlides"><img src="<?= base_url('Assets/Voiture/Opel Zafira 2/8.jpg') ?>" alt="Opel Zafira" width="350px"
                        height="350px"></div>
            </div>

        </div>

    </section>

    <section class="section-two">

        <div class="description">
            <div class="titre-description">
                <h2 class="descp">Description</h2>
                <h2>Prix : 9 990€</h2>
            </div>
            <div class="contenu">
                <div class="les-infos">
                    <div class="lien-vue">
                        <input class="button-360" type="button" value="Voir la vue 360°">
                    </div>
                    <p class="annee">Année : 2010
                    <p>
                    <p class="kilometre">kilométrage : 171 500KM
                    <p>
                    <p class="couleur">Couleur extérieur : Gris Foncé
                    <p>
                    <p class="energie">Carbutant : Dièsel
                    <p>
                    <p class="transmission">Transmission : Manuelle 6 vitesses
                    <p>
                    <div class="logo-tel">
                        <img src="<?= base_url('Assets/Image/icons8-phone-64.png') ?>" alt="Icone Téléphone" width="30" height="30">
                        <a class="numero-tel" href="tel:+06.51.53.65.32">06.51.53.65.32</a>
                    </div>
                    <p class="BBC-section">Bye Buy Car Lille
                    <p>
                </div>
            </div>
        </div>

        <form class="formulaire" action="" method="get"> <!---Mettre le lien back-->

            <div class="bloc-form">
                <div class="titre-form">
                    <h2>Nous contacter à propos de ce véhicule</h2>
                </div>

                <div class="bloc-form-contenu">
                    <input type="text" id="nom" placeholder="Nom">
                    <input type="text" id="email" placeholder="Email">
                    <textarea name="Message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                    <input class="button-envoyer" type="submit" placeholder="Envoyer">
                </div>
            </div>

        </form>

    </section>

    <section class="section-three">

        <div class="bloc">
            <div class="titre-bloc">
                <h2>Les options :</h2>
            </div>
            <div class="liste-1">
                <ul>
                    <li>Accès au démarrage mains-libres</li>
                    <li>Accoucoir central avant à ouverture papillon, <br> avec compartiment de rangement éclairé et réfrigérable</li>
                    <li>Aide au stationnement AV-AR</li>
                    <li>Climatisation</li>
                    <li>APPLE CAR PLAY / ANDROID AUTO</li>
                    <li>Caméra de recul</li>
                    <li>Système de surveillance de la pression des pneus</li>
                    <li>Fixations ISOFIX</li>
                    <li>Fonction Mirror Screen</li>
                    <li>Frein de stationnement électrique</li>
                    <li>Aide au démarrage en pente</li>
                    <li>Jantes alliage</li>
                    <li>Lève-vitres électriques (x4) à commande séquentielle <br> et dispositif anti-pincement</li>

                </ul>
            </div>

            <div class="liste-2">
                <ul>
                    <li>Reconnaissance des panneaux de vitesse et préconisation</li>
                    <li>Régulateur et limiteur de vitesse adaptatif</li>
                    <li>Lunette arrière chauffante</li>
                    <li>Volant réglable en profondeur et en hauteur</li>
                    <li>Pack City 1 </li>
                    <li>Pack Eclairage d'ambiance</li>
                    <li>Pack Safety Plus </li>
                    <li>Pack Visibilité</li>
                    <li>Prise USB</li>
                    <li>Rétroviseurs rabattables électriquement</li>
                    <li>Rétroviseurs extérieurs éclairage d'approche à LED </li>
                    <li>Siège réglable</li>
                    <li>Vitres arrière surteintées</li>
                </ul>
            </div>

        </div>
    </section>