<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../stylesheet/creation_compte.css">
    <title>Gifty</title>
</head>
<body>
    <?php
    if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['telephone']) && isset($_POST['mail']) && isset($_POST['mot_de_passe'])){

        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $phone = htmlspecialchars($_POST['telephone']);
        $mdp = htmlspecialchars($_POST['mot_de_passe']);
        $email = htmlspecialchars($_POST['mail']);


        include("connexion_base.php");

        $reponse = $bdd->prepare("INSERT INTO Users(nom, prenom, mot_de_passe, email, phone, statut, domaine)
        VALUES (?, ?, ?, ?, ?, '3', null)");
        
        $reponse->execute([$nom, $prenom, $mdp, $email, $phone]);

        $id = $bdd->lastInsertId();
        
        $reponse->closeCursor();

        echo "<script>window.location.assign('http://localhost:8888/projet-web-dynamique-groupe-2h/pages/accueil.php');</script>";

    }else{
        echo"<p>Erreur 404</p>";
    }
    ?>
</body>
</html>
