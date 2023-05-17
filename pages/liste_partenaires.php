<?php
include("connexion_base.php");

$reponse = $bdd->query("SELECT * FROM Users WHERE statut='2'");

$tab_nom_part = array();
$tab_dom_part = array();
$tab_email_part = array();

while ($donnees = $reponse->fetch()) {
    if($donnees['domaine']===null){
        array_push($tab_dom_part,"vide");
    }
    else{
        $tab_dom_part=$donnees['domaine'];
    }
    array_push($tab_email_part, $donnees['email']);
    array_push($tab_nom_part, $donnees['nom']);
}

$tableau_combine = array_combine($tab_nom_part, array_map(null, $tab_dom_part, $tab_email_part));

echo"<p class='liste-affichage-titre'>Liste </p>";

foreach($tableau_combine as $nom_part => $valeurs){
    echo "<p>Nom : " . $nom_part . "</p>";
    echo "<p>Domaine : " . $valeurs[0] . "</p>";
    echo "<p>Email : " . $valeurs[1] . "</p><br>";
}

$reponse->closeCursor();
?>