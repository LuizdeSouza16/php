<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "portal", "uvinh@123");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($resultados as $row) {

	foreach ($row as $key => $value) {
		echo "<strong> {$key} </strong> {$value} <br>";

	}
echo "<hr>";
}