<?php

include("connexion_base.php");

$reponse = $bdd->query("SELECT * FROM Users WHERE statut='3'");

$tab_nom_util = array();
$tab_email_util = array();

while ($donnees = $reponse->fetch()) {
    array_push($tab_nom_util, $donnees['nom']);
    array_push($tab_email_util, $donnees['email']);
}

$tab = array_combine($tab_nom_util, array_map(function ($email) {
    return [$email];
}, $tab_email_util));


echo"<p class='liste-affichage-titre'>Liste </p>";

foreach($tab as $nom_util => $valeurs){
    echo "<p>Nom : " . $nom_util . "</p>";
    echo "<p>email : " . $valeurs[0] . "</p>";
}
$reponse->closeCursor();
?>