<?php
$metaTitle="Diane Binsztok - Mon CV";
$metaDescription = "Bienvenue sur la page d'accueil de mon CV";
require "header.php";

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



require "footer.php";
?>