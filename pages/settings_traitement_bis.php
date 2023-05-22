<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <?php

    if (isset($_POST['nom_carte']) && isset($_POST['description_carte']) && isset($_POST['prix_carte']) && isset($_POST['id_partenaire'])) {

        $descr = htmlspecialchars($_POST['description_carte']);
        $prix = htmlspecialchars($_POST['prix_carte']);
        $nom = htmlspecialchars($_POST['nom_carte']);
        $id_p = htmlspecialchars($_POST['id_partenaire']);

        include("connexion_base.php");

        $reponse1 =$bdd->query("SELECT * FROM Users");

        //ID P est il vrai ?

        while ($donnees = $reponse1->fetch()) {
            if($id_p===$donnees['id'] && $donnees['statut']=="2"){
               
            $reponse = $bdd->prepare("INSERT INTO Carte(partenaire, prix, nomCarte, description_carte)
            VALUES (?, ?, ?, ?)");
            $reponse->execute([$id_p, $prix,$nom,$descr]);

            $id = $bdd->lastInsertId();

            $reponse->closeCursor();
            
            echo "<script>window.location.assign('http://localhost:8888/projet-web-dynamique-groupe-2h/pages/compte.php');</script>";

        }
        echo "<script>window.location.assign('http://localhost:8888/projet-web-dynamique-groupe-2h/pages/accueil.php');</script>";

    }
}
    ?>
</body>

</html>