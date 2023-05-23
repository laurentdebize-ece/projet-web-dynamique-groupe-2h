<?php
session_start();

include("connexion_base.php");


$tab_carte_part_nom = array();
$tab_carte_part_id = array();
$tab_carte_part_prix = array();

$nom_domaine="";

$num_domaine=0;


$response_num = $bdd->query("SELECT * FROM Users");
while($donnees_num=$response_num->fetch()){
    if($_SESSION['id'] ===$donnees_num['id']){
        $num_domaine=$donnees_num['domaine'];
    }
}


$reponse_dom = $bdd->query("SELECT * FROM Domaine");

while ($donnees_dom = $reponse_dom->fetch()) {
    if($num_domaine===$donnees_dom['id']){
        $nom_domaine=$donnees_dom['nomDomaine'];
    }
}


$reponse = $bdd->query("SELECT * FROM Carte WHERE partenaire=" . $_SESSION['id'] . "");

while ($donnees = $reponse->fetch()) {
    $tab_carte_part_nom[] = $donnees['nomCarte'];
    $tab_carte_part_id[] = $donnees['id'];
    $tab_carte_part_prix[] = $donnees['prix'];
}

$tab = array_combine($tab_carte_part_nom, array_map(function ($id, $prix) {
    return [$id, $prix];
}, $tab_carte_part_id, $tab_carte_part_prix));


foreach ($tab as $id_card => $valeurs) {
    echo "<p>Nom Carte : " . $id_card . "</p>";
    echo "<p>Identifiant : " . $valeurs[0] . "</p>";
    echo "<p>Prix : " . $valeurs[1] . "</p>";
}
echo "<p>Domaine d'activité : " .$nom_domaine. "</p>";

$reponse->closeCursor();
?>