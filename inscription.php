<?php

$dbh = new PDO('mysql:host=db;dbname=bdd', 'root', 'root');

try {
    if (count($_POST) > 0) {
        $sql = 'INSERT INTO employees (nom, prenom, email, password) VALUES (:nom, :prenom, ...)';

        $stmt = $dbh->prepare($sql);

        $stmt->bindParam(":nom", $_POST['nom']);
} catch (Exception $e) {
  echo $e->getMessage();
}