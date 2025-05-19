<?php
require_once __DIR__ . '/../services/listService.php';

$service = new ListService();
$list = $service->listUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <script src="../js/user.js"></script>
    <link rel="stylesheet" href="../css/universal.css">
</head>
<body>
    <h2>Lista de Usuários</h2>
    <button onclick="window.location.href='../index.php'">Voltar ao inicio</button>
    <button onclick="window.location.href='../guides/insertUser.php'">Criar usuário</button>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($list)){ ?>
                <?php foreach ($list as $user): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['id']); ?></td>
                        <td><?php echo htmlspecialchars($user['nome']); ?></td>
                        <td>
                            <button onclick="openModal(
                                <?php echo htmlspecialchars($user['id']); ?>, 
                                '<?php echo htmlspecialchars($user['nome']); ?>')">
                                Editar
                            </button></td>
                        <td>
                            <button onclick="deleteUser(<?php echo htmlspecialchars($user['id']); ?>)">Excluir</button>
                        </td>
                    </tr>
                <?php endforeach; 
            }?>
        </tbody>
    </table>
</body>
<?php include('../modal/editUser.php') ?>
</html>
