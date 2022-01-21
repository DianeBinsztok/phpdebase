<!DOCTYPE html>
<html lang="fr">

<!--les infos de tête-->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon CV</title>
    <link rel="stylesheet" media="screen and (max-width : 800px)" href="./css/phonestyle.css">
    <link rel="stylesheet" media="screen and (min-width : 800px)" href="./css/style2.css">

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

<!--En-tête: table des matières et navigation-->
<header>
    <div id="headband">

        <!--Formulaire de contact en bas de  page-->
        <section class="bloc background" id="contact">
            <h2 class="titles_font">Me contacter:</h2>

            <adress>

                <p>email:<a href="mailto=babla">diane@fakemail.com</a></p>
                <p>github:<a href="">ma page</a></p>

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

    <nav>

        <a href="./index.html">Mon profil</a>
        <a href="./hobbies.html">Autres activités</a>
        <a href="./contact.html">Contact</a>

    </nav>
</header>

<!--Corps de page-->
<main>

    <h2 class="titles_font">Mes centres d'intérêt:</h2>

    <div id="hobbies_page">
        <div id="arts_pair">
            <section class="bloc" id="arts">

                <h3 class="titles_font">Arts plastiques</h3>

                <p>J'aime dessiner et peindre, notamment du nu à l'atelier de la Grande Chaumière, à Paris.</p>

                <iframe class="video" src="https://www.youtube.com/embed/CI4NrsBXI9o" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

            </section>

            <section class="bloc" id="music">
                <h3 class="titles_font">Musique</h3>

                <p>Je joue - laborieusement - de la guitare et du piano et j'aime chanter en amateure.</p>
                <p>En ce moment, j'apprends des cantiques de Noël <span style='font-size:30px;'>&#127877;</span> :
                </p>

                <iframe class="video" src="https://www.youtube.com/embed/B2T1EQ7ClBY" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </section>
        </div>

        <section class="bloc" id="sports">
            <h3 class="titles_font">Sports</h3>

            <div id="sports_pair">
                <div class="sport_bloc">
                    <p>J'ai pratiqués divers arts martiaux et me suis récemment tournée vers les MMA.</p>

                    <iframe class="video" src="https://www.youtube.com/embed/MJqR14dClfE"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>

                <div class="sport_bloc">
                    <p>Je me suis aussi mise au skate ces derniers mois, pour le plus grand plaisir de mes
                        cervicales
                        <span style='font-size:30px;'>&#129301;</span>
                    </p>
                    <p>Pour l'instant, j'en suis encore à apprendre le ollie:</p>

                    <iframe class="video" src="https://www.youtube.com/embed/arDVW-aWWys"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </section>

    </div>



</main>


<!--éventuellement un pied de page-->
<footer>
    cv - Diane Binsztok
</footer>

</body>

</html>