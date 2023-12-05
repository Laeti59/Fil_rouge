<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/container_ajouter_vehicule.css') ?>" >
    <title>Ajout véhicules</title>
</head>
<body>

<section>
    <div class="explication">
        <a href="<?= site_url('EspacePro')?>">
            <img class="fleche" src="<?= base_url('Assets/image/flèche retour')?>" alt="Flèche retour" width="40px" height="40px">
        </a>
        <p>Remplissez tous les champs pour ajouter le nouveau véhicule</p>
    </div>
</section>

<form action="<?= site_url('Crud/ajouterVehicule') ?>" method="post" onsubmit="return submitForm(event)"  >

    <div class="container">

        <div class="groupe1">

            <div class="form-group">
                <label for="marque">Marque:</label>
                <input type="text" id="marque" name="marque">
            </div>

            <div class="form-group">
                <label for="modele">Modèle:</label>
                <input type="text" id="modele" name="modele">
            </div>

            <div class="form-group">
                <label for="annee">Année:</label>
                <input type="text" id="annee" name="annee">
            </div>

            <div class="form-group">
                <label for="kilometrage">Kilométrage:</label>
                <input type="text" id="kilometrage" name="kilometrage">
            </div>
            <div>
                <input type="file" class="images" name="images[]" multiple accept=".png, .jpg, .jpeg"><br><br>
            </div>
            <div class="form-group-checkbox">
            <label for="client_existant">Cocher la case si ce véhicule est associé à un client existant ?</label>
            <input type="checkbox" id="client_existant" class="client_existant" name="client_existant">
            </div>
        </div>

        <div class="groupe2">

            <div class="form-group">
                <label for="couleur">Couleur:</label>
                <input type="text" id="couleur" name="couleur">
            </div>

            <div class="form-group">
                <label for="carburant">Carburant:</label>
                <input type="text" id="carburant" name="carburant">
            </div>

            <div class="form-group">
                <label for="transmission">Transmission:</label>
                <input type="text" id="transmission" name="transmission">
            </div>

            <div class="form-group">
                <label for="prix">Prix:</label> 
                <input type="text" id="prix" name="prix">
            </div>
            <div class="form-group">
            <label for="options" class="titre-opt" >Options du véhicule :</label><br>
            <select name="options[]" id="options" multiple="multiple">
                <?php foreach ($liste_options as $option) : ?>
                    <option value="<?php echo $option->opt_id; ?>">
                        <?php echo $option->opt_libelle; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            </div>
        </div>

    </div>

    <div id="client_existant_form" class="afficher-liste" style="display:none;">

        <?php if(!empty($liste)): ?>
            <table>
                <tr>
                    <th class="vide"></th>
                    <th class="id"></th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Code Postal</th>
                    <th>Ville</th>
                    <th>Téléphone</th>
                    <th>Mail</th>
                </tr>
                <?php foreach($liste as $client): ?>
                <tr id="recuperer<?= $client->cli_id ?>">
                    <td class="checkbox"><input type="checkbox" class="multi" name="checkboxId[]" id="checkboxId<?= $client->cli_id ?>" value="<?= $client->cli_id ?>"></td>
                    <td class="id"><?= $client->cli_id ?></td>
                    <td class="nom"><?= $client->cli_nom ?></td>
                    <td class="prenom"><?= $client->cli_prenom ?></td>
                    <td class="adresse-class"><?= $client->cli_adresse ?></td>
                    <td class="zipcode"><?= $client->cli_zipcode ?></td>
                    <td class="ville"><?= $client->cli_ville ?></td>
                    <td class="phone"><?= $client->cli_phone ?></td>
                    <td class="mail-class"><?= $client->cli_mail ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>

    <input class="bouton" type="submit" value="Ajouter Véhicule">
</form>

<script src="<?= base_url('Assets/JS/formulaire_ajout_vehicule')?>"></script>
<script src="<?= base_url('Assets/JS/openPopup')?>"></script>

</body>
</html>