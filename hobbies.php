


<!--les infos de tête-->
<?php

$metaTitle= "Diane Binsztok - Mes hobbies";
$metaDescription = "Voici une description succinte de mes hobbies";
require "header.php";
?>
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
<?php
include "footer.php";
?>
