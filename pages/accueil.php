<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GIFTY - Accueil</title>
    <link rel="stylesheet" href="../stylesheet/main.css">
    <link rel="stylesheet" href="../stylesheet/accueil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include('menu.php') ?>
    <h1>Accueil</h1>
    <h2>Les actus de notre catalogue</h2>
    <div class="actu-container">
        <div class="img-container news">
            <img src="../assets/1.jpg" alt="Carte football">
            <div class="img-description">
                <h3>Offre football</h3>
                <p>Profitez d'une offre de réduction de 50% sur des cours de football auprès de nos partenaires.</p>
            </div>
        </div>
        <div class="img-container">
            <img src="../assets/2.jpg" alt="Carte football">
            <div class="img-description">
                <h3>Offre football</h3>
                <p>Profitez d'une offre de réduction de 50% sur des cours de football auprès de nos partenaires.</p>
            </div>
        </div>
        <div class="img-container">
            <img src="../assets/3.jpg" alt="Carte football">
        </div>
    </div>
    <?php include('footer.php') ?>
    <script src="../javascript/menu.js"></script>
</body>
</html>