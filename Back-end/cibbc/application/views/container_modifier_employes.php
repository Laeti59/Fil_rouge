<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/container_modifier_employees.css') ?>" >
    <title>Modification employés</title>
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
                    <th class="vide"></th>
                    <th class="id"></th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Code Postal</th>
                    <th>Ville</th>
                    <th>Téléphone</th>
                    <th>Mail</th>
                    <th>Login</th>
                    <th class="id">Password</th>
                </tr>
                <?php foreach($liste as $employe): ?>
                <tr id="recuperer<?= $employe->emp_id ?>">
                    <a href="#ancrage"><td class="checkbox"><input type="checkbox" class="multi" name="checkboxId" id="checkboxId<?= $employe->emp_id ?>" value="<?= $employe->emp_id ?>" onclick="scrollToForm(<?= $employe->emp_id ?>)"></td></a>
                    <td class="id"><?= $employe->emp_id ?></td>
                    <td class="nom"><?= $employe->emp_nom ?></td>
                    <td class="prenom"><?= $employe->emp_prenom ?></td>
                    <td class="adresse-class"><?= $employe->emp_adresse ?></td>
                    <td class="zipcode"><?= $employe->emp_zipcode ?></td>
                    <td class="ville"><?= $employe->emp_ville ?></td>
                    <td class="phone"><?= $employe->emp_phone ?></td>
                    <td class="mail-class"><?= $employe->emp_mail ?></td>
                    <td class="login"><?= $employe->emp_login ?></td>
                    <td class="password"><?= $employe->emp_password ?></td>
                </tr>

                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>

</section>

<section>
    <div class="explication">
    <p id="ancrage">Modification de l'employé</p>
    </div>
</section>

<form action="<?= site_url('CrudEmployees/modifierEmployes/id') ?>" method="post">

    <div class="container">

        <div class="groupe1">
                
            <input type="hidden" id="id" class="id" name="id">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" placeholder="<?= isset($selected_employe) ?$selected_employe->emp_nom : '' ?>">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" placeholder="<?= isset($selected_employe) ? $selected_employe->emp_prenom : '' ?>">
            </div>
            <div class="form-group">
                <label for="adresse">Adresse:</label>
                <input type="text" id="adresse" name="adresse" placeholder="<?= isset($selected_employe) ? $selected_employe->emp_adresse : '' ?>">
            </div>
            <div class="form-group">
                <label for="zipcode">Code Postal:</label>
                <input type="text" id="zipcode" name="zipcode" placeholder="<?= isset($selected_employe) ? $selected_employe->emp_zipcode : '' ?>">
            </div>
            <div class="form-group">
                <label for="ville">Ville:</label>
                <input type="text" id="ville" name="ville">
            </div>
        </div>
        <div class="groupe2">
        
            <div class="form-group">
                <label for="phone">Téléphone:</label>
                <input type="text" id="phone" name="phone" placeholder="<?= isset($selected_employe) ? $selected_employe->emp_phone : '' ?>">
            </div>
            <div class="form-group">
                <label for="mail">Mail:</label>
                <input type="text" id="mail" name="mail" placeholder="<?= isset($selected_employe) ? $selected_employe->emp_mail : '' ?>">
            </div>
            <div class="form-group">
                <label for="login">Login:</label>
                <input type="text" id="login" name="login" placeholder="<?= isset($selected_employe) ? $selected_employe->emp_login : '' ?>">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" id="password" name="password" placeholder="<?= isset($selected_employe) ? $selected_employe->emp_password : '' ?>">
            </div>
        </div>

    </div>

    <input class="bouton" type="submit" id="bouton-submit" value="Modifier Employé">
</form>

<script src="<?= base_url('Assets/JS/valueTransferEmployees')?>"></script>
<script src="<?= base_url('Assets/JS/ancre-checkbox')?>"></script>
<script src="<?= base_url('Assets/JS/formulaire_modif_employe')?>"></script>



</body>
</html>