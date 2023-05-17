<?php

session_start();

?>

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
        Saisissez un nouveau <span class="titre_red_effet">mot de passe</span>
    </div>
    <form class="formulaire_container" method="post"> 
        <div><label for="nouv_mdp"></label>
            <input type="password" name="nouv_mdp" placeholder="Saisissez votre mot de passe">
        </div>
        <div><label for="nouv_mdp2"></label>
            <input type="password" name="nouv_mdp2" placeholder="Saisissez à nouveau ">
        </div>
        <div>
            <input type="submit" placeholder="Connecter" id="envoi">
        </div>
    </form>
    <?php
    include("login_partenaire_traitement.php");
    ?>
</div>
</body>
</html>