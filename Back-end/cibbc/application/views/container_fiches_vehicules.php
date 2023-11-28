<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/container_fiches_vehicules.css') ?>" >

</head>

<section class="section-one">

        <div class="presentation-produit">
            <div class="titre">
                <h1 class="h3-titre"><?= $vehicule->veh_marque. " " . $vehicule->veh_modele ?></h1>
            </div>

            <div class="photo">
                <?php foreach ($photos as $photo) { ?>
                    <div class="mySlides">
                        <img src="<?= base_url($photo->pho_path) ?>" alt="Photo de véhicule" width="350px"
                        height="350px">
                    </div>
                <?php } ?> 
            </div>

        </div>

    </section>

    <section class="section-two">

    <div class="description">
        <div class="les-titres">
            <h2 class="descp">Description</h2>
            <?php if(isset($vehicule)): ?>
            <h2>Prix : <?= $vehicule->veh_prix ?></h2>
        </div>

        <div class="contenu">
            <input class="button-360" type="button" value="Voir la vue 360°">

            <p class="annee">Année : <?= $vehicule->veh_annee ?></p>
            <p class="kilometre">kilométrage : <?= $vehicule->veh_kilometre ?></p>
            <p class="couleur">Couleur extérieur : <?= $vehicule->veh_couleur ?></p>
            <p class="energie">Carburant : <?= $vehicule->veh_carburant ?></p>
            <p class="transmission">Transmission : <?= $vehicule->veh_transmission ?></p>
        
    
            <div class="logo-tel">
                <img src="<?= base_url('Assets/Image/icons8-phone-64.png') ?>" alt="Icone Téléphone" width="30" height="30">
                <a class="numero-tel" href="tel:+06.51.53.65.32">06.51.53.65.32</a>
            </div>
            <p class="BBC-section">Bye Buy Car Lille</p>
            <p class="couleur-info">Tous nos véhicules sont garantis 12mois</p>
            <p class="couleur-info">Extention de garanti possible</p>

            <?php else: ?>
            <p>Le véhicule n'a pas été trouvé.</p>
            <?php endif; ?>
        </div>  
    </div>

    <form class="formulaire" action="" method="post"> <!---Mettre le lien PHP-->

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

        <h2>Les options :</h2>
        
        <div class="liste-1">
            <ul>
                <?php foreach ($assigner as $key => $option) {
                    if ($key % 2 == 0) { ?>
                    <li><?= $option->opt_libelle ?></li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>

        <div class="liste-2">
            <ul>
                <?php foreach ($assigner as $key => $option) {
                    if ($key % 2 == 1) { ?>
                        <li><?= $option->opt_libelle ?></li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>

    </section>

    <script src="<?= base_url('Assets/JS/carrousel.js')?>"></script>