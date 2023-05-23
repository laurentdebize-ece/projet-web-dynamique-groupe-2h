$(document).ready(function (){

    //Partie Admin
    
    $("#donnees_perso").click(function(){
        $('#donnees_perso').css('border', '#960018 2px solid');
        $('#cb').css('border', 'white 2px solid');
        $('#settings').css('border', 'white 2px solid');
        $('#panier').css('border', 'white 2px solid');
        $('.informarions_container').load('/projet-web-dynamique-groupe-2h/pages/donnees.php');
    });

    $("#cb").click(function(){
        $('#cb').css('border', '#960018 2px solid');
        $('#donnees_perso').css('border', 'white 2px solid');
        $('#settings').css('border', 'white 2px solid');
        $('#panier').css('border', 'white 2px solid');
        $('.informarions_container').load('/projet-web-dynamique-groupe-2h/pages/cb.php');
    });

    $("#panier").click(function(){
        $('#panier').css('border', '#960018 2px solid');
        $('#donnees_perso').css('border', 'white 2px solid');
        $('#cb').css('border', 'white 2px solid');
        $('#settings').css('border', 'white 2px solid');
        $('.informarions_container').load('/projet-web-dynamique-groupe-2h/pages/panier_compte.php');
    });

    $("#settings").click(function(){
        $('#settings').css('border', '#960018 2px solid');
        $('#cb').css('border', 'white 2px solid');
        $('#panier').css('border', 'white 2px solid');
        $('#donnees_perso').css('border', 'white 2px solid');
        $('.informarions_container').load('/projet-web-dynamique-groupe-2h/pages/settings.php');
    });

    //Partie utilisateurs

    $("#donnees_perso_utilisateur").click(function(){
        $('#donnees_perso_utilisateur').css('border', '#960018 2px solid');
        $('#cb_utilisateur').css('border', 'white 2px solid');
        $('#settings_utilisateur').css('border', 'white 2px solid');
        $('#panier_utilisateur').css('border', 'white 2px solid');
        $('.informarions_container').load('/projet-web-dynamique-groupe-2h/pages/donnees_uti.php');
    });

    $("#cb_utilisateur").click(function(){
        $('#cb_utilisateur').css('border', '#960018 2px solid');
        $('#donnees_perso_utilisateur').css('border', 'white 2px solid');
        $('#settings_utilisateur').css('border', 'white 2px solid');
        $('#panier_utilisateur').css('border', 'white 2px solid');
        $('.informarions_container').load('/projet-web-dynamique-groupe-2h/pages/cb.php');
    });

    $("#panier_utilisateur").click(function(){
        $('#panier_utilisateur').css('border', '#960018 2px solid');
        $('#donnees_perso_utilisateur').css('border', 'white 2px solid');
        $('#cb_utilisateur').css('border', 'white 2px solid');
        $('#settings_utilisateur').css('border', 'white 2px solid');
        $('.informarions_container').load('/projet-web-dynamique-groupe-2h/pages/panier_compte.php');
    });

    $("#settings_utilisateur").click(function(){
        $('#settings_utilisateur').css('border', '#960018 2px solid');
        $('#cb_utilisateur').css('border', 'white 2px solid');
        $('#panier_utilisateur').css('border', 'white 2px solid');
        $('#donnees_perso_utilisateur').css('border', 'white 2px solid');
        $('.informarions_container').load('/projet-web-dynamique-groupe-2h/pages/settings_uti.php');
    });

    //Partie partenaire
    $('.boutton2').css('display', 'none');

    $("#donnees_perso_partenaire").click(function(){
        $('#donnees_perso_partenaire').css('border', '#960018 2px solid');
        $('#cb_partenaire').css('border', 'white 2px solid');
        $('#settings_partenaire').css('border', 'white 2px solid');
        $('.informarions_container').load('/projet-web-dynamique-groupe-2h/pages/donnees_uti.php');
    });

    $("#cb_partenaire").click(function(){
        $('#cb_partenaire').css('border', '#960018 2px solid');
        $('#donnees_perso_partenaire').css('border', 'white 2px solid');
        $('#settings_partenaire').css('border', 'white 2px solid');
        $('.informarions_container').load('/projet-web-dynamique-groupe-2h/pages/cb.php');
    });

    $("#settings_partenaire").click(function(){
        $('#settings_partenaire').css('border', '#960018 2px solid');
        $('#cb_partenaire').css('border', 'white 2px solid');
        $('#panier_partenaire').css('border', 'white 2px solid');
        $('#donnees_perso_partenaire').css('border', 'white 2px solid');
        $('.informarions_container').load('/projet-web-dynamique-groupe-2h/pages/settings_part.php');
    });

});