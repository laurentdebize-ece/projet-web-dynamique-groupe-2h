<?php
session_start();

include("connexion_base.php");

$tab_date_card = array();
$tab_id_card = array();
$tab_partenaire = array();
$tab_prix = array();
$tab_domaine = array();
$tab_nom_domaine = array();

$reponse = $bdd->query("SELECT * FROM Achat WHERE acheteur=" . $_SESSION['id']);
while ($donnees_achat = $reponse->fetch()) {
    $tab_id_card[] = $donnees_achat['idCarte'];
    $tab_date_card[] = $donnees_achat['dateAchat'];
}

$reponse_carte = $bdd->query("SELECT * FROM Carte");
while ($donnees_carte = $reponse_carte->fetch()) {
    if (in_array($donnees_carte['id'], $tab_id_card)) {
        $tab_prix[] = $donnees_carte['prix'];
        $tab_partenaire[] = $donnees_carte['partenaire'];
    }
}

$reponse_user = $bdd->query("SELECT * FROM Users WHERE statut='2'");
while ($donnees_user = $reponse_user->fetch()) {
    if (in_array($donnees_user['id'], $tab_partenaire)) {
        $tab_domaine[] = $donnees_user['domaine'];
    }
}

$reponse_dom = $bdd->query("SELECT * FROM Domaine");
while ($donnees_dom = $reponse_dom->fetch()) {
    if (in_array($donnees_dom['id'], $tab_domaine)) {
        array_push($tab_nom_domaine, $donnees_dom['nomDomaine']);
    }
}

$tab = array_combine($tab_id_card, array_map(function ($date, $domaine, $prix) {
    return [$date, $domaine, $prix];
}, $tab_date_card, $tab_nom_domaine, $tab_prix));


echo "<p class='liste-affichage-titre'>Liste des cartes </p>";

foreach ($tab as $id_card => $valeurs) {
    echo "<p>Numero de carte : " . $id_card . "</p>";
    echo "<p>Date Achat: " . $valeurs[0] . "</p>";
    echo "<p>Domaine : " . $valeurs[1] . "</p>";
    echo "<p>Prix : " . $valeurs[2] . "</p>";
}

$reponse->closeCursor();
?>
