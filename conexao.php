<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost:3302';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}