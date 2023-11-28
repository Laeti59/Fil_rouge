<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/header.css') ?>" >
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/footer.css') ?>" >
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/popup-connection.css') ?>">
    <script src="<?php echo base_url('Assets/JS/jquery-3.7.1.js'); ?>"></script> 
    <script src="https://kit.fontawesome.com/dce549eaed.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anek+Latin&family=Jomolhari&family=Lato:ital,wght@0,100;1,100&family=Nuosu+SIL&family=Open+Sans:wght@300&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anek+Latin&family=Jomolhari&family=Lato:ital,wght@0,100;1,100&family=Nuosu+SIL&family=Open+Sans:wght@300&family=Roboto:wght@300;500&display=swap');
    </style>
    <title>Bye Buy Car Lille</title>
</head>

<body>
    
    <header class="header">

        <!-- Mise en place des coordonées en haut de la page avec leur logo. -->
        <div class="coordonnées-haut">

            <div class="logo-home">
                <a href="../HTML/page-acceuil.html"><i class="fa-solid fa-house"></i></a>
            </div>

            <div class="adresse">
                <i class="fa-solid fa-envelope fa-beat"></i>
                <a class="mail" href="mailto:m.costeaux@bye-buy-car.com">m.costeaux@bye-buy-car.com</a>
            </div>

            <div class="telephone">
                <i class="fa-solid fa-phone fa-beat"></i>
                <a class="numero" href="tel:+06.51.53.65.32">06.51.53.65.32</a>
            </div>

            <div class="logo">
                <a href="https://www.facebook.com/profile.php?id=100084686411227" target="_blank">
                    <img src="<?= base_url('Assets/Image/icons8-facebook-48.png')?>" alt="" width="35" height="35">
                </a>
                <a href="https://www.instagram.com/bye_buy_car_lille/" target="_blank">
                    <img src="<?= base_url('Assets/Image/icons8-instagram-48.png')?>" alt="" width="35" height="35">
                </a>
            </div>
        </div>


        <!--Mise en place du logo et de la barre de navigation-->
        <div class="info">

            <div class="menu-deroulant">
                <p id="openModal">Nos véhicules d'occasion</p>
                <!-- <i class="fa-solid fa-angle-down"></i>    -->
            </div>



            <div class="logo-bbc">
                <img class="img-bbc" src="<?= base_url('Assets/Image/logo BBC.png')?>" alt="Logo BBC" width="130" height="80">
                <div class="titre">
                    <a href="<?= site_url('accueil')?>">
                        <p class="titre-logo">BYE</p>
                    </a>
                    <p class="separation">|</p>
                    <a href="../HTML/page-acceuil.html">
                        <p class="titre-logo">BUY</p>
                    </a>
                    <p class="separation">|</p>
                    <a href="../HTML/page-acceuil.html">
                        <p class="titre-logo">CAR</p>
                    </a>
                    <p class="separation">|</p>
                    <a href="../HTML/page-acceuil.html">
                        <p class="titre-logo">LILLE</p>
                    </a>
                </div>
            </div>

            <div class="connection-ouvrir-popup">
                <div class="connection">
                    <i class="fa-solid fa-user" style="color: #ffffff;"></i>
                </div>

                <div id="ouvrirPopup">
                    <p> Je me connecte </p>
                </div>
            </div>
        </div>

    </header>
