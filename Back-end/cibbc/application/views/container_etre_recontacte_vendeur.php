<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/etre_recontacte_vendeur.css') ?>" >

</head>

<section class="section-one">
        <div class="text-footer">
            <div class="des-questions">
                <h3 class="message1">Vous avez des questions ?</h3>
            </div>
            <div class="nous-contacter">
                <h3 class="message2">Contactez-nous !</h3>
            </div>
            <div class="chercher-vehicule">
                <h3 class="message3">Vous voulez vendre votre véhicule ?</h3>
            </div>
            <div class="petit-message">
                <p class="message4">N'hésitez plus et contacter notre agence Bye Buy Car Lille</p>
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
            <h4 class="titre-list">Liste des documents à ramener le jour du rendez vous avec votre commercial</h4>
            <div class="list-doc">
                <ul>
                    <li>Copie de la carte grise</li>
                    <li>Copie du contrôle technique de moins de 3 mois</li>
                    <li>Toutes les factures des 12 derniers mois</li>
                </ul>
            </div>

        </div>
        
    </section>