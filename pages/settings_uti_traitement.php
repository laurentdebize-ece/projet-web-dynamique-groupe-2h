<?php
session_start();

include("connexion_base.php");

$reponse = $bdd->query("SELECT * FROM Achat WHERE acheteur=".$_SESSION['id']."");

$tab_id_card = array();

while ($donnees = $reponse->fetch()) {
    
    $tab_id_card[] = $donnees['idCarte'];

}

$tab_id_card_2=array();

$reponse2 = $bdd->query("SELECT * FROM Carte");

while ($donnees = $reponse2->fetch()) {
    if (in_array($donnees['partenaire'], $tab_id_card)) {
        array_push($tab_id_card_2, $donnees['nomCarte']);
    }
}

foreach($tab_id_card_2 as $valeurs){
    echo "<p> • " . $valeurs . " </p>";
}

$reponse->closeCursor();
?>