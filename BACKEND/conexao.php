<?php

$servername = "localhost"; //ip servidor
$username = "root"; //usuario banco mysql
$password = ""; //senha
$dbname = "protefix"; //nome do banco mysql

// cria a conexao
$conn = new mysqli($servername, $username, $password, $dbname);
// verifica a conexao

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
