<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/container_modifier_clients.css') ?>" >
    <title>Modification clients</title>
</head>
<body>

<section>
    <div class="haut-page">
        <a href="<?= site_url('EspacePro')?>">
            <img class="fleche" src="<?= base_url('Assets/image/flèche retour')?>" alt="Flèche retour" width="40px" height="40px">
        </a>
        <h2 class="titre-vehicule">Les clients</h2>
    </div>

    <div class="afficher-liste">
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
                    <a href="#ancrage"><td class="checkbox"><input type="checkbox" class="multi" name="checkboxId" id="checkboxId<?= $client->cli_id ?>" value="<?= $client->cli_id ?>" onclick="scrollToForm(<?= $client->cli_id ?>)"></td></a>
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

</section>

<section>
    <div class="explication">
    <p id="ancrage">Modification du client</p>
    </div>
</section>

<form action="<?= site_url('CrudClient/modifierClient/id') ?>" method="post">

    <div class="container">

        <div class="groupe1">
                
            <input type="hidden" id="id" class="id" name="id">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" placeholder="<?= isset($selected_client) ?$selected_client->cli_nom : '' ?>">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" placeholder="<?= isset($selected_client) ? $selected_client->cli_prenom : '' ?>">
            </div>
            <div class="form-group">
                <label for="adresse">Adresse:</label>
                <input type="text" id="adresse" name="adresse" placeholder="<?= isset($selected_client) ? $selected_client->cli_adresse : '' ?>">
            </div>
            <div class="form-group">
                <label for="zipcode">Code Postal:</label>
                <input type="text" id="zipcode" name="zipcode" placeholder="<?= isset($selected_client) ? $selected_client->cli_zipcode : '' ?>">
            </div>
        </div>
        <div class="groupe2">
            <div class="form-group">
                <label for="ville">Ville:</label>
                <input type="text" id="ville" name="ville" placeholder="<?= isset($selected_client) ? $selected_client->cli_ville : '' ?>">
            </div>
            <div class="form-group">
                <label for="phone">Téléphone:</label>
                <input type="text" id="phone" name="phone" placeholder="<?= isset($selected_client) ? $selected_client->cli_phone : '' ?>">
            </div>
            <div class="form-group">
                <label for="mail">Mail:</label>
                <input type="text" id="mail" name="mail" placeholder="<?= isset($selected_client) ? $selected_client->cli_mail : '' ?>">
            </div>
        </div>

    </div>

    <input class="bouton" type="submit" id="bouton-submit" value="Modifier Client">
</form>

<script src="<?= base_url('Assets/JS/valueTansferClient')?>"></script>
<script src="<?= base_url('Assets/JS/ancre-checkbox')?>"></script>
<script src="<?= base_url('Assets/JS/formulaire_modif_client')?>"></script>



</body>
</html>