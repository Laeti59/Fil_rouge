<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/container_supprimer_clients.css') ?>" >
    <title>Les Clients</title>
</head>
<body>
    <section>
    <div class="haut-page">
        <a href="<?= site_url('EspacePro')?>">
            <img class="fleche" src="<?= base_url('Assets/image/flèche retour')?>" alt="Flèche retour" width="40px" height="40px">
        </a>
        <h2 class="titre-vehicule">Les clients</h2>
    </div>

        <form method="post" action="<?php echo base_url('CrudClient/supprimerClient/id'); ?>">
            <div class="afficher-liste">
                <?php if(!empty($liste)): ?>
                    <table>
                        <tr>
                            <th class="vide"></th>
                            <th class="id">ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Adresse</th>
                            <th>Code Postal</th>
                            <th>Ville</th>
                            <th>Téléphone</th>
                            <th>Mail</th>
                        </tr>
                <?php foreach($liste as $client): ?>
                    <tr>
                        <td class="checkbox">
                        <input type="checkbox" class="multi" name="id" value="<?= $client->cli_id ?>">
                        </td>
                        <td class="id"><?= $client->cli_id ?></td>
                        <td><?= $client->cli_nom ?></td>
                        <td><?= $client->cli_prenom ?></td>
                        <td><?= $client->cli_adresse ?></td>
                        <td><?= $client->cli_zipcode ?></td>
                        <td><?= $client->cli_ville ?></td>
                        <td><?= $client->cli_phone ?></td>
                        <td><?= $client->cli_mail ?></td>
                    </tr>
                <?php endforeach; ?>
                    </table>
                <?php endif; ?>
            </div>

            <input class="bouton" type="submit" value="Suppression Client">
        </form>
    </section>
</body>
</html>