<!DOCTYPE html>

<html lang="fr">
<!--les infos de tête-->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $metaTitle ?></title>
    <meta name="description" content=<?=  $metaDescription ?>/>
    <link rel="stylesheet" media="screen and (max-width : 800px)" href="./css/phonestyle.css">
    <link rel="stylesheet" media="screen and (min-width : 800px)" href="./css/style.css">

    <!--La font pour les titres-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@600&display=swap" rel="stylesheet">


    <!--La font pour le reste du texte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--En gras:-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

</head>


<!--la page:-->

<body>

<!--En-tête: contact, titre, photo  et navigation-->
<header>
    <div id="headband">

        <!--Encart de contact en haut de  page-->
        <section class="bloc" id="contact">
            <h2 class="titles_font">Me contacter:</h2>

            <adress>
                <p>email:<a href="mailto=babla@gmail.com">diane@fakemail.com</a></p>
                <p>github:<a href="https://github.com/">ma page</a></p>
            </adress>
        </section>

        <!--Container Titre et image pour un overlay en mobile-->
        <div id="img-text-container">
            <!--Titre et sous-titre-->
            <div class="titles_font" id="me">
                <h1>Diane Binsztok:</h1>
                <p> Développeuse Web</p>
            </div>

            <!--Photo de profil-->
            <img id="img" src="./img/profil.JPG" alt="photo de profil">
        </div>

    </div>

    <!--bandeau de navigation-->
    <nav>
        <a href="./index.php">Mon profil</a>
        <a href="hobbies.php">Autres activités</a>
        <a href="./contact.php">Contact</a>

    </nav>
</header>
