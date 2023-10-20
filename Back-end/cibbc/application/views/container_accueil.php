<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/container-page-accueil.css') ?>">
</head>
    
<body>
    <!--Ici les deux boutons achat et vente-->
    <section>
        <div class="achat-vente">

            <div class="lien-vendeur">
                <a href="../HTML/etre-recontacté-vendeur.html"><span>Je veux vendre</span></a>
            </div>

            <div class="lien-acheteur">
                <a href="../HTML/etre-recontacté-acheteur.html"><span>Je veux acheter</span></a>
            </div>
        </div>
    </section>


    <!--Ici un carousel qui va prendre la totalité de la page avant de scroller-->

    <div class="carousel">
        <div class="mySlides"><img src="<?= base_url('Assets/Image/MAZDA CX 5.jpg') ?>"></div>
        <div class="mySlides"><img src="<?= base_url('Assets/Image/Citroën C3 AIRCROSS SHINE.jpg') ?>" alt="Citroën C3"></div>
        <div class="mySlides"><img src="<?= base_url('Assets/Image/KIA SPORTAGE 7 CRDI.jpg') ?>" alt="KIA SPORTAGE"></div>
    </div>



    <!--En dessous du carousel, des informations concernant l'entreprise BBC-->

    <section class="welcome object page-section bloc">
        <div class="container">
            <div class="row-2">
                <div class="informations">
                    <div class="titre-info">
                        <h1 class="achat"> Achat et vente de véhicule d'occasion</h1>
                        <span class="bienvenu">Bienvenue chez</span>
                        <h2 class="nom-societe">Bye Buy Car Lille</h2>
                        <div class="separteur"></div>
                        <div class="separteur-2"></div>
                        <h2 class="titre-2"> Trois bonnes raisons de faire appel à nos agents automobile</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="feature">
                            <div class="icon">
                                <img src="<?= base_url('Assets/Image/icons8-speedometer-48.png') ?>" alt="speedometer" width="50"
                                    height="50">
                            </div>
                            <div class="content">
                                <h3 class="titre-3">Efficacité</h3>
                                <p>Pour une visibilité optimale, Bye Buy Car se charge de diffuser l’annonce sur son
                                    site internet
                                    national ainsi que sur toutes les meilleures plateformes en ligne (Leboncoin,
                                    ParuVendu,
                                    Zoomcar..). Transaction rapide et efficace garantie !</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="feature">
                            <div class="icon">
                                <img src="<?= base_url('Assets/Image/icons8-lock-50.png') ?>" alt="cadena" width="50" height="50">
                            </div>
                            <div class="content">
                                <h3 class="titre-3">Sécurité</h3>
                                <p>Valorisation et estimation du véhicule, mise en relation du vendeur et de l’acheteur,
                                    signature du
                                    compromis de vente, garanties, financement, paiement : Bye Buy Car sécurise le
                                    processus de mise en
                                    vente de tous les véhicules qui lui sont confiés !</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="feature">
                            <div class="icon">
                                <img src="<?= base_url('Assets/Image/ribbon-badge.png') ?>" alt="rubban" width="50" height="50">
                            </div>
                            <div class="content">
                                <h3 class="titre-3">Expertise</h3>
                                <p>Nos conseillers connaissent le marché de l’automobile sur le bout des doigts. Ils
                                    sauront vous
                                    guider pour favoriser une vente ou un achat rapide au meilleur prix. Faites
                                    confiance à la
                                    première communauté d’agents automobiles de France !</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-2">
                    <div class="col-2">
                        <div class="call">
                            <div class="feature-2">
                                <a href="tel:0651536532">
                                    <img class="image" src="<?= base_url('Assets/Image/icons8-phone-64.png') ?>" alt="phone">
                                </a>
                            </div>
                            <span class="question">Une question ?</span>
                            <h2 class="numero">
                                <a href="tel:0651536532">06 51 53 65 32</a>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="separator_2"></div>

            </div>
        </div>

    </section>

    <!--Ici 4 offres de véhicule d'occasion-->

    <section class="proposition-vehicule">

        <div class="bloc-proposition">

            <div class="text-proposition">
                <div class="le-text">
                    <p class="decouvrir">
                        Découvrez nos dernières offres de
                    </p>
                    <h2 class="vehicule-proposition">Véhicules d'occasion</h2>
                </div>
            </div>

            <div class="separteur-3"></div>
            <div class="separteur-4"></div>

            <div class="les-blocs">
                <div class="bloc-1">
                    <div class="photo-véhicule-1">
                        <img src="<?= base_url('Assets/Voiture/Peugeot 3008/photo.jpg') ?>" alt="Peugeot 3008" width="250" height="220">
                    </div>
                    <div class="description">
                        <p class="nom">Peugeot 3008</p>
                        <img class="linge-1" src="<?= base_url('Assets/Image/icons8-horizontal-line-25.png') ?>">
                        <p class="annee">2019</p>
                        <p class="transmission">Boîte Automatique</p>
                        <p class="carburant">Diesel</p>
                        <p class="kilometrage">20 500KM</p>
                    </div>
                </div>

                <div class="bloc-2">
                    <div class="photo-véhicule-2">
                        <img src="<?= base_url('Assets/Voiture/Jeep Grand Cherkoee/photo.jpg') ?>" alt="Jeep Grand Cherkoee" width="250"
                            height="220">
                    </div>
                    <div class="description-2">
                        <p class="nom-2">Jeep Grand Cherkoee</p>
                        <img class="linge-2" src="<?= base_url('Assets/Image/icons8-horizontal-line-25.png') ?>" alt="ligne horizontal">
                        <p class="prix-2">27 490€</p>
                        <p class="annee-2"></p>
                        <p class="transmission-2">Boîte Automatique</p>
                        <p class="carburant-2">Diesel</p>
                        <p class="kilometrage-2">158 000KM</p>
                    </div>
                </div>

                <div class="bloc-3">
                    <div class="photo-véhicule-3">
                        <img src="<?= base_url('Assets/Voiture/Opel Zafira/photo.jpg') ?>" alt="Opel Zafira" width="250" height="220">
                    </div>
                    <div class="description-3">
                        <p class="nom-3">Opel Zafira</p>
                        <img class="linge-3" src="<?= base_url('Assets/Image/icons8-horizontal-line-25.png') ?>" alt="ligne horizontal">
                        <p class="prix-3">8 690€</p>
                        <p class="annee-3"></p>
                        <p class="transmission-3">Boîte Manuelle</p>
                        <p class="carburant-3">Diesel</p>
                        <p class="kilometrage-3">168 000KM</p>
                    </div>
                </div>

                <div class="bloc-4">
                    <div class="photo-véhicule-4">
                        <img src="<?= base_url('Assets/Voiture/Citroën C3 Aircross/photo.jpg') ?>" alt="Citroën C3 Aircross" width="250"
                            height="220">
                    </div>
                    <div class="description-4">
                        <p class="nom-4">Citroën C3 Aircross</p>
                        <img class="linge-4" src="<?= base_url('Assets/Image/icons8-horizontal-line-25.png') ?>" alt="ligne horizontal">
                        <p class="prix-4"></p>
                        <p class="annee-4">30/01/2019</p>
                        <p class="transmission-4">Boîte Manuelle</p>
                        <p class="carburant-4">Essence</p>
                        <p class="kilometrage-4">12 900KM</p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- Les avis clients -->

    <section id="avis-clients">
        <div class="separator"></div>
        <div id="titre1">
            <p class="titre-avis1">Ce que nos clients disent de nous</p>
        </div>
        <div id="titre2">
            <h3 class="titre-avis2">Avis clients</h3>
        </div>

        <div id="les_avis">
            <div id="bloc_avis1">
                <img src="<?= base_url('Assets/Avis Clients/avis_1.png') ?>" alt="Avis 1">
            </div>

            <div id="bloc_avis3">
                <img src="<?= base_url('Assets/Avis Clients/avis_3.png') ?>" alt="Avis 3">
            </div>
        </div>

        <div id="les_avis2">
            <div id="bloc_avis2">
                <img src="<?= base_url('Assets/Avis Clients/avis_2.png') ?>" alt="Avis 2">
            </div>
        </div>

    </section>

    
<script src="<?= base_url('Assets/JS/carrousel.js')?>"></script>
<script src="<?= base_url('Assets/JS/pop-connection.js')?>"></script>
</body>