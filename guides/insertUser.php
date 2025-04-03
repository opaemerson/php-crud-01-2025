<?php
require_once __DIR__ . '/../services/listService.php';

$service = new ListService();
$listUsers = $service->listUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário</title>
    <script src="../js/user.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Criar Usuário</h2>
    <button onclick="window.location.href='../guides/listUsers.php'">Voltar</button>
    <br><br>
    <form id="form" onsubmit="return insertUser()">
    <div>
        <label for="user">Usuário</label>
        <input type="text" name="user" id="user">
    </div>
    <button type="submit">Criar</button>
    </form>
</body>
</html>
