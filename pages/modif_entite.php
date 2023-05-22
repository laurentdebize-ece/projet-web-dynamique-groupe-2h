<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/donnees.css">
    <title>Document</title>
</head>
<body>
    <form action="modif_entite_traitement.php" method="post">
        <label for="mail_part"></label>
        <input type="email" name="mail_part" placeholder="Mail du partenaire">
        <label for="mdp_part"></label>
        <input type="text" name="mdp_part" placeholder="Modifier le mot de passe">
        <label for="nom_part"></label>
        <input type="text" name="nom_part" placeholder="Modifier le nom">
        <label for="tel_part"></label>
        <input type="phone" name="tel_part" placeholder="Modifier le téléphone">
        <label for="dom_part"></label>
        <input type="number" name="dom_part" placeholder="Modifier l'activité">
        <input type="submit">
    </form>
</body>
</html>