<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/container_afficher_vehicule.css') ?>" >
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

        <div class="afficher-liste">
            <?php if(!empty($liste)): ?>
                <table>
                    <tr>
                        <th>Marque</th>
                        <th>Modèle</th>
                        <th>Année</th>
                        <th>Kilométrage</th>
                        <th>Couleur</th>
                        <th>Carburant</th>
                        <th>Transmission</th>
                        <th>Prix</th>
                        <th>Nom du client</th>
                        <th>Prénom du client</th>
                        <th>Options du véhicule</th>
                    </tr>
            <?php foreach($liste as $vehicule): ?>
                <tr>
                    <td><?= $vehicule->veh_marque ?></td>
                    <td><?= $vehicule->veh_modele ?></td>
                    <td><?= $vehicule->veh_annee ?></td>
                    <td><?= $vehicule->veh_kilometre ?></td>
                    <td><?= $vehicule->veh_couleur ?></td>
                    <td><?= $vehicule->veh_carburant ?></td>
                    <td><?= $vehicule->veh_transmission ?></td>
                    <td><?= $vehicule->veh_prix ?></td>
                    <td><?= $vehicule->cli_nom ?></td>
                    <td><?= $vehicule->cli_prenom ?></td>
                    <td><pre><?= $vehicule->options ?></pre></td>
                </tr>
            <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>

</section>
</body>
</html>