<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Registro</title>
    <script src="js/insertRegister.js"></script>
</head>
<body>
    <h2>Inserir Registro</h2>
    <button onclick="window.location.href='../index.php'">Voltar ao inicio</button>
    <br><br>
    <form>
    <div>
        <label for="nome">Nome da Pessoa:</label>
        <input type="text" id="nome" name="nome">
    </div>
    <div>
    <label for="cor">Cor:</label>
    <select id="cor" name="cor">
        <option value="vermelho">Vermelho</option>
        <option value="azul">Azul</option>
        <option value="verde">Verde</option>
        <option value="amarelo">Amarelo</option>
        <option value="laranja">Laranja</option>
        <option value="roxo">Roxo</option>
        <option value="rosa">Rosa</option>
        <option value="marrom">Marrom</option>
        <option value="preto">Preto</option>
        <option value="branco">Branco</option>
    </select>
    </div>
    <button type="submit">Enviar</button>
    </form>
</body>
</html>
