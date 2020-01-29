<?php

function getConnection()
{
$host = 'localhost';
$dbname = 'banque';
$user = 'root';
$password ='';

try{
    $db = new PDO('mysql:host ='.$host.';dbname='.$dbname, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $ex){
    die("Erreur".$ex->getMessage());
}
return $db;
}
?>