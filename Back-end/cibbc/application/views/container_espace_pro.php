<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "<?= base_url('Assets/CSS/container_espace_pro.css') ?>" >
    <title>Espace professionnels</title>
</head>
<body>
    
<section>
<div class="titre-bienvenu">
    <?php if (!empty($nom)): ?>
        <h2 class="nom_pro"> Bienvenue <?php echo $nom[0]->emp_nom . " " . $nom[0]->emp_prenom; ?></h2>
    <?php endif; ?>
</div>

<div class="contenu">
    <div class="vehicules">
        <h3 class="sous-titre">Véhicules</h3>
        <ul>
            <a href="<?= site_url('AjouterVehicule')?>">
            <li>Ajouter un véhicule</li></a>
            <a href="<?= site_url('AfficherVehicule')?>">
            <li>Voir les véhicules</li></a>
            <a href="<?= site_url('ModifierVehicule')?>">
            <li>Modifier un véhicule</li></a>
            <a href="<?= site_url('SupprimerVehicule')?>">
            <li>Supprimer un véhicule</li></a>
        </ul>
    </div>

    <div class="client">
        <h3 class="sous-titre">Clients</h3>
        <ul>
            <a href="<?= site_url('AjouterClient')?>">
            <li>Ajouter un client</li></a>
            <a href="<?= site_url('AfficherClient')?>">
            <li>Voir les clients</li></a>
            <a href="<?= site_url('ModifierClient')?>">
            <li>Modifier un clients</li></a>
            <a href="<?= site_url('SupprimerClient')?>">
            <li>Supprimer un client</li></a>
        </ul>
    </div>

    <div class="employes">
        <h3 class="sous-titre">Employés</h3>
        <ul>
            <a href="<?= site_url('AjouterEmployes')?>">
            <li>Ajouter un employé</li></a>
            <a href="<?= site_url('AfficherEmployes')?>">
            <li>Voir les employés</li></a>
            <a href="<?= site_url('ModifierEmployes')?>">
            <li>Modifier un employé</li></a>
            <a href="<?= site_url('SupprimerEmployes')?>">
            <li>Supprimer un employé</li></a>
        </ul>
    </div>
</div>

</section>
</body>
</html>