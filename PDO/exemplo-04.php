<?php

$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "portal", "uvinh@123");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID ");

$login = "joao";

$password = "qwerty";

$id = 2;

$stmt->bindParam(":LOGIN", $login);

$stmt->bindParam(":PASSWORD", $password);

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados de {$login} alterados com sucesso";