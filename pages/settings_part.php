<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/donnees.css">
    <link rel="stylesheet" href="../stylesheet/utilisateur-compte.css">
</head>

<body>
    <div class="settings-main-container">
        <div class="one_grid">
            Paramètre Partenaire
        </div>
        <div class="settings-second-container">
            <div class="ajout-container">
                <div class="main_partenaire_container">
                    <div class="partenaire-container">
                        <div>
                            <p class="legende">Cartes cadeaux accéptées</p>
                            <?php
                            include("settings_part_traitement.php");
                            ?>
                        </div>
                    </div>
                    <div class="liste-partenaire-container">
                    <?php
                        include("settings_part_traitement_bis.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>