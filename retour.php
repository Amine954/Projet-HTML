<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_GET["status"];
$_GET["transaction"];








header("location: index.php");
?>

