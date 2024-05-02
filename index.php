<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h1>Página Inicial</h1>
    <form method="get">
        <label for="name">Nome:</label> <br>
        <input type="text" name="name" id="name"> <br>
        <label for="idade">Idade:</label> <br>
        <input type="number" name="idade" id="idade" min="1" max="105">
        <input type="submit" name="btn" id="btn_input" value="enviar"> <br>
    </form>

    <?php
    if (isset($_GET['btn'])) {
        $nome = $_GET['name'];
        $idade = $_GET['idade'];
        echo "Olá! Seja bem-vindo(a), $nome!<br>"; 
        echo "Sua idade é $idade";
    }
?>
</body>
</html >
