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

<form action="<?= site_url('Crud/ajouterVehicule') ?>" method="post" onsubmit="return submitForm(event)">

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
            <div class="form-group-checkbox">
            <label for="nouveau_client">Cocher la case si ce véhicule est associé à un nouveau client ?</label>
            <input type="checkbox" id="nouveau_client" class="nouveau_client" name="nouveau_client">
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

            

            <div>
                <input type="file" class="image" name="images[]" multiple accept=".png, .jpg, .jpeg">
            </div>
        </div>

    </div>

<div id="nouveau_client_form" style="display:none;">


    <div class="container">

        <div class="groupe1">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div class="form-group">
                <label for="adresse">Adresse:</label>
                <input type="text" id="adresse" name="adresse">
            </div>
            <div class="form-group">
                <label for="zipcode">Code Postal:</label>
                <input type="text" id="zipcode" name="zipcode">
            </div>
            <div class="form-group">
                <label for="ville">Ville:</label>
                <input type="text" id="ville" name="ville">
            </div>
        </div>
        <div class="groupe2">
            
            <div class="form-group">
                <label for="phone">Téléphone:</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="mail">Mail:</label>
                <input type="text" id="mail" name="mail">
            </div>
            <div class="form-group">
                <label for="vehicule">Véhicule:</label>
                <input type="text" id="vehicule" name="vehicule">
            </div>
            <div class="form-group">
                <label for="login">Login:</label>
                <input type="text" id="login" name="login">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" id="password" name="password">
            </div>
            
        </div>

    </div>

</div>


    <input class="bouton" type="submit" value="Ajouter Véhicule">
</form>

<script src="<?= base_url('Assets/JS/formulaire_ajout_vehicule')?>"></script>
</body>
</html>