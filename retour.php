<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$json = file_get_contents("Json/transactions.json");
$transactions = json_decode($json, true);

$transaction = []; 

$transaction["status"] = $_GET["status"];  // voir si le paiement a été effectué ou non
$transaction["transaction"] = $_GET["transaction"]; // numero de transaction
$nom = $_GET["nom"]; // nom du voyage


$transaction["nom"] =$nom;
$transaction["wifi"] = $_SESSION[$nom . "_wifi"];
$transaction["animaux"] = $_SESSION[$nom . "_animaux"]; 
$transaction["date"] = $_SESSION[$nom . "_date"];
$transaction["duree"] = $_SESSION[$nom . "_duree"];
$transaction["cabines"] = $_SESSION[$nom . "_cabines"];
$transaction["parcours"] = $_SESSION[$nom . "_parcours"];
$transaction["personnes"] = $_SESSION[$nom . "_personnes"];
$transaction["message"] = $_SESSION[$nom . "_message"];
$transaction["prix"] = $_SESSION[$nom . "_prix"];

$transaction["email"]=$_SESSION["email"];


$transactions[] = $transaction; // Ajoute la transaction au tableau des transactions
$json = json_encode($transactions, JSON_PRETTY_PRINT); 
file_put_contents("Json/transactions.json", $json); // Enregistre le tableau mis à jour dans le fichier JSON


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

