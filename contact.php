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
            <select id="civilite" type="select" name="civilite">
                <option value="civilite_titre">Civilité</option>
                <option value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
                <option value="Autre">Autre</option>
            </select>
        </div>

        <div class="form_field">
            <label for="nom">Votre nom:</label>
            <input id="nom" type="text" name="nom">
        </div>

        <div class="form_field">
            <label for="prenom">Votre prénom:</label>
            <input id="prenom" type="text" name="prenom">
        </div>

        <div class="form_field">
            <label for="email">Votre email:</label>
            <input id="email" type="email" placeholder="ex: jean@gmail.com" name="email">
        </div>

        <div class="form_field">
            <div id="radio_form_container">
                <label for="objet">L'objet de votre prise de contact:</label>
                <div id="objet" id="radio_form_options">
                    <div class="option">
                        <label for="job">Proposition d'emploi</label> <input id="job" type="radio" name="objet"
                                                                            value="job">
                    </div>
                    <div class="option">
                        <label for="info">Demande d'information et prestations</label> <input id="info" type="radio" name="objet"
                                                                            value="info">
                    </div>
                    <div class="option">
                        <label for="other">Autre</label> <input id="other" type="radio" name="objet"
                                                                     value="autre">
                    </div>
                </div>
            </div>
        </div>



        <div id="message" class="form_field">
            <label for="message">Votre message:</label>
            <textarea form="form_container" name="message"></textarea>
        </div>

        <div class="btn_container">
            <input value="Envoyer" type="submit">
        </div>
    </form>



</main>

<?php

/* tentative foireuse de récupération des données dans un tableau:
$formulaire=filter_input_array(INPUT_POST, 'data',true);

file_put_contents(
string $filename="./contact_Y-m-d-H-i-s.txt",   // On écrit les infos reçues dans le fichier texte
mixed $data=$formulaire,
int $flags = 0,
?resource $context = null
): int|false;
*/

$date=date("Y-m-d H:i:s");

$civilite=filter_input(INPUT_POST, 'civilite', FILTER_DEFAULT);
$nom=filter_input(INPUT_POST, 'nom', FILTER_DEFAULT);
$prenom=filter_input(INPUT_POST, 'prenom', FILTER_DEFAULT);
$email=filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
$objet=filter_input(INPUT_POST, 'objet', FILTER_DEFAULT);
$message=filter_input(INPUT_POST, 'message', FILTER_DEFAULT);

file_put_contents(
"contact_posts/contact_$date.txt",
$civilite.$nom.$prenom.$email.$objet.$message
);


?>