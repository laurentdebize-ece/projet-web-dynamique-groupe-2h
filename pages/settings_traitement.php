<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../stylesheet/login.css">
    <title>Document</title>
</head>

<body>
    <?php

    //AJout de partenaire avec comme mdp, le mdp0000 donc reconnaissable
    if (isset($_POST['nom_partenaire']) && isset($_POST['password_partenaire']) && isset($_POST['email_partenaire'])) {

        $email = htmlspecialchars($_POST['email_partenaire']);
        $pass = htmlspecialchars($_POST['password_partenaire'] . "0000");
        $nom = htmlspecialchars($_POST['nom_partenaire']);

        include("connexion_base.php");

        $reponse = $bdd->prepare("INSERT INTO Users(prenom, nom, mot_de_passe, email, phone, statut, domaine)
            VALUES ('', ?, ?, ?, '', '2',NULL)");
        $reponse->execute([$nom, $pass, $email]);



        $id = $bdd->lastInsertId();

        $reponse->closeCursor();
        ?>
        <script>window.location.assign('compte.php');</script>";
        <?php
    } else {
        echo "<p>Erreur vous n'avez pas de saisie de champ correct</p>";
    }
    ?>
</body>

</html>