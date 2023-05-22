<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GIFTY - Accueil</title>
    <link rel="stylesheet" href="../stylesheet/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../stylesheet/omnesBox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../javascript/acces.js"></script>

</head>
<body>
    <?php include('menu.php') ?>
    <div class="omnesbox">
        <div class="rechercheBox">
            
            <form action="" method="" name="rechercheBox" class="inform">
                <div class="titre">
                    <label for="recherche">Rechercher une omnes box</label>
                </div>
                <div class="titreBar"></div>
                <div class="rechercheZone">
                    <label for="recherche">Entre ton code :</label>
                    <input type="text" name="recherche"></input>
                </div>
                <div class="boutonSubmit">
                    <input type="submit" value="Rechercher">
                </div>
            </form>
            
        </div>
    </div>
    <?php include('footer.php') ?>
    <script src="../javascript/menu.js"></script>
</body>
</html>