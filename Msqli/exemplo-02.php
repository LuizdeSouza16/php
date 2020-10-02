<?php

$conn = new mysqli("localhost", "portal", "uvinh@123", "dbphp7");

if($conn->connect_error) {
	echo "Error : " .$conn->connect_error;
}

$resultado = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();
while($row = $resultado->fetch_assoc()){
	array_push($data, $row);
}

echo json_encode($data);