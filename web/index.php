<?php 
    define("WEBROOT","http://localhost:8000/");
    require_once "data.php"; 
    // require_once "fixe.php";
    $page="listeplat";
    if (isset($_REQUEST["page"])) {
        $page=$_REQUEST["page"];
    }
    if ($page=="listeplat") {
        $produits=getAllPlat();
        require_once("listeplat.php");
    }elseif ($page=="ajouPlat") {
        require_once "traitementAjout.php";
        require_once("ajoutPlat.php");

    } elseif ($page=='detail') {
        $code = $_GET['code'] ?? null ; 
        $plats = getPlatByCode($code);
        require_once('detail.php');
    }
    // elseif ($page=="ajoutproduit") {
    //     require_once("ajoutproduit.php");
    // }
    // elseif ($page=="voireproduits") {
    //     require_once("voireproduits.php");
    // }
    // elseif ($page=="cardproduits") {
    //     require_once("cardproduits.php");
    // }
    else{
        echo "page introuvable";
    }

?>




