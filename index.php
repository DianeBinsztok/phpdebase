<?php
session_start();

$date=date('Y-m-d H:i:s');
$visitedPages=0;
if(!isset($_SESSION['dateFirstVisit'])){
    $_SESSION['dateFirstVisit']=$date;
}
if(!isset($_SESSION['countViewPage'])){
    $_SESSION['countViewPage']=$visitedPages;
}


$metaTitle="Diane Binsztok - Mon CV";
$metaDescription = "Bienvenue sur la page d'accueil de mon CV";
require "header.php";


// pour les requêtes de page:
if (isset($_GET["page"])){
    $page= filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
    if($page=="contact"){
        include "contact.php";
    }elseif($page=="hobbies"){
        include "hobbies.php";
    }else{
        include "error.php";
    }
}else{
    include "accueil.php";
}

// infos de session:


require "footer.php";
?>