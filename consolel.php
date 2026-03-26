<?php
$plats = [
    ['code' => 1, 'nom' => 'Maffé', 'prix' => 1500, 'categorie' => 'Plat', 'disponibilite' => "true"],
    ['code' => 2, 'nom' => 'Salade', 'prix' => 1000, 'categorie' => 'Entrée', 'disponibilite' => "false"]
];

function ajouterPlat(&$plat) {
    echo "\n==== Nouveau Plat ====\n";
    echo "code : ";
    $code = (int)trim(fgets(STDIN));
    // verifions si le code est unique
    // foreach ($liste as $l) {
    //     if ($l['code'] === $code) {
    //         echo "Erreur ce code existe deja \n";
    //         return;
    //     }
    // }
    echo "nom : ";
    $nom = trim(fgets(STDIN));
    echo "prix : ";
    $prix = (float)trim(fgets(STDIN));
    echo "categorie(Entrée/Plat/Dessert) : ";
    $cat = trim(fgets(STDIN));
    echo "Disponible (true / fasle) : ";
    $dispo = trim(fgets(STDIN));

    $plat[]= [
        'code' => $code,
        'nom' => $nom,
        'prix' => $prix,
        'categorie' => $cat,
        'disponibilite' => $dispo
    ];
}

    function afficherTousLesPlats($plat){
        foreach ($plat as $p) {
            echo "code: ".$p["code"]."\n";
            echo "nom: ".$p["nom"]."\n";
            echo "prix: ".$p["prix"]."\n";
            echo "categorie: ".$p["categorie"]."\n";
            echo "disponibilite: ".$p["disponibilite"]."\n";
        }
    }

    function rechercherPlat($plat){
       echo "Entrer le code a rechercher \n";
       $code = (int)trim(fgets(STDIN)) ;
        foreach ($plat as $p) {
            if ($l['code'] === $code) {
                echo "\t Resultat : " .$l['nom']."  ".$l['prix']."  ".$l['categorie']. "\n";
                     
                return ;
            }
        }
        echo "Aucun plat trouver pour le code $code \n";
    }

    function afficherPrixMoyen($plat) {
        $sommePrix = 0;
        foreach ($plat as $p) {
            $sommePrix += $p['prix'];
        }
        $moyenne = $sommePrix / count($plat);
        echo "\t Prix moyen des plats : " . $moyenne . " \n";
    }

    function afficherLePlatLePlusCher($plat) {
        $prixMax = $plat[0];
        foreach ($plat as $p) {
            if ($p['prix'] > $prixMax['prix']) {
                $prixMax = $p;
            }
        }
        echo "\t Le plat le plus cher : " .$prixMax['nom']."  ".($prixMax['prix']). "\n";
    }

    function menu(){
        echo "\n============== GESTION RESTAURANT ==============\n";
        echo "1. Ajouter un plat\n";
        echo "2. Afficher tous les plats\n";
        echo "3. Rechercher un plat\n";
        echo "4. Afficher le prix moyen\n";
        echo "5. Afficher le plat le plus cher\n";
        echo "6. Quitter\n";        
    }

    do {
        menu();
        echo "Votre choix : ";
        $choix = trim(fgets(STDIN));

    switch ($choix) {
        case '1':
            ajouterPlat($plats);
            break;
        case '2':
            afficherTousLesPlats($plats);
            break;
        case '3':
            rechercherPlat($plats);
            break;
        case '4':
            afficherPrixMoyen($plats);
            break;
        case '5':
            afficherLePlatLePlusCher($plats);
            break;
        case '6':
            echo "Au revoir \n";
            break;
        default:
            echo "Choix invalide\n";
            break;
    }

    } while ($choix != 6);