<?php
$metaTitle="Diane Binsztok - Mon CV";
$metaDescription = "Bienvenue sur la page d'accueil de mon CV";
require "header.php";




if($_GET["page"]=="accueil"){
    include "accueil.php";
}elseif($_GET["page"]=="contact"){
    include "contact.php";
}elseif($_GET["page"]=="hobbies"){
    include "hobbies.php";
} else{
include "error.php";
}


require "footer.php";

?>