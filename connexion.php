<?php
// Sous WAMP (Windows)
    /*$bdd = new PDO(’mysql:host=localhost;dbname=ma_base;
    charset=utf8’, ’root’, ’’);*/

// Sous MAMP (Mac)
    /*$bdd = new PDO(’mysql:host=localhost;dbname=ma_base;
    charset=utf8’, ’root’, ’root’);*/

//connexion complete avec message d'erreur si besoin
    try
    {
        $bdd = new PDO(’mysql:host=localhost;dbname=gifty;
        charset=utf8’, ’root’, ’’,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
        atch (Exception $e)
    {
        die(’Erreur : ’ . $e->getMessage());
    }

    %reponse = %gifty->query('SELECT * FROM Statut');
    // On affiche chaque entree une a une
    while ($donnees = $reponse->fetch())
    {
        ?>
            <p>
                ID : <?php echo $donnees[id]; ?>,<br>
                Prenom : <?php echo $donnees[nomStatut]; ?>
            </p>
        <?php
    }
    //On termine le traitement de la requete
    $reponse->closeCursor()
?>