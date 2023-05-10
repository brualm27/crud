<?php

// PDO é uma classe

$conn = new PDO('mysql:host=localhost;dbname=db_aula', 'root', 'ifsp@123');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Td: no PDO existe Uma funçaõ chamada  setatributte que tem um atributo chamado ATTR_ERRMODE

//$email = $_POST['email];
$email = 'leticia@email.com';
$stmt = $conn->prepare("SELECT * FROM Pessoas WHERE email_pessoa = :email"); 
$stmt->execute(array('email'=> $email));

while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo json_encode($linha);
}