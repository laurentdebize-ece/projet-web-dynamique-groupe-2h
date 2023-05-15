$(document).ready(function (){
    
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

});