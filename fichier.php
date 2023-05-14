<!DOCTYPE html>
<html>
    <title>Test</title>
    <meta charset="UTF-8">
</html>


<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=famille;
    charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

