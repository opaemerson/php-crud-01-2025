<?php
require_once 'services/listService.php';

$service = new ListService();
$list = $service->listAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <script src="js/index.js"></script>
</head>
<body>
    <h2>Listagem</h2>
    <button onclick="window.location.href='guides/listUsers.php'">Lista de Usuários</button>
    <button onclick="window.location.href='guides/listColors.php'">Lista de Cores</button>
    <button onclick="window.location.href='guides/insertRegister.php'">Inserir Registro</button>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome da Pessoa</th>
                <th>Cor</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['id']); ?></td>
                    <td><?php echo htmlspecialchars($user['nome']); ?></td>
                    <td><?php echo htmlspecialchars($user['cor']); ?></td>
                    <td><button>Editar</button></td>
                    <td><button>Excluir</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
