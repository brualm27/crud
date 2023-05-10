<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL); 

$nome = "Chico";
$idade = 53;
$email = "chico@chicoMail.com";

//tudo vai dar certo, confia - tratamento de exceções exemplo PDO ->execute para pode executar, se der um erro, ele devolve um "throw newException", ou seja, exibir um aviso de erro, assim o programa para de executar e vai para o catch e executa o código dentro do catch.
// o finally executa mesmo se ele passou pelo try e catch, independente.
try{

$pdo = new PDO("mysql:host=localhost; dbname=db_aula", 'root', 'ifsp@123');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); // Preparar a conexão com o banco de dados(configuração)

$stmt = $pdo->prepare('INSERT INTO Pessoas(nome_pessoa,idade_pessoa, email_pessoa) VALUES(:nome, :idade, :email)');

$stmt->execute(array(
      "nome" => $nome,
      "idade" => $idade,
      "email" => $email

));
}catch(PDOException $e){
    echo var_dump($e->getMessage()); // 
} finally {
    echo "<br><br>";
    echo "Transição Completa";
}

?>