<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../stylesheet/donnees.css">
    <script src="../javascript/liste.js"></script>
    <script src="../javascript/modifier_entite.js"></script>
</head>

<body>
    <div class="settings-main-container">
        <div class="one_grid">
            Paramètre Admin
        </div>
        <div class="settings-second-container">
            <div class="ajout-container">
                <div class="main_partenaire_container">
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
                    <div class="liste-partenaire-container">
                        <p class="legende">Visualiser les partenaires</p>
                        <input type="button" id="liste-partenaire" value="Partenaires">
                        <p class="legende">Visualiser les activité</p>
                        <input type="button" id="liste-activités" value="activités">
                        <p class="legende">Visualiser les utilisateurs</p>
                        <input type="button" id="liste-utilisateur" value="utilisateurs">
                    </div>
                </div>
                <div class="main_carte_container">
                    <div class="cadeau-container">
                        <div>
                            <p class="legende">Ajouter une carte</p>
                        </div>
                        <form method="post" action="settings_traitement_bis.php">
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
                    </div>
                    <div class="log-out-container">
                        <p class="legend">Supression de données
                        <p>
                        <form method="post" action="settings_traitement_delete.php">
                            <label for="delete_mail_part"></label>
                            <input type="email" name="delete_mail_part" placeholder="Mail du partenaire">
                            <label for="delete_domaine"></label>
                            <input type="text" name="delete_domaine" placeholder="Nom de l'activité">
                            <input type="submit">
                        </form>
                        <input type="button" value="Déconnexion" id="log-out">
                    </div>
                </div>
            </div>
            <div class="check-modif-container">
                <div class="check-container">

                </div>
                <div class="modif-container">
                    <div class="modif-container-1">
                        <input type="button" id="partenaire-modif" value="Modifier un partenaire">
                        <input type="button" id="carte-modif" value="Modifier une carte">
                        <input type="button" id="domaine-modif" value="Modifier une activité">
                    </div>
                    <div class="modif-container-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>