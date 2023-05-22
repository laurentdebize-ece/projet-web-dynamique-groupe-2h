<?php

include("connexion_base.php");

$reponse_dom = $bdd->query("SELECT * FROM Domaine");

echo "<p class='liste-affichage-titre'>Liste des activités </p>";

while ($donnees_2 = $reponse_dom->fetch()) {
    echo "<p>".$donnees_2['nomDomaine']."</p>";
}

$reponse_dom->closeCursor();
?>