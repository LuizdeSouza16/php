<?php

$conn = new PDO ("mysql:host=localhost;dbname=dbphp7", "portal", "uvinh@123");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ? ");

$id = 1;

$stmt->execute(array($id));

//$conn->rollback(); //cancelar a transação

$conn->commit();

echo "Usuario excluido com sucesso";