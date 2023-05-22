<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylesheet/compte.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../stylesheet/main.css">
    <script src="../javascript/compte.js"></script>
    <title>Gifty</title>
</head>

<body>
    <?php
    
    include('menu.php');

    function statut_choix()
    {
        global $id_b1, $id_b2, $id_b3, $id_b4;

        switch ($_SESSION['statut']) {
            case 3: //Utilisateur
                $id_b1 = "donnees_perso_utilisateur";
                $id_b2 = "panier_utilisateur";
                $id_b3 = "cb_utilisateur";
                $id_b4 = "settings_utilisateur";
                break;
            case 1: //Admin
                $id_b1 = "donnees_perso";
                $id_b2 = "panier";
                $id_b3 = "cb";
                $id_b4 = "settings";
                break;
            case 2: //partenaire
                $id_b1 = "donnees_perso_partenaire";
                $id_b2 = "panier_partenaire";
                $id_b3 = "cb_partenaire";
                $id_b4 = "settings_partenaire";
                break;

        }
    }
    statut_choix();
    
    echo  $id_b1;
    echo  $id_b2;
    echo  $id_b3;
    echo  $id_b4;
    ?>
    <div class="main_container">
        <div class="titre_container">
            <h2> Bonjour <span class="user_text">
                    <?php
                    switch($_SESSION['statut']){
                        case 1 :
                        case 3 :
                        echo $_SESSION['prenom'];
                        break;
                        case 2 :
                        echo $_SESSION['nom'];
                        break;
                    }
                    ?>
                </span></h2>
        </div>
        <div class="main_informations_container">
            <div class="barre_container">
                <label for="donnees_perso"></label>
                <input type="button" id=<?php echo $id_b1 ?> class="boutton1">
                <label for="panier"></label>
                <input type="button" id=<?php echo $id_b2 ?> class="boutton2">
                <label for="cb"></label>
                <input type="button" id=<?php echo $id_b3 ?> class="boutton3">
                <label for="settings"></label>
                <input type="button" id=<?php echo $id_b4 ?> class="boutton4">
            </div>
            <div class="informarions_container">
            </div>
        </div>
    </div>
</body>

</html>