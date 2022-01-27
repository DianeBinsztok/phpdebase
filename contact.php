<!--les infos d'en-tête-->
<?php

$metaTitle="Diane Binsztok - Contact";
$metaDescription = "Contactez-moi";
$_SESSION['countViewPage']++;



// Variable qui vérifie l'envoi du formulaire:
$submit=filter_input(INPUT_POST, 'form_submit', FILTER_DEFAULT);


// Champs à remplir
$civilite=filter_input(INPUT_POST, 'civilite', FILTER_DEFAULT);
$nom=filter_input(INPUT_POST, 'nom', FILTER_DEFAULT);
$prenom=filter_input(INPUT_POST, 'prenom', FILTER_DEFAULT);
$email=filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
$objet=filter_input(INPUT_POST, 'objet', FILTER_DEFAULT);
$message=filter_input(INPUT_POST, 'message', FILTER_DEFAULT);

// Vérification des formats en fonction du type d'input:
function validate_civilite($option): bool{
    if(($option=="Madame")||($option=="Monsieur")||($option=="Autre")){
        return true;
    }else{
        return false;
    }
}
function validate_string($string):bool{
    $invalid_string=(str_contains($string, "<"))||(str_contains($string, ">")||(str_contains($string, "%"))||(str_contains($string, ".")));
    if(!$invalid_string){
        return true;
    }else{
        return false;
    }
}
function validate_email($var): bool {
    $var=filter_input(INPUT_POST, '$var', FILTER_VALIDATE_EMAIL);
    if(($var)!==false){
        return true;
    }else{
        return false;
    }
}
function validate_objet($radiobtn):bool{
    if(($radiobtn=="job")||($radiobtn=="info")||($radiobtn=="autre")){
        return true;
    }else{
        return false;
    }
}
// Liste des formats valides:
$valid_civilite=validate_civilite($civilite);
$valid_nom=validate_string($nom);
$valid_prenom=validate_string($prenom);
$valid_email=validate_email($email);
$valid_objet=validate_objet($objet);
$valid_message=validate_string($message);

// Messages:
// 1 - Messages d'en-tête:
$head_msg="";
// 2 - Message sous chaque champs:
$field_msg="";
// 3 - Messages différenciés (formats de saisie invalides)
$formErrors=[

    'civilite'=> "Ce champs ne peut contenir que les valeurs: 'Madame', 'Monsieur' ou 'Autre'",
    'nom'=> "Veuillez corriger votre saisie: certains caractères spéciaux ne sont pas autorisés",
    'prenom'=>"Veuillez corriger votre saisie: certains caractères spéciaux ne sont pas autorisés",
    'email'=>"Veuillez saisir un format d'email valide. Ex: nom@boitemail.com",
    'objet'=>"Votre choix ne peut contenir que les valeurs: 'job', 'info' ou 'autre'",
    'message'=>"Veuillez corriger votre saisie: certains caractères spéciaux ne sont pas autorisés",
    'missingKey'=>"Tous les champs sont nécessaires pour l'envoi du formulaire.",
    'missingValue'=>"Ce champs est obligatoire pour l'envoi du formulaire",
    'succes'=>"Merci pour votre prise de contact. Vous recevrez une réponse par email dans les plus brefs délais."
];

// On procède enfin aux vérifications:
if($submit!==null){
    if(isset($civilite,$nom,$prenom,$email,$objet,$message)){
        if(!empty($civilite)&&!empty($nom)&&!empty($prenom)&&!empty($email)&&!empty($objet)&&!empty($message)){
            if($valid_civilite && $valid_nom && $valid_prenom && $valid_email && $valid_objet && $valid_message){
                $date=date("Y-m-d H:i:s");
                file_put_contents(
                    "contact_posts/contact_$date.txt",
                     $civilite.$nom.$prenom.$email.$objet.$message
                  );
                $head_msg="Merci pour votre prise de contact. Vous recevrez une réponse par email dans les plus brefs délais.";
            }else{
                $field_msg="Veuillez entrer un format de saisie valide";
            }

        }else{
            $field_msg=$formErrors['missingValue'];
        }
    }else{
        $head_msg=$formErrors['missingKey'];
        $field_msg=$field_msg=$formErrors['missingValue'];
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
            <select value="<?= $civilite ?>" id="civilite" type="select" name="civilite">
                <option value="">Civilité</option>
                <option value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
                <option value="Autre">Autre</option>
            </select>
            <?php if(empty($civilite)){?>
                <div class='error_msg'><?= $field_msg ?></div>
            <?php }elseif(!$valid_civilite){?>
                <div class='error_msg'><?= $formErrors['civilite']?></div>
            <?php }?>



        </div>

        <div class="form_field">
            <label for="nom">Votre nom:</label>
            <input value="<?= $nom ?>" id="nom" type="text" name="nom"><br>
            <?php if(empty($nom)){?>
                <div class='error_msg'><?= $field_msg ?></div>
            <?php }elseif(!$valid_nom){?>
                <div class='error_msg'><?= $formErrors['nom']?></div>
            <?php }?>
        </div>

        <div class="form_field">
            <label for="prenom">Votre prénom:</label>
            <input value="<?= $prenom ?>" id="prenom" type="text" name="prenom">
            <?php if(empty($prenom)){?>
                <div class='error_msg'><?= $field_msg ?></div>
            <?php }elseif(!$valid_prenom){?>
                <div class='error_msg'><?= $formErrors['prenom']?></div>
            <?php }?>
        </div>

        <div class="form_field">
            <label for="email">Votre email:</label>
            <input value="<?= $email ?>" id="email" type="email" placeholder="ex: jean@gmail.com" name="email">
            <?php if(empty($email)){?>
                <div class='error_msg'><?= $field_msg ?></div>
            <?php }elseif(!$valid_email){?>
                <div class='error_msg'><?= $formErrors['email']?></div>
            <?php }?>
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
            <?php }elseif(!$valid_objet){?>
                <div class='error_msg'><?= $formErrors['objet']?></div>
            <?php }?>
        </div>



        <div id="message" class="form_field">
            <label for="message">Votre message:</label>
            <textarea   form="form_container" name="message"><?= $message ?></textarea>
            <?php if(empty($message)){?>
                <div class='error_msg'><?= $field_msg ?></div>
            <?php }elseif(!$valid_message){?>
                <div class='error_msg'><?= $formErrors['message']?></div>
            <?php }?>
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