<?php 

include('conexao.php');

$userName = $_POST['user'];
$password = $_POST['password'];

$sql = "SELECT * FROM `login` WHERE username = '$userName' AND `password` = '$password'";
$sqlQuery = $conn->query($sql) or die("Não foi possicel continuar");

if ($sqlQuery->num_rows > 0) {
     
    header('Location: index.php');
} else {
    session_start();
    $_SESSION['error'] = "<p>Username ou senha incorreto!<p>";
    header('Location: login.php');
};

?>