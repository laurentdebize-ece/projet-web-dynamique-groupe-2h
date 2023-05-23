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
    if (isset($_POST['identifiant']) && isset($_POST['mdp'])) {

        include("connexion_base.php");

        //Test pour savoir si c'est un partenaire qui veut changer son mot de passe 
        if (substr($_POST['mdp'], -4) === "0000") {

            //Un partenaire va changer son mot de passe
    
            $reponse3 = $bdd->query("SELECT * FROM Users");
            $statut;
            //On verifie que c'est bien un partenaire 
            while ($donnees = $reponse3->fetch()) {
                if ($_POST['identifiant'] === $donnees['email']) {
                    //Alors on a bien un partenaire correspondant
                    $statut = $donnees['statut'];
                    if ($statut != 2) {

            
                        //Redirection du client à l'accueil ou de l'admin à l'accueil
                        echo "<script>window.location.assign('accueil.php');</script>";

                    } else {
                        //Faire passer la chaine en methode GET pour gerer la recherche dans la base de donnée 
                        $chaine = $_POST['identifiant'];
                        $url = "login_partenaire.php?chaine=" . urlencode($chaine);
                        header("Location: " . $url);
                        echo "<script>window.location.assign('$url');</script>";
                    }
                }
            }

        } else {

            $reponse = $bdd->prepare("SELECT email, mot_de_passe FROM Users WHERE email= ? AND mot_de_passe= ?");
            $reponse->execute(array($_POST['identifiant'], $_POST['mdp']));

            while ($donnees = $reponse->fetch()) {
                $verification++;

                if (htmlspecialchars($_POST['identifiant']) === $donnees['email'] && htmlspecialchars($_POST['mdp']) === $donnees['mot_de_passe']) {
                    session_start();
                    $_SESSION['identifiant'] = $_POST['identifiant'];
                    $_SESSION['mdp'] = $_POST['mdp'];

                    //fonction pour retrouver le nom et le prenom
    
                    $reponse2 = $bdd->query("SELECT * FROM Users");

                    while ($donnees = $reponse2->fetch()) {
                        if ($_SESSION['identifiant'] === $donnees['email'] && $_SESSION['mdp'] === $donnees['mot_de_passe']) {
                            $_SESSION['prenom'] = $donnees['prenom'];
                            $_SESSION['nom'] = $donnees['nom'];
                            $_SESSION['tel'] = $donnees['phone'];
                            $_SESSION['statut'] = $donnees['statut'];
                            $_SESSION['id'] = $donnees['id'];
                            break;
                        }
                    }
                    //Acces à la page suivante
                    echo "<script>window.location.assign('accueil.php');</script>";
                }
            }

            if ($verification === 0) {
                echo "<script>$(document).ready(function (){
                $('#identi').css('border', 'red solid 2px');
                $('#mot_de_p').css('border', 'red solid 2px');
            });</script>
            <div><p class='message_erreur'>Identifiant ou mot de passe incorrectes</p></div>";
                //COrriger ça
            }

            $reponse->closeCursor();
        }
    }
    ?>
</body>

</html>