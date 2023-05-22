<?php

include("connexion_base.php");

$reponse = $bdd->query("SELECT * FROM Users WHERE statut='3'");

$tab_nom_util = array();
$tab_email_util = array();
$tab_carte = array();

while ($donnees = $reponse->fetch()) {
    array_push($tab_nom_util, $donnees['nom']);
    array_push($tab_email_util, $donnees['email']);

    $reponse_bis= $bdd->query("SELECT * FROM Achat");

    while($donnees_bis = $reponse_bis->fetch()){

        if($donnees_bis['acheteur']===$donnees['id']){

            $reponse_bis_bis=$bdd->query("SELECT * FROM Carte");

            while($donnees_bis_bis=$reponse_bis_bis->fetch()){

                if($donnees_bis_bis['id']===$donnees_bis['idCarte']){
                    array_push($tab_carte, $donnees_bis_bis['nomCarte'] );
                    break;
                }

            }
            break;
        }

    }

}

$tab = array_combine($tab_nom_util, array_map(function ($email, $carte) {
    return [$email, $carte];
}, $tab_email_util, $tab_carte));


echo"<p class='liste-affichage-titre'>Liste </p>";

foreach($tab as $nom_util => $valeurs){
    echo "<p>Nom : " . $nom_util . "</p>";
    echo "<p>email : " . $valeurs[0] . "</p>";
    echo "<p>Carte : " . $valeurs[1] . "</p>";
}
$reponse->closeCursor();
?>