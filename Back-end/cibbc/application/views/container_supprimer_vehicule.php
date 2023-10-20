<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/container_supprimer_vehicule.css') ?>" >
    <title>Les véhicules</title>
</head>
<body>
    <section>
    <div class="haut-page">
        <a href="<?= site_url('EspacePro')?>">
            <img class="fleche" src="<?= base_url('Assets/image/flèche retour')?>" alt="Flèche retour" width="40px" height="40px">
        </a>
        <h2 class="titre-vehicule">Les véhicules</h2>
    </div>

        <form method="post" action="<?php echo base_url('Crud/supprimerVehicule/id'); ?>">
            <div class="afficher-liste">
                <?php if(!empty($liste)): ?>
                    <table>
                        <tr>
                            <th class="vide"></th>
                            <th class="id">ID</th>
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
                    <tr>
                        <td class="checkbox">
                        <input type="checkbox" class="multi" name="id" value="<?= $vehicule->veh_id ?>">
                        </td>
                        <td class="id"><?= $vehicule->veh_id ?></td>
                        <td><?= $vehicule->veh_marque ?></td>
                        <td><?= $vehicule->veh_modele ?></td>
                        <td><?= $vehicule->veh_annee ?></td>
                        <td><?= $vehicule->veh_kilometre ?></td>
                        <td><?= $vehicule->veh_couleur ?></td>
                        <td><?= $vehicule->veh_carburant ?></td>
                        <td><?= $vehicule->veh_transmission ?></td>
                        <td><?= $vehicule->veh_prix ?></td>
                    </tr>
                <?php endforeach; ?>
                    </table>
                <?php endif; ?>
            </div>

            <input class="bouton" type="submit" value="Suppression Véhicule">
        </form>
    </section>
</body>
</html>