<?php

error_reporting(0);

// (A) PROCESS RESULT
$result = "";

// (B) CONNECT TO DATABASE - CHANGE SETTINGS TO YOUR OWN!
$dbhost = "localhost";
$dbname = "zuzu";
$dbchar = "utf8";
$dbuser = "root";
$dbpass = "";
try {
  $pdo = new PDO(
    "mysql:host=$dbhost;dbname=$dbname;charset=$dbchar",
    $dbuser, $dbpass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (Exception $ex) { $result = $ex->getMessage(); }

// (C) SAVE ORDER TO DATABASE
if ($result=="") {
  try {
    $stmt = $pdo->prepare("INSERT INTO `klant` (`name`, `email`, `address`, `zipcode`, `city`) VALUES (?,?,?,?,?)");
    $stmt->execute([$_POST["name"], $_POST["email"], $_POST["address"], $_POST["zipcode"], $_POST["city"]]);
  } catch (Exception $ex) { $result = $ex->getMessage(); }
}







// (D) SEND ORDER VIA EMAIL (OPTIONAL)


$options = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,
  PDO::ATTR_EMULATE_PREPARES   => false,
];

