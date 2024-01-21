<?php 

include('conexao.php');

$sql = "SELECT * FROM carros ORDER BY id DESC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    td {
        text-align: center;
    }

    th {
        text-align: center;
    }

    table {
        border-radius: 0.5rem;
    }

    a {
        text-decoration: none;
        background-color: #393d56;
        color: white;
        cursor: pointer; 
        width: 7rem;
        padding: 0.5rem;
        text-align: center;
        border-radius: 0.5rem;
    }
    a:hover {
        background-color: #393d56;
        color: white;
    }
</style>
<body style="background: whitesmoke">
    <div class="container" style="margin-top: 30px">
        <table class="table table-striped table-dark">
        <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Proprietário</th>
                    <th scope="col">Carro</th>
                    <th scope="col">Revisão</th>
                </tr>
        </thead>
        <tbody>
        <?php
            while ($data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $data['id'] . "</td>";
                echo "<td>". $data['proprietario']. "</td>";
                echo "<td>". $data['carro']. "</td>";
                echo "<td>". $data['revisao']. "</td>";
                echo "</tr>";
        }
         
            ?>
        </tbody>
        </table>
    </div>
    <a href="index.php">Voltar</a>
</body>
</html>