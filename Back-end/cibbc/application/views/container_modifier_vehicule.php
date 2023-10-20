<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/container_modifier_vehicule.css') ?>" >
    <title>Modification véhicules</title>
</head>
<body>

<section>
    <div class="haut-page">
        <a href="<?= site_url('EspacePro')?>">
            <img class="fleche" src="<?= base_url('Assets/image/flèche retour')?>" alt="Flèche retour" width="40px" height="40px">
        </a>
        <h2 class="titre-vehicule">Les véhicules</h2>
    </div>

    <div class="afficher-liste">
        <?php if(!empty($liste)): ?>
            <table>
                <tr>
                    <th class="vide"></th>
                    <th class="id"></th>
                    <th>Marque</th>
                    <th>Modèle</th>
                    <th>Année</th>
                    <th>Kilométrage</th>
                    <th>Couleur</th>
                    <th>Carburant</th>
                    <th>Transmission</th>
                    <th>Prix</th>
                </tr>
                <?php foreach($liste as $vehicule): ?>
                <tr id="recuperer<?= $vehicule->veh_id ?>">
                    <a href="#ancrage"><td class="checkbox"><input type="checkbox" class="multi" name="checkboxId" id="checkboxId<?= $vehicule->veh_id ?>" value="<?= $vehicule->veh_id ?>" onclick="scrollToForm(<?= $vehicule->veh_id ?>)"></td></a>
                    <td class="id"><?= $vehicule->veh_id ?></td>
                    <td class="marque"><?= $vehicule->veh_marque ?></td>
                    <td class="modele"><?= $vehicule->veh_modele ?></td>
                    <td class="annee"><?= $vehicule->veh_annee ?></td>
                    <td class="kilometre"><?= $vehicule->veh_kilometre ?></td>
                    <td class="couleur"><?= $vehicule->veh_couleur ?></td>
                    <td class="carburant"><?= $vehicule->veh_carburant ?></td>
                    <td class="transmission"><?= $vehicule->veh_transmission ?></td>
                    <td class="prix"><?= $vehicule->veh_prix ?></td>
                </tr>

                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>

</section>

<section>
    <div class="explication">
    <p id="ancrage">Modification du véhciule</p>
    </div>
</section>

<form action="<?= site_url('Crud/modifierVehicule/id') ?>" method="post">

    <div class="container">

        <div class="groupe1">
                
            <input type="hidden" id="id" class="id" name="id">
            <div class="form-group">
                <label for="marque">Marque:</label>
                <input type="text" id="marque" name="marque" placeholder="<?= isset($selected_vehicle) ? $selected_vehicle->veh_marque : '' ?>">
            </div>
            <div class="form-group">
                <label for="modele">Modèle:</label>
                <input type="text" id="modele" name="modele" placeholder="<?= isset($selected_vehicle) ? $selected_vehicle->veh_modele : '' ?>">
            </div>
            <div class="form-group">
                <label for="annee">Année:</label>
                <input type="text" id="annee" name="annee" placeholder="<?= isset($selected_vehicle) ? $selected_vehicle->veh_annee : '' ?>">
            </div>
            <div class="form-group">
                <label for="kilometrage">Kilométrage:</label>
                <input type="text" id="kilometrage" name="kilometrage" placeholder="<?= isset($selected_vehicle) ? $selected_vehicle->veh_kilometre : '' ?>">
            </div>
        </div>
        <div class="groupe2">
            <div class="form-group">
                <label for="couleur">Couleur:</label>
                <input type="text" id="couleur" name="couleur" placeholder="<?= isset($selected_vehicle) ? $selected_vehicle->veh_couleur : '' ?>">
            </div>
            <div class="form-group">
                <label for="carburant">Carburant:</label>
                <input type="text" id="carburant" name="carburant" placeholder="<?= isset($selected_vehicle) ? $selected_vehicle->veh_carburant: '' ?>">
            </div>
            <div class="form-group">
                <label for="transmission">Transmission:</label>
                <input type="text" id="transmission" name="transmission" placeholder="<?= isset($selected_vehicle) ? $selected_vehicle->veh_transmission : '' ?>">
            </div>
            <div class="form-group">
                <label for="prix">Prix:</label>
                <input type="text" id="prix" name="prix" placeholder="<?= isset($selected_vehicle) ? $selected_vehicle->veh_prix : '' ?>">
            </div>
        </div>

    </div>

    <input class="bouton" type="submit" id="bouton-submit" value="Modifier Véhicule">
</form>

<script src="<?= base_url('Assets/JS/ancre-checkbox')?>"></script>
<script src="<?= base_url('Assets/JS/valueTransferVehicule')?>"></script>
<script src="<?= base_url('Assets/JS/formulaire_modif_vehicule')?>"></script>



</body>
</html>