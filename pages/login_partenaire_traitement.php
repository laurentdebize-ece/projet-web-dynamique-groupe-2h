<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="../stylesheet/login.css">

<?php


if (isset($_POST['nouv_mdp']) && isset($_POST['nouv_mdp2']) && isset($_GET['chaine'])) {

    $email_part = $_GET['chaine'];

    $nouv_mdp = htmlspecialchars($_POST['nouv_mdp']);
    $nouv_mdp2 = htmlspecialchars($_POST['nouv_mdp2']);

    if ($nouv_mdp === $nouv_mdp2) {
        include("connexion_base.php");

        $reponse = $bdd->prepare("UPDATE Users SET mot_de_passe = ? WHERE email = ?");
        $reponse->execute([$nouv_mdp, $email_part]);

        $id = $bdd->lastInsertId();

        echo "<script>window.location.assign('http://localhost:8888/projet-web-dynamique-groupe-2h/pages/accueil.php');</script>";

        $reponse->closeCursor();
    }

    }
    else{
        echo "<script>$(document).ready(function (){
            $('#identi').css('border', 'red solid 2px');
            $('#mot_de_p').css('border', 'red solid 2px');
        });</script>
        <div><p class='message_erreur'>Mot de passe incorrecte</p></div>";
    }
?>