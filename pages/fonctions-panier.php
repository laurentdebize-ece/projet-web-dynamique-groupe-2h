<?php

// Création du panier
function creationPanier()
{
    if (!isset($_SESSION["panier"])) {
        $_SESSION["panier"] = array();
        $_SESSION["panier"]["idCarte"] = array();
        $_SESSION["panier"]["qteCarte"] = array();
        $_SESSION["panier"]["prixCarte"] = array();
        $_SESSION["panier"]["verrou"] = array();
    }
    return true;
}

// Fonction pour ajouter une carte au panier
function ajouterCarte($idCarte, $qteCarte, $prixCarte)
{
    if (creationPanier() && !isVerrouille()) {
        $positionCarte = array_search($idCarte, $_SESSION["panier"]["idCarte"]);
        if ($positionCarte !== false) {
            $_SESSION["panier"]["qteCarte"][$positionCarte] += $qteCarte;
        } else {
            array_push($_SESSION["panier"]["idCarte"], $idCarte);
            array_push($_SESSION["panier"]["qteCarte"], $qteCarte);
            array_push($_SESSION["panier"]["prixCarte"], $prixCarte);
        }
    } else {
        echo "Erreur";
    }
}

// Fonction pour supprimer un produit
function supprimerCarte($idCarte)
{
    if (creationPanier() && !isVerrouille()) {
        $tmp = array();
        $tmp["idCarte"] = array();
        $tmp["qteCarte"] = array();
        $tmp["prixCarte"] = array();
        $tmp["verrou"] = $_SESSION["panier"]["verrou"];

        for ($i = 0; $i < count($_SESSION["panier"]["idCarte"]); $i++) {
            if ($_SESSION["panier"]["idCarte"][$i] !== $idCarte) {
                array_push($tmp["idCarte"], $_SESSION["panier"]["idCarte"][$i]);
                array_push($tmp["qteCarte"], $_SESSION["panier"]["qteProduit"][$i]);
                array_push($tmp["prixCarte"], $_SESSION["panier"]["prixCarte"][$i]);
            }
        }
        $_SESSION["panier"] = $tmp;
        unset($tmp);
    } else {
        echo "Erreur";
    }
}

// Fonction pour modifier une carte
function modifQteCarte($idCarte, $qteCarte)
{
    if (creationPanier() && !isVerouille()) {
        if ($qteCarte > 0) {
            $positionCarte = array_search($idCarte, $_SESSION["panier"]["idCarte"]);
            if ($positionCarte !== false) {
                $_SESSION["panier"]["qteCarte"][$positionCarte] = $qteCarte;
            }
        } else {
            supprimerCarte($idCarte);
        }
    } else {
        echo "Erreur";
    }
}

function montantGlobal()
{
    $total = 0;
    for ($i = 0; $i < count($_SESSION["panier"]["idCarte"]); $i++) {
        $total += $_SESSION["panier"]["qteCarte"][$i] * $_SESSION["panier"]["prixCarte"][$i];
    }
    return $total;
}

// Le verrou permet de savoir si le panier est validé avant de passer à l'achat
function isVerrouille()
{
    if (isset($_SESSION["panier"]) && $_SESSION["panier"]["verrou"]) {
        return true;
    } else {
        return false;
    }
}

function compterArticle()
{
    if (isset($_SESSION["panier"])) {
        return count($_SESSION["panier"]["idCarte"]);
    } else {
        return 0;
    }
}

// Fonction pour supprimer le panier
function supprimePanier()
{
    unset($_SESSION["panier"]);
}