<?php

include("connexion_base.php");



$reponse_dom = $bdd->query("SELECT * FROM Domaine");

$tab_dom_nom = array();
$tab_dom_id = array();

while ($donnees_2 = $reponse_dom->fetch()) {
    $tab_dom_id[] = $donnees_2['id'];
    $tab_dom_nom[] = $donnees_2['nomDomaine'];
}

$reponse = $bdd->query("SELECT * FROM Users WHERE statut='2'");

$tab_nom_part = array();
$tab_dom_part = array();
$tab_email_part = array();

while ($donnees = $reponse->fetch()) {
    array_push($tab_email_part, $donnees['email']);
    array_push($tab_nom_part, $donnees['nom']);
    $dom_index = array_search($donnees['domaine'], $tab_dom_id);
    if ($dom_index !== false) {
        array_push($tab_dom_part, $tab_dom_nom[$dom_index]);
    } else {
        array_push($tab_dom_part, "N/A");
    }
}

$tableau_combine = array_combine($tab_nom_part, array_map(null, $tab_dom_part, $tab_email_part));

echo "<p class='liste-affichage-titre'>Liste </p>";

foreach ($tableau_combine as $nom_part => $valeurs) {
    echo "<p>Nom : " . $nom_part . "</p>";
    echo "<p>Domaine : " . $valeurs[0] . "</p>";
    echo "<p>Email : " . $valeurs[1] . "</p><br>";
}



$reponse->closeCursor();


?>
