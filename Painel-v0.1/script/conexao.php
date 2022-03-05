<?php

$host = "localhost:3306";
$usuario = "root";
$senha = "6033";
$db = "db_gerenciador";

$mysqli = new mysqli($host, $usuario, $senha, $db);

if($mysqli->connect_errno)
	echo "Falha na conexao: (".$mysqli->connect_errno.") ".$mysqli->$connect_error;

