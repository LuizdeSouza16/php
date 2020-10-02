<?php

ini_set('display_errors', 'On');

error_reporting(E_ALL);

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "portal", "uvinh@123");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN , :PASSWORD)");

$login = "jose";

$password = "12345";

$stmt->bindParam(":LOGIN", $login);

$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Usuário {$login} cadastrado com sucesso";