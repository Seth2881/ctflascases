<?php
// gestion d'affichage des images
$isConnected = false;
$error = '';

$host = 'localhost';
$dbname = 'ctflascases';
$username = '';
$password = '';

try {
    $mysqlConnection = new PDO(
        'mysql:host='.$host.';dbname='.$dbname.';charset=utf8',
        $username,
        $password
    );
    $isConnected = True;
} catch (Exception $e) {
    $error = "Erreur connection BDD : ".$e->getMessage();
}
?>