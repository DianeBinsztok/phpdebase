<?php


if($_GET["page"]=="accueil"){
    include "accueil.php";
}elseif($_GET["page"]=="contact"){
    include "contact.php";
}elseif($_GET["page"]=="hobbies"){
    include "hobbies.php";
} else{
include "error.php";
}


?>