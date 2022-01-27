<?php
$metaTitle="Diane Binsztok - Mon CV";
$metaDescription = "Bienvenue sur la page d'accueil de mon CV";
$_SESSION['countViewPage']++;
?>


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


