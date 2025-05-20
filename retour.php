<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_GET["status"];
$_GET["transaction"];
$nom = $_GET["nom"];


if (isset($_SESSION[$nom . "_cart"])){
    unset($_SESSION[$nom . "_cart"]);
    unset($_SESSION[$nom . "_wifi"]);
    unset($_SESSION[$nom . "_animaux"]);
    unset($_SESSION[$nom . "_date"]);
    unset($_SESSION[$nom . "_duree"]);
    unset($_SESSION[$nom . "_cabines"]);
    unset($_SESSION[$nom . "_parcours"]);
    unset($_SESSION[$nom . "_personnes"]);
    unset($_SESSION[$nom . "_message"]);
    unset($_SESSION[$nom . "_prix"]);
} 

header("location: index.php");
?>

