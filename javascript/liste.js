$(document).ready(function (){
    $('#liste-partenaire').click(function(){
        $('.check-container').load('/projet-web-dynamique-groupe-2h/pages/liste_partenaires.php');
    });
    $('#liste-activités').click(function(){
        $('.check-container').load('/projet-web-dynamique-groupe-2h/pages/liste_activites.php');
    });
    $('#liste-utilisateur').click(function(){
        $('.check-container').load('/projet-web-dynamique-groupe-2h/pages/liste_utilisateur.php');
    });
    $('#log-out').click(function(){
        $('.check-container').load('/projet-web-dynamique-groupe-2h/pages/deconnexion.php');
    });
});