<?php

    include("connexion_base.php");

    if(isset($_POST['delete_mail_part'])){
        $email_part = htmlspecialchars($_POST['delete_mail_part']);

        $reponse = $bdd->prepare("DELETE FROM Users WHERE email = ? AND statut='2'");
        $reponse->execute([$email_part]);

        echo "<script>window.location.assign('http://localhost:8888/projet-web-dynamique-groupe-2h/pages/compte.php');</script>";

    }

    if(isset($_POST['delete_domaine'])){

        $dom_delete = htmlspecialchars($_POST['delete_domaine']);

        $reponse = $bdd->prepare("DELETE FROM Domaine WHERE nomDomaine = ?");
        $reponse->execute([$dom_delete]);

        echo "<script>window.location.assign('http://localhost:8888/projet-web-dynamique-groupe-2h/pages/compte.php');</script>";

    }

?>
