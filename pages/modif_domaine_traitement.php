<?php
    include("connexion_base.php");

    if(isset($_POST['id_domaine'])){

        $verify=0;

        //sécurité

        $reponse = $bdd->prepare("SELECT * FROM Domaine WHERE id= ?");
        $reponse->execute([htmlspecialchars($_POST['id_domaine'])]);

        while($donnees=$reponse->fetch()){
            if($donnees['id'] === htmlspecialchars($_POST['id_domaine'])){
                $verify=1;
            }
        }

        if($verify ===1){
        
        $nom=htmlspecialchars($_POST['nom_domaine']);
       
        
        $reponse = $bdd->prepare("UPDATE Domaine SET nomDomaine = ? WHERE id = ?");
        $reponse->execute([$nom, htmlspecialchars($_POST['id_domaine'])]);

        echo "<script>window.location.assign('compte.php');</script>";
        
    }
    else{
        echo "<script>window.location.assign('compte.php');</script>";
    }
    }

?>