
<?php

    include("connexion_base.php");

    $tab_acheteur=array();

    $reponse=$bdd->query("SELECT * FROM Users");

    while($donnees_user=$reponse->fetch()){

        $reponse_achat=$bdd->query("SELECT acheteur FROM Achat");

        while($donnees_achat=$reponse_achat->fetch()){
            if($donnees_user['id']===$donnees_achat['acheteur']){
                array_push($tab_acheteur, $donnees_user['prenom']);
            }
        }
    }  
    
    echo"<p> Liste des utilisateurs ayant une carte </p>";

    foreach($tab_acheteur as $value){
        echo"<p> Utilisateurs : ".$value."</p>";
    }

?>