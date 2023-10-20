<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/container_fiche_ford_ecosport.css') ?>" >

</head>

<section class="section-one">

        <div class="presentation-produit">
            <div class="titre">
                <h1 class="h3-titre">Ford Ecosport</h1>
            </div>

            <div class="photo">
                <img src="<?= base_url('Assets/Voiture/Ford Ecosport/1.jpg') ?>" alt="Jeep Grand Cherkoee" width="400px" height="300px">
            </div>

        </div>

    </section>

    <section class="section-two">

        <div class="description">
            <div class="titre-description">
                <h2 class="descp">Description</h2>
                <h2>Prix : 10 500€</h2>
            </div>
            <div class="contenu">
                <div class="les-infos">
                    <div class="lien-vue">
                        <input class="button-360" type="button" value="Voir la vue 360°">
                    </div>
                    <p class="annee">Année : 2014
                    <p>
                    <p class="kilometre">kilométrage : 104 000KM
                    <p>
                    <p class="couleur">Couleur extérieur : Blanc
                    <p>
                    <p class="energie">Carbutant : Essence
                    <p>
                    <p class="transmission">Transmission : Manuelle
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
                    <li>Fixation Isofix</li>
                    <li>ABS (Antiblocage des roues)</li>
                    <li>Accourdoir</li>
                    <li>Climatisation</li>
                    <li>Barre de toit</li>
                    <li>Bluetooth</li>
                    <li>Boite à gant réfrigérée</li>
                    <li>Feux automatique</li>
                    <li>Essui glace automatique</li>
                    <li>Accès et démarrage mains-libres</li>
                    <li>Pack Titanium</li>
                </ul>
            </div>

            <div class="liste-2">
                <ul>
                    <li>Prise USB</li>
                    <li>Caméra de recul</li>
                    <li>Rétroviseur rabattables électriques</li>
                    <li>Siège avant avec soutient lombaire</li>
                    <li>Siège réglable manuel</li>
                    <li>Rétroviseur rabattables électriques</li>
                    <li>Vérrouillage centralisé</li>
                    <li>Vitres arrières surteintés </li>
                    <li>Volant multifonction</li>
                    <li>Volant en cuir</li>
                </ul>
            </div>

        </div>
    </section>