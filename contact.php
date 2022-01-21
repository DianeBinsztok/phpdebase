<!DOCTYPE html>
<html lang="fr">

<!--les infos de tête-->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon CV</title>
    <link rel="stylesheet" media="screen and (max-width : 800px)" href="../css/phonestyle.css">
    <link rel="stylesheet" media="screen and (min-width : 800px)" href="../css/style2.css">

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


        <!--Container Titre et image pour un overlay en mobile-->
        <div id="img-text-container">
            <!--Titre et sous-titre-->
            <div class="titles_font" id="me">
                <h1>Diane Binsztok:</h1>
                <p> Développeuse Web</p>
            </div>

            <!--Photo de profil-->
            <img id="img" src="../img/profil.JPG" alt="photo de profil">
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

    <h2 class="titles_font">Me contacter</h2>

    <form id="form_container" action="https://httpbin.org/get" method="get">

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
            <button type="submit" class="btn">Envoyer en get</button>
            <input value="Envoyer en get" type="submit">
        </div>
    </form>

    <form id="form_container" action="https://httpbin.org/post" method="post">

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

        <div class="form_field">
            <label for="nom">Votre nom:</label>
            <input type="text">
        </div>

        <div class="form_field">
            <label for="prenom">Votre prénom:</label>
            <input type="text">
        </div>

        <div class="form_field">
            <label for="email">Votre email:</label>
            <input type="email" required="required" placeholder="ex: jean@gmail.com">
        </div>

        <div class="form_field">
            <label for="message">Votre message:</label>
            <textarea type="text"></textarea>
        </div>
        <div class="btn_container">
            <button type="submit">Envoyer en post</button>
            <input value="Envoyer en post" type="submit">
        </div>
    </form>


</main>


<!--éventuellement un pied de page-->
<footer>
    cv - Diane Binsztok
</footer>

</body>

</html>