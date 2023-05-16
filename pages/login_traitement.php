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
    $verification = 0;
    if(isset($_POST['identifiant']) && isset($_POST['mdp'])){

        include("connexion_base.php");

        $reponse = $bdd->prepare("SELECT email, mot_de_passe FROM Users WHERE email= ? AND mot_de_passe= ?");
        $reponse->execute(array($_POST['identifiant'], $_POST['mdp']));

        while ($donnees = $reponse->fetch()) {
            $verification++;

            if(htmlspecialchars($_POST['identifiant'])===$donnees['email'] && htmlspecialchars($_POST['mdp'])===$donnees['mot_de_passe']){
                session_start(); 
                $_SESSION['identifiant'] = $_POST['identifiant'];
                $_SESSION['mdp'] = $_POST['mdp'];

                //fonction pour retrouver le nom et le prenom

                $reponse2 = $bdd->query("SELECT * FROM Users");

                while ($donnees = $reponse2->fetch()) {
                    if($_SESSION['identifiant']===$donnees['email'] && $_SESSION['mdp']===$donnees['mot_de_passe'] ){
                        $_SESSION['prenom']=$donnees['prenom'];
                        $_SESSION['nom']=$donnees['nom'];
                        $_SESSION['tel']=$donnees['phone'];
                        $_SESSION['statut']=$donnees['statut'];
                        break;
                    }
                }
                 //Acces à la page suivante
                echo "<script>window.location.assign('http://localhost:8888/projet-web-dynamique-groupe-2h/pages/accueil.php');</script>";
            }
        }

        if($verification === 0){
            echo"<script>$(document).ready(function (){
                $('#identi').css('border', 'red solid 2px');
                $('#mot_de_p').css('border', 'red solid 2px');
            });</script>
            <div><p class='message_erreur'>Identifiant ou mot de passe incorrectes</p></div>";
            //COrriger ça
        }

        $reponse->closeCursor();
    }
    ?>
</body>
</html>
