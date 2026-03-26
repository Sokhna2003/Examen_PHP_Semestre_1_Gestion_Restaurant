<?php
    require_once('data.php');

$ajout = $_POST['ajout'] ?? '';

if ($ajout == 'add_plat') {
    $newPlat = [
        'code' => $_POST['code'],
        'nom' => $_POST['nom'],
        'prix' => $_POST['prix'],
        'categorie' => $_POST['categorie'],
        'disponibilite' => $_POST['disponibilite'],
    ];
    $_SESSION['plats'][] = $newPlat;
    header("Location:" .WEBROOT."?page=listeplat");
    exit();
}


