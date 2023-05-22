<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/login.css">
    <title>Gifty</title>
</head>
<body>
<div class="main_container">
    <div class="bloc_principal">
        <div clas="bloc_container">
            <div class="titre_gifty">Gifty</div>
        </div>
    </div>
    <div class="titre_creer_compte">
        Se <span class="titre_red_effet">connecter</span>
    </div>
    <form class="formulaire_container" method="post">
        <div>
            <label for="identifiant"></label>
            <input type="email" name="identifiant" placeholder="Adresse mail" id="identi">
        </div>
        <div><label for="mdp"></label>
            <input type="password" name="mdp" placeholder="Mot de passe" id="mot_de_p">
        </div>
        <div>
            <input type="submit" placeholder="Connecter" id="envoi">
        </div>
    </form>
    <?php
    include("login_traitement.php");
    ?>
    <div class="titre_bas">
        <a class="lien_compte" href="http://localhost:8888/projet-web-dynamique-groupe-2h/pages/creation_de_compte.php">Pas encore de compte ? Cliquez-ici !</a>
        <br>
        <a class="lien_compte" href="http://localhost:8888/projet-web-dynamique-groupe-2h/pages/accueil.php">Je ne veux pas créer de compte</a>
    </div>
</div>
</body>
</html>