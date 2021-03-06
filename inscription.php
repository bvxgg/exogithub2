<?php

$dbh = new PDO('mysql:host=db;dbname=bdd', 'root', 'root');

try {
    if (count($_POST) > 0) {
        $sql = 'INSERT INTO employees (nom, prenom, email, `password`) VALUES (:nom, :prenom, :email, :`password`)';

        $stmt = $dbh->prepare($sql);

        $stmt->bindParam(":nom", $_POST['nom']);
        $stmt->bindParam(":prenom", $_POST['prenom']);
        $stmt->bindParam(":email", $_POST['email']);
        $stmt->bindParam(":password", $_POST['password']);
    }
      } catch (Exception $e) {
  echo $e->getMessage();
}
