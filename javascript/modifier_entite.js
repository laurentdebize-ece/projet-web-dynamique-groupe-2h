$(document).ready(function (){

    //Affichage du formulaire 
    $("#partenaire-modif").click(function(){
        $('.modif-container-2').load('/projet-web-dynamique-groupe-2h/pages/modif_entite.php');
    });

    $("#carte-modif").click(function(){
        $('.modif-container-2').load('/projet-web-dynamique-groupe-2h/pages/modif_carte.php');
    });

    $("#domaine-modif").click(function(){
        $('.modif-container-2').load('/projet-web-dynamique-groupe-2h/pages/modif_domaine.php');
    });

});