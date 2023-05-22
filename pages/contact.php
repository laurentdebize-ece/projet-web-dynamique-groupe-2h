<!DOCTYPE html>
<html lang="fr">
<head>
    <title>GIFTY - Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../stylesheet/main.css">
    <link rel="stylesheet" href="../stylesheet/contact.css">
</head>
<body>
    <?php include("menu.php") ?>
    <h1 class="page-title">Nous contacter</h1>
    <section class="main">
        <div class="info-site">
            <h2 class="section-title">L'entreprise</h2>
            <p class="adresse">
                1600 Pennsylvania Ave NW, Washington, DC 20500, États-Unis
            </p>
            <h2 class="section-title">Nous suivre</h2>
        </div>
        <div class="contact-form">
            <h2 class="section-title">Formulaire de contact</h2>
            <form action="contact-treatment.php" method="post">
                <input name="name" type="text" placeholder="Nom" class="input-field">
                <input name="email" type="email" placeholder="Adresse mail" class="input-field">
                <textarea name="message" placeholder="Entrez ici votre message..." class="input-field"></textarea>
                <input type="submit" value="Envoyer" class="submit-button">
            </form>
        </div>
    </section>
    <?php include("footer.php") ?>
</body>
</html>
