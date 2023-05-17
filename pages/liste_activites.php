<?php
include("connexion_base.php");

$reponse = $bdd->query("SELECT * FROM Users WHERE statut='2'");

$tab_nom_part = array();
$tab_activite_part = array();

while ($donnees = $reponse->fetch()) {
    array_push($tab_nom_part, $donnees['nom']);
}

echo"<p class='liste-affichage-titre'>Liste </p>";

foreach($tab_nom_part as $valeur){
    echo "<p>Nom : " . $valeur . "</p>";
}

$reponse->closeCursor();
?>