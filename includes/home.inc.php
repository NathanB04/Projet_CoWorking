<?php
include 'home.php';
if(isset($_SESSION['login']) && $_SESSION['login'] === true) {
    $bienvenue = "<p>";
    $bienvenue .= "Bonjour ";
    if ($_SESSION['prenom'] !== "") {
        $bienvenue .= $_SESSION['prenom'];
    }
    else {
        $bienvenue .= $_SESSION['prenom'];
        $bienvenue .= " ";
        $bienvenue .= $_SESSION['nom'];
    }
    $bienvenue .= "</p>";
    echo $bienvenue;
}
