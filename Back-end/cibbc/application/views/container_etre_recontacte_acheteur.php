<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/etre_recontacte_acheteur.css') ?>" >

</head>

<section class="section-one">
        <div class="text-footer">
            <div class="etre-recontacte">
                <h3 class="message1">Vous désirez être recontacté ?</h3>
            </div>
            <div class="acheter-vehicule">
                <h3 class="message2">Vous voulez acheter un véhicule ?</h3>
            </div>
            <div class="remplir-formulaire">
                <h3 class="message3">Remplissez le formulaire</h3>
            </div>
            <div class="entre-parenthèse">
                <p class="message4">(Notre équipe s'engage à vous rappelez dans les plus brefs délais)</span></p>
            </div>
        </div>
    </section>

    <section class="section-two">

        <form action="formulaire" method="post">

            <fieldset class="mon-formulaire">
                <legend class="titre-coord">Entrez vos coordonnées afin d'être recontacté</legend>
                <input class="nom-form" type="text" placeholder="Nom" required>
                <input class="prenom-form" type="text" placeholder="Prénom" required>
                <input class="adresse-form" type="text" placeholder="Adresse" required>
                <input class="mail-form" type="mail" placeholder="Mail" required>
                <input class="tel-form" type="tel" placeholder="Téléphone" required>
                <input class="envoyer-form" type="submit" value="Envoyer">
            </fieldset>

        </form>

        <div class="ma-boite">

            <div class="adresse-boite">
                <div class="logo-adresse-boite">
                    <img src="<?= base_url('Assets/Image/logo-addr-footer.png') ?>" alt="logo adresse" width="25" height="28">
                </div>
                <div class="text-adresse-boite">
                    <p>11 rue du Jardin Public 59235 Bersée</p>
                </div>
            </div>

            <div class="tel-boite">
                <div class="logo-tel-boite">
                    <img src="<?= base_url('Assets/Image/logo-tel-footer.png') ?>" alt="logo-tel" width="30" height="30">
                </div>
                <div class="text-tel-boite">
                    <a class="numero-boite" href="tel:+06.51.53.65.32">06.51.53.65.32</a>
                </div>
            </div>

            <div class="mail-boite">
                <div class="logo-mail-boite">
                    <img src="<?= base_url('Assets/Image/logo-mail-footer.png') ?>" alt="logo mail" width="30" height="30">
                </div>
                <div class="text-mail-boite">
                    <a class="email-boite" href="mailto:m.costeaux@bye-buy-car.com">m.costeaux@bye-buy-car.com</a>
                </div>
            </div>

            <div class="titre-horaire">
                <p>Horaires d'ouverture :</p>
            </div>

            <div class="les-horaires">
                <ul>
                    <li>Lundi : 10h-19h</li>
                    <li>Mardi : 10h-19h</li>
                    <li>Mercredi : 10h-19h</li>
                    <li>Jeudi : 10h-19h</li>
                    <li>Vendredi : 10h-19h</li>
                    <li>Samedi : 10h-17h</li>
                </ul>
            </div>

        </div>

    </section>