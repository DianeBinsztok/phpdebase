<!DOCTYPE html>


<!--les infos de tête-->
<?php
include "header.php";
?>
<!--Corps de page-->
<main>

    <h2 class="titles_font">Me contacter</h2>

    <form id="form_container" action="https://httpbin.org/get" method="post">

        <div class="form_field">
            <div id="radio_form_container">
                <label for="nom">Vous êtes:</label>
                <div id="radio_form_options">
                    <div class="option">
                        <label for="private">un particulier:</label> <input type="radio" name="contact"
                                                                            value="private">
                    </div>
                    <div class="option">
                        <label for="company">une entreprise:</label> <input type="radio" name="contact"
                                                                            value="company">
                    </div>
                </div>
            </div>
        </div>

        <div class="form_field">
            <label for="objet">A quel sujet me contactez-vous?</label>
            <select type="select">
                <option value="coucou">choisir un sujet</option>
                <option value="coucou">Me faire un coucou</option>
                <option value="bisou">Me faire un bisou</option>
                <option value="manger">Me faire à manger</option>
            </select>
        </div>

        <div id="nom" class="form_field">
            <label for="nom">Votre nom:</label>
            <input type="text">
        </div>

        <div id="prenom" class="form_field">
            <label for="prenom">Votre prénom:</label>
            <input type="text">
        </div>

        <div id="email" class="form_field">
            <label for="email">Votre email:</label>
            <input type="email" required placeholder="ex: jean@gmail.com">
        </div>

        <div id="message" class="form_field">
            <label for="message">Votre message:</label>
            <textarea type="text"></textarea>
        </div>
        <div class="btn_container">
            <input value="Envoyer(post)" type="submit">
        </div>
    </form>



</main>


<!--éventuellement un pied de page-->
<?php
include "footer.php";
?>
