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
    <title>Inserir Registro</title>
    <script src="../js/register.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Inserir Registro</h2>
    <button onclick="window.location.href='../index.php'">Voltar ao inicio</button>
    <br><br>
    <form id="form" onsubmit="return insertRegister()">
    <div>
        <label for="name">Usuários</label>
        <select name="user" id="user">
            <?php foreach ($listUsers as $user): ?>
                <option value="<?= $user['id'] ?>"><?= htmlspecialchars($user['nome']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label for="cor">Cor:</label>
        <select id="color" name="color">
            <option value="1">Verde</option>
            <option value="2">Azul</option>
            <option value="3">Vermelho</option>
            <option value="4">Amarelo</option>
            <option value="5">Laranja</option>
            <option value="6">Roxo</option>
            <option value="7">Rosa</option>
            <option value="8">Marrom</option>
            <option value="9">Preto</option>
            <option value="10">Branco</option>
        </select>
    </div>
    <button type="submit">Criar</button>
    </form>
</body>
</html>
