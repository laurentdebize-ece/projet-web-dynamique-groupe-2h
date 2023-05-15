<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="donnees.css">
</head>
<body>
    <div class="donnees_grid">
        <div class="one_grid">
            Donnees personnels
        </div>
        <div>
            <p class="user_info">Nom</p>
            <div class="info_container">
                <?php echo $_SESSION['nom']?>
            </div>
        </div>
        <div>
            <p class="user_info">Prenom</p>
            <div class="info_container">
               <?php echo $_SESSION['prenom']?>
            </div>
        </div>
        <div>
        <p class="user_info">Mot de passe</p>
            <div class="info_container">
                XXXXXXX 
            </div>
        </div>
        <div>
            <p class="user_info">Tel.</p>
            <div class="info_container">
               <?php echo "0".$_SESSION['tel'].""?>
            </div>      
        </div>
        <div>
            <p class="user_info">Email/Identifiant</p>
            <div class="info_container">
                <?php echo $_SESSION['identifiant']?>
            </div>
        </div>
       
    </div>    
</body>
</html>
