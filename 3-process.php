<?php
// (A) PROCESS RESULT
$result = "";

// (B) CONNECT TO DATABASE - CHANGE SETTINGS TO YOUR OWN!
$dbhost = "localhost";
$dbname = "customer";
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
    $stmt = $pdo->prepare("INSERT INTO `orders` (`name`, `email`,`address`) VALUES (?,?,?)");
    $stmt->execute([$_POST["name"], $_POST["email"],$_POST["address"]]);
  } catch (Exception $ex) { $result = $ex->getMessage(); }
}

