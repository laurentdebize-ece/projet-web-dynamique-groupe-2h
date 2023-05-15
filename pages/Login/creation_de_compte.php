<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="creation_compte.css">
    <title>Gifty</title>
</head>
<body>

    <div class="main_container">
        <div class="titre_container">
            <h1 class="titre_creation">Création de votre <span class="titre_creation_bis">compte</span></h1>
        </div>
        <div class="champs_container">

            <div class="informations_container">
                <form class="formulaire_container" method="post" action="creation_compte_traitement.php">
                    <div>
                        <label for="prenom"></label>
                        <input type="text" name="prenom" placeholder="Prenom">
                    </div>
                    <div>
                        <label for="nom"></label>
                        <input type="text" name="nom" placeholder="Nom">
                    </div>
                    <div>
                        <label for="mail"></label>
                        <input type="email" name="mail" placeholder="Email">
                    </div>
                    <div>
                        <label for="mot_de_passe"></label>
                        <input type="password" name="mot_de_passe" placeholder="Mot de passe">
                    </div>
                    <div>
                        <label for="telephone"></label>
                        <input type="number" name="telephone" placeholder="Tel">
                    </div>
                    <div class="envoi">
                        <input type="submit" name="enregistrer"placeholder="Enregistrer">
                    </div>
                </form>
            </div>
    </div>
    
</body>
</html>