<!--les infos d'en-tête-->
<?php

$metaTitle="Diane Binsztok - Contact";
$metaDescription = "Contactez-moi";

?>
<!--Corps de page-->
<main>

    <h2 class="titles_font">Me contacter</h2>

    <form id="form_container" action="index.php?page=contact" method="post">

        <div class="form_field">
            <label for="civilite">Choisissez votre civilité:</label>
            <select id="civilite" type="select">
                <option value="civilite_titre">Civilité</option>
                <option value="madame">Madame</option>
                <option value="monsieur">Monsieur</option>
                <option value="autre">Autre</option>
            </select>
        </div>

        <div class="form_field">
            <label for="nom">Votre nom:</label>
            <input id="nom" type="text">
        </div>

        <div class="form_field">
            <label for="prenom">Votre prénom:</label>
            <input id="prenom" type="text">
        </div>

        <div class="form_field">
            <label for="email">Votre email:</label>
            <input id="email" type="email" placeholder="ex: jean@gmail.com">
        </div>

        <div class="form_field">
            <div id="radio_form_container">
                <label for="raison">La raison de votre prise de contact:</label>
                <div id="radio_form_options">
                    <div class="option">
                        <label for="job">Proposition d'emploi</label> <input id="job" type="radio" name="raison_contact"
                                                                            value="job_value">
                    </div>
                    <div class="option">
                        <label for="info">Demande d'information et prestations</label> <input id="info" type="radio" name="raison_contact"
                                                                            value="info_value">
                    </div>
                    <div class="option">
                        <label for="other">Autre</label> <input id="other" type="radio" name="raison_contact"
                                                                     value="other_value">
                    </div>
                </div>
            </div>
        </div>



        <div id="message" class="form_field">
            <label for="message">Votre message:</label>
            <textarea form="form_container"></textarea>
        </div>

        <div class="btn_container">
            <input value="Envoyer" type="submit" formmethod="post" formaction="index.php?page=contact">
        </div>
    </form>



</main>