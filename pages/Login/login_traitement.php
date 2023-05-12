<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include("connexion_base.php");

    $reponse = $bdd->query("SELECT id, password FROM Users");

    while ($donnees = $reponse->fetch()) { 
        if($_POST['identifiant']===$donnees['id'] && $_POST['mdp']===$donnees['password']){
            echo "vous etes connectés";
        }
        $reponse->closeCursor();
    }
    ?>
</body>
</html>
