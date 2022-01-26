<!--les infos d'en-tête-->
<?php

$metaTitle="Diane Binsztok - Contact";
$metaDescription = "Contactez-moi";
$date=date("Y-m-d H:i:s");

// Messages:

// 1 - Messages d'en-tête:
$head_msg="";

// 2 - Message sous chaque champs:
$field_msg="";

// Variable qui vérifie l'envoi du formulaire:
$submit=filter_input(INPUT_POST, 'form_submit', FILTER_DEFAULT);

// Champs à remplir
$civilite=filter_input(INPUT_POST, 'civilite', FILTER_DEFAULT);
$nom=filter_input(INPUT_POST, 'nom', FILTER_DEFAULT);
$prenom=filter_input(INPUT_POST, 'prenom', FILTER_DEFAULT);
$email=filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
$objet=filter_input(INPUT_POST, 'objet', FILTER_DEFAULT);
$message=filter_input(INPUT_POST, 'message', FILTER_DEFAULT);



if($submit!==null){
    if(isset($civilite,$nom,$prenom,$email,$objet,$message)){
        if(!empty($civilite)&&!empty($nom)&&!empty($prenom)&&!empty($email)&&!empty($objet)&&!empty($message)){

            file_put_contents(
                "contact_posts/contact_$date.txt",
                $civilite.$nom.$prenom.$email.$objet.$message
            );
            $head_msg="Merci pour votre prise de contact. Vous recevrez une réponse par email dans les plus brefs délais.";
        }else{
            $field_msg="/!\ Ce champs est obligatoire pour l'envoi du formulaire";
        }
    }else{
        $head_msg="/!\ Tous les champs sont nécessaires pour l'envoi du formulaire.";
        $field_msg="/!\ Ce champs est obligatoire pour l'envoi du formulaire";
    }
}

?>

<!--Corps de page-->
<main>

    <h2 class="titles_font">Me contacter</h2>
    <form id="form_container" action="index.php?page=contact" method="post">
        <div class='error_msg'><?= $head_msg ?></div>
        <div class="form_field">
            <label for="civilite">Choisissez votre civilité:</label>
            <select id="civilite" type="select" name="civilite">
                <option value="">Civilité</option>
                <option value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
                <option value="Autre">Autre</option>
            </select>
            <?php if(empty($civilite)){?>
                <div class='error_msg'><?= $field_msg ?></div>
            <?php }?>



        </div>

        <div class="form_field">
            <label for="nom">Votre nom:</label>
            <input value="<?= $nom ?>" id="nom" type="text" name="nom"><br>
            <?php if(empty($nom)){?>
                <div class='error_msg'><?= $field_msg ?></div>
            <?php } ?>
        </div>

        <div class="form_field">
            <label for="prenom">Votre prénom:</label>
            <input value="<?= $prenom ?>" id="prenom" type="text" name="prenom">
            <?php if(empty($prenom)){?>
                <div class='error_msg'><?= $field_msg ?></div>
            <?php } ?>
        </div>

        <div class="form_field">
            <label for="email">Votre email:</label>
            <input value="<?= $email ?>" id="email" type="email" placeholder="ex: jean@gmail.com" name="email">
            <?php if(empty($email)){?>
                <div class='error_msg'><?= $field_msg ?></div>
            <?php } ?>
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
            <?php if(empty($objet)){?>
                <div class='error_msg'><?= $field_msg ?></div>
            <?php } ?>
        </div>



        <div id="message" class="form_field">
            <label for="message">Votre message:</label>
            <textarea   form="form_container" name="message"><?= $message ?></textarea>
            <?php if(empty($message)){?>
                <div class='error_msg'><?= $field_msg ?></div>
            <?php } ?>
        </div>

        <div class="btn_container">
            <input name="form_submit" value="Envoyer" type="submit">
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


?>