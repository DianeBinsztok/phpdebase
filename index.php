<?php

// informations de session
session_start();
$date=date('Y-m-d H:i:s');
$visitedPages=0;
if(!isset($_SESSION['dateFirstVisit'])){
    $_SESSION['dateFirstVisit']=$date;
}
if(!isset($_SESSION['countViewPage'])){
    $_SESSION['countViewPage']=$visitedPages;
}


// pour les requêtes de page:
$routes=[
    null=>["file"=>"accueil.php","mTitle"=>"Diane Binsztok - Mon CV", "mDesc" =>"Bienvenue sur la page d'accueil de mon CV"],
    "accueil"=>["file"=>"accueil.php","mTitle"=>"Diane Binsztok - Mon CV", "mDesc" =>"Bienvenue sur la page d'accueil de mon CV"],
    "contact"=>["file"=>"contact.php","mTitle"=>"Diane Binsztok - Contact", "mDesc" =>"Contactez-moi"],
    "hobbies"=>["file"=>"hobbies.php","mTitle"=>"Diane Binsztok - Mes hobbies", "mDesc" =>"Voici une description succinte de mes hobbies"]
];


// routage et envoi des meta personnalisés:
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
if ($routes[$page]) {
    $metaTitle=$routes[$page]['mTitle'];
    $metaDescription=$routes[$page]['mDesc'];
    require "header.php";
    include  $routes[$page]["file"];
    require "footer.php";
}else{
    include  "error.php";
}



?>