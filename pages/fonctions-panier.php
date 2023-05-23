<?php

// Création du panier
function creationPanier()
{
    if (!isset($_SESSION["panier"])) {
        $_SESSION["panier"] = array();
        $_SESSION["panier"]["idCarte"] = array();
        $_SESSION["panier"]["nomCarte"] = array();
        $_SESSION["panier"]["qteCarte"] = array();
        $_SESSION["panier"]["prixCarte"] = array();
        $_SESSION["panier"]["imgCarte"] = array();
    }
    return true;
}

// Fonction pour ajouter une carte au panier
function ajouterCarte($idCarte, $qteCarte, $prixCarte, $nomCarte, $imgCarte)
{
    if (creationPanier()) {
        $positionCarte = array_search($idCarte, $_SESSION["panier"]["idCarte"]);
        if ($positionCarte !== false) {
            $_SESSION["panier"]["qteCarte"][$positionCarte] += $qteCarte;
        } else {
            array_push($_SESSION["panier"]["idCarte"], $idCarte);
            array_push($_SESSION["panier"]["nomCarte"], $nomCarte);
            array_push($_SESSION["panier"]["qteCarte"], $qteCarte);
            array_push($_SESSION["panier"]["prixCarte"], $prixCarte);
            array_push($_SESSION["panier"]["imgCarte"], $imgCarte);
        }
    } else {
        echo "Erreur";
    }
}

// Fonction pour supprimer un produit
function supprimerCarte($idCarte)
{
    if (creationPanier()) {
        $tmp = array();
        $tmp["idCarte"] = array();
        $tmp["qteCarte"] = array();
        $tmp["nomCarte"] = array();
        $tmp["prixCarte"] = array();
        $tmp["verrou"] = $_SESSION["panier"]["verrou"];

        for ($i = 0; $i < count($_SESSION["panier"]["idCarte"]); $i++) {
            if ($_SESSION["panier"]["idCarte"][$i] !== $idCarte) {
                array_push($tmp["idCarte"], $_SESSION["panier"]["idCarte"][$i]);
                array_push($tmp["qteCarte"], $_SESSION["panier"]["qteProduit"][$i]);
                array_push($tmp["prixCarte"], $_SESSION["panier"]["prixCarte"][$i]);
                array_push($tmp["nomCarte"], $_SESSION["panier"]["nomCarte"][$i]);
                array_push($tmp["nomCarte"], $_SESSION["panier"]["imgCarte"][$i]);
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
    if (creationPanier()) {
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