<!DOCTYPE html>
<html lang="fr">

<!--les infos de tête-->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon CV</title>
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
            <a href="index.php">Mon profil</a>
            <a href="./hobbies.html">Autres activités</a>
            <a href="./contact.html">Contact</a>

        </nav>
    </header>

    <!--Corps de page-->
    <main>
        <!--Ligne 1 : Compétences + Expériences-->
        <div id="skills_experience">

            <!--1-a: Compétences-->
            <section class="bloc" id="skills">

                <h2 class="titles_font">Compétences:</h2>

                <h3 class="titles_font">Développement:</h3>
                <ul>
                    <li>
                        <span class="bold">Scripts Shell:</span> notions
                    </li>
                    <li>
                        <span class="bold">HTML 5/CSS 3:</span> notions
                    </li>
                </ul>

                <h3 class="titles_font">Langues:</h3>
                <ul>
                    <li>
                        <span class="bold"> 🇫🇷 Français:</span> langue maternelle
                    </li>
                    <li>
                        <span class="bold"> 🇬🇧 Anglais:</span> courant
                    </li>
                    <li>
                        <span class="bold"> 🇯🇵 Japonais:</span> conversationnel
                    </li>
                    <li>
                        <span class="bold"> 🇩🇪 🇮🇷 Allemand et Persan:</span> bases
                    </li>
                </ul>

            </section>

            <!--1-b: Expérience -->
            <section class="bloc" id="experience">
                <h2 class="titles_font">Expérience professionnelle:</h2>
                <ul>
                    <li>
                        <h4>Depuis 2016: Intérim</h4>
                        <p> Depuis mon arrivée dans la région, j'ai rempli plusieurs missions d'intérim en <span
                                class="bold">accueil</span>
                            en
                            entreprise</p>
                    </li>
                    <li>
                        <h4>2014-2015: Enseignement de langues à Osaka</h4>
                        <p> J'ai enseigné le <span class="bold">français et l'anglais </span>en cours particuliers pour
                            des japonais de 3 à 70
                            ans
                        </p>

                    </li>
                    <li>
                        <h4>2010 - 2014: Accueil en entreprise</h4>
                        <p> <span class="bold">Accueil physique</span> et téléphonique chez Phone Régie</p>

                    </li>
                </ul>
            </section>
        </div>

        <!--Ligne 2 : Formation et autres activités-->
        <div id="education_hobbies">

            <!--2-a: Formation-->
            <section class="bloc" id="education">
                <h2 class="titles_font">Formation:</h2>
                <table>
                    <thead>
                        <tr>
                            <th class="titles_font">Organisme</th>
                            <th class="titles_font">Année</th>
                            <th class="titles_font">Domaine</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Campus Numérique de Valence</td>
                            <td>2021</td>
                            <td>Formation de développement Web</td>
                        </tr>

                        <tr>
                            <td>O'Clock</td>
                            <td>2021</td>
                            <td>Formation en ligne de développement JavaScript</td>
                        </tr>

                        <tr>
                            <td>LISAA</td>
                            <td>2007</td>
                            <td>Diplôme d'animation 2D</td>
                        </tr>


                    </tbody>

                </table>
            </section>


            <!--2-b : Autres activités-->
            <section class="bloc " id="hobbies">
                <h2 class="titles_font">Autres activités:</h2>
                <ol>
                    <li>
                        Arts plastiques
                    </li>
                    <li>
                        Musique
                    </li>
                    <li>
                        Sports
                    </li>
                </ol>
            </section>


        </div>



    </main>


    <!--éventuellement un pied de page-->
    <footer>
        cv - Diane Binsztok
    </footer>

</body>

</html>