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
    <link rel="stylesheet" href="compte.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../main/main.css">
    <script src="compte.js"></script>
    <title>Gifty</title>
</head>
<body>
    <?php include('../main/menu.php') ?>
    <div class="main_container">
        <div class="titre_container">
            <h2> Bonjour <span class="user_text"><?php echo $_SESSION['prenom']?></span></h2>
        </div>
        <div class="main_informations_container">
            <div class="barre_container">
                <div>
                    <label for="donnees_perso"></label>
                    <input type="button" id="donnees_perso" class="boutton1">
                </div>
                <div>
                    <label for="panier"></label>
                    <input type="button" id="panier" class="boutton2" place>
                </div>
                <div>
                    <label for="cb"></label>
                    <input type="button" id="cb" class="boutton3">
                </div>
                <div>
                    <label for="settings"></label>
                    <input type="button" id="settings" class="boutton4">
                </div>
            </div>
            <div class="informarions_container">
            </div>
        </div>
    </div>
</body>
</html>