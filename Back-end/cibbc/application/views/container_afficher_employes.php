<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/container_afficher_employes.css') ?>" >
    <title>Les Employés</title>
</head>
<body>
    <section>
    <div class="haut-page">
        <a href="<?= site_url('EspacePro')?>">
            <img class="fleche" src="<?= base_url('Assets/image/flèche retour')?>" alt="Flèche retour" width="40px" height="40px">
        </a>
        <h2 class="titre-vehicule">Les employés</h2>
    </div>

        <div class="afficher-liste">
            <?php if(!empty($liste)): ?>
                <table>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Code Postal</th>
                        <th>Ville</th>
                        <th>Téléphone</th>
                        <th>Mail</th>
                    </tr>
                    <?php foreach($liste as $employe): ?>
                    <tr>
                        <td><?= $employe->emp_nom ?></td>
                        <td><?= $employe->emp_prenom ?></td>
                        <td><?= $employe->emp_adresse ?></td>
                        <td><?= $employe->emp_zipcode ?></td>
                        <td><?= $employe->emp_ville ?></td>
                        <td><?= $employe->emp_phone ?></td>
                        <td><?= $employe->emp_mail ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
</div>

</section>
</body>
</html>