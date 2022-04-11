<?php
//PARAMS
if(($_SERVER['SERVER_ADDR'] == '127.0.0.0') || ($_SERVER['SERVER_ADDR'] == '::1')){
    $serveurName = 'localhost';                  //LOCAL HOST
    $userName = 'root';                       //LOCAL USER
    $userPassword = '';                           //LOCAL PASS
    $database = 'coffice';                   //LOCAL DBNAME
    // $siteParams['debugMode'] = true;        //TRUE: AFFICHE LES ERREURS PHP / PDO
    error_reporting(E_ALL);
} else {
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