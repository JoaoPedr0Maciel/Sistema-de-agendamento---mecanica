<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <header>
            <div>
                <h2>Logo aqui</h2>
            </div>
            <nav>
                <a href="relatorios.php">Relatórios</a>
                <a href="clientes.php">Ver agendamentos</a> 
            </nav>
            
        </header>
        
        <form action="cadastrar.php" method="POST">
            <h1>Agendar revisão</h1>   
            <input type="text" name="proprietario" id="" placeholder="Nome do proprietario" required>
            <input type="text" name="carro" id="" placeholder="Modelo do carro" required>
            <input type="text" name="revisao" id="" placeholder="Tipo da revisão" required>

            <input type="submit" value="Cadastrar revisão">

        </form>
    </main>
    
</body>
</html>