<?php
    include("connexion_base.php");

    if(isset($_POST['mail_part'])){

        $verify=0;
        //sécurité
        $reponse = $bdd->prepare("SELECT * FROM Users WHERE email= ?");
        $reponse->execute([htmlspecialchars($_POST['mail_part'])]);

        while($donnees=$reponse->fetch()){
            if($donnees['email'] === htmlspecialchars($_POST['mail_part']) && $donnees['statut']==='2'){
                $verify=1;
            }
        }

        if($verify ===1){
        
        $nom=htmlspecialchars($_POST['nom_part']);
        $mdp=htmlspecialchars($_POST['mdp_part']);
        $tel=htmlspecialchars($_POST['tel_part']);
        $dom=htmlspecialchars($_POST['dom_part']);
        
        $reponse = $bdd->prepare("UPDATE Users SET mot_de_passe = ?, domaine = ?, nom=?, phone=? WHERE email = ?");
        $reponse->execute([$mdp, $dom, $nom,$tel, htmlspecialchars($_POST['mail_part'])]);

        echo "<script>window.location.assign('http://localhost:8888/projet-web-dynamique-groupe-2h/pages/compte.php');</script>";
        
    }
    else{
        echo "<script>window.location.assign('http://localhost:8888/projet-web-dynamique-groupe-2h/pages/compte.php');</script>";
    }
    }

?>