<?php

include("connexion_base.php");

$reponse = $bdd->query("SELECT * FROM Achat WHERE acheteur=".$_SESSION['id']."");

$tab_id_card = array();

while ($donnees = $reponse->fetch()) {
    
    $tab_id_card[] = $donnees['idCarte'];

}

$prix_global=0;

$reponse2 = $bdd->query("SELECT * FROM Carte");

while ($donnees = $reponse2->fetch()) {
    if (in_array($donnees['id'], $tab_id_card)) {
       $prix_global += $donnees['prix'];
    }
}

echo "<p class='prix_global_titre'> " . $prix_global . " $</p>";


$reponse->closeCursor();

?>