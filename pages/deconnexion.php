<?php
    session_start();


    session_destroy();

    echo "<script>window.location.assign('http://localhost:8888/projet-web-dynamique-groupe-2h/pages/login.php');</script>";

?>