<?php

$id = 3; // Delete o elemento criado "Chico"

$pdo = new PDO("mysql:host=localhost; dbname=db_aula", 'root', 'ifsp@123');

$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);

$stmt = $pdo->prepare('DELETE FROM Pessoas WHERE id_pessoa = :id');

$stmt->execute(array("id"=> $id))


?>