<?php
//PARAMS
{
    $dbhost = 'localhost';                      //PRODUCTION HOST
    $dbuser = 'misa0198_cafe';                               //PRODUCTION USER
    $dbpass = 'DTU~T%G8M3k@';                               //PRODUCTION PASS
    $dbname = 'misa0198_wifi';                             //PRODUCTION DBNAME
    //$siteParams['debugMode'] = false;               //FALSE: AUCUN RETROUR D'ERREUR
    error_reporting(0);
}
$dbchar = 'utf8';
//PDO CONNECT
try
{
    $conn = new PDO("mysql:host=$serverName;dbname=$database", $userName, $userPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch (PDOException $e)
{
    die($e->getMessage());
}