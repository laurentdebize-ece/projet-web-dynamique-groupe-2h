<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/donnees.css">
</head>

<body>
    <div class="settings-main-container">
        <div class="one_grid">
            Paramètre Admin
        </div>
        <div class="settings-second-container">
            <div class="partenaire-container">
                <div>
                    <p class="legende">Ajouter un partenaire</p>
                </div>
                <form method="post" action="settings_traitement.php">
                    <label for="email_partenaire"></label>
                    <input type="email" name="email_partenaire" placeholder="email">
                    <label for="nom_partenaire"></label>
                    <input type="text" name="password_partenaire" placeholder="mot_de_passe">
                    <label for="nom_partenaire"></label>
                    <input type="text" name="nom_partenaire" placeholder="Nom">
                    <input type="submit">
                </form>
            </div>
            <div class="cadeau-container">
                <div>
                    <p class="legende">Ajouter une carte</p>
                </div>
                <form method="post">
                    <label for="nom_carte"></label>
                    <input type="text" name="nom_carte" placeholder="Nom Carte">
                    <label for="prix_carte"></label>
                    <input type="number" name="prix_carte" placeholder="Prix">
                    <label for="description_carte"></label>
                    <input type="text" name="description_carte" placeholder="Description">
                    <label for="id_partenaire"></label>
                    <input type="number" name="id_partenaire" placeholder="ID du partenaire">
                    <input type="submit">
                </form>
                <?php
                include("settings_traitement_bis.php");
                ?>
            </div>
        </div>
        <div class="settings-second-bis-container">
                <p>HElllloo</p>
        </div>
    </div>
</body>

</html>