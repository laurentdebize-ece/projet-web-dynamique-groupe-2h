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
    <form action="modif_carte_traitement.php" method="post">
        <label for="id_carte"></label>
        <input type="number" name="id_carte" placeholder="Identifiant carte">
        <label for="nom_carte"></label>
        <input type="text" name="nom_carte" placeholder="Modifier le nom">
        <label for="descr_carte"></label>
        <input type="text" name="descr_carte" placeholder="Modifier la description">
        <label for="prix_carte"></label>
        <input type="number" name="prix_carte" placeholder="Modifier le prix">
        <input type="submit">
    </form>
</body>
</html>