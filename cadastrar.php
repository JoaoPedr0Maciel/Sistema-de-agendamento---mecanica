<?php 

include('conexao.php');

$proprietario = $_POST['proprietario'];
$carro = $_POST['carro'];
$revisao = $_POST['revisao'];

if (strlen($proprietario) == 0 || strlen($revisao) == 0 || strlen($carro) == 0) {
    echo 'Preencha todos os campos';
} else {
    $sql = "INSERT INTO carros (proprietario, carro, revisao) VALUES ('$proprietario', '$carro', '$revisao')";
    $sqlQuery = $conn -> query($sql) or die('Não foi possivel cadastrar essa revisão no momento');

    $proprietario = "";
    $carro = "";
    $revisao = "";

    header("Location: sucesso.php");
    exit();
};

?>

