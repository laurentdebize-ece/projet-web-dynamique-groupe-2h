<?php
    include("connexion_base.php");

    if(isset($_POST['id_carte'])){

        $verify=0;

        //sécurité

        $reponse = $bdd->prepare("SELECT * FROM Carte WHERE id= ?");
        $reponse->execute([htmlspecialchars($_POST['id_carte'])]);

        while($donnees=$reponse->fetch()){
            if($donnees['id'] === htmlspecialchars($_POST['id_carte'])){
                $verify=1;
            }
        }

        if($verify ===1){
        
        $nom=htmlspecialchars($_POST['nom_carte']);
        $des=htmlspecialchars($_POST['descr_carte']);
        $prix=htmlspecialchars($_POST['prix_carte']);
       
        
        $reponse = $bdd->prepare("UPDATE Carte SET nomCarte = ?, prix = ?, description_carte=? WHERE id = ?");
        $reponse->execute([$nom, $prix, $des, htmlspecialchars($_POST['id_carte'])]);

        echo "<script>window.location.assign('compte.php');</script>";
        
    }
    else{
        echo "<script>window.location.assign('compte.php');</script>";
    }
    }

?>