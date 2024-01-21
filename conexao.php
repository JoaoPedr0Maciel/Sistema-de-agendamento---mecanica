<?php

$usuario = 'root';
$dataBase = 'joaopedromaciel';
$senha = '';
$host = 'localhost';

$conn = mysqli_connect($host , $usuario, $senha, $dataBase);

if ($conn->error) {
    die('falha ao conectar' . $conn->error);
};

?>