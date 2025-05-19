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
    <script src="js/register.js"></script>
    <link rel="stylesheet" href="css/universal.css">
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
                <th>Usuário</th>
                <th>Cor</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($list)){ ?>
                <?php foreach ($list as $register): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($register['usuario']); ?></td>
                        <td><?php echo htmlspecialchars($register['cor']); ?></td>
                        <td>
                            <button onclick="openModal(
                                <?php echo htmlspecialchars($register['id']); ?>, 
                                '<?php echo htmlspecialchars($register['usuario_id']); ?>', 
                                '<?php echo htmlspecialchars($register['cor_id']); ?>')">
                                Editar
                            </button>
                        </td>
                        <td>
                            <button onclick="deleteRegister(<?php echo htmlspecialchars($register['id']); ?>)">Excluir</button>
                        </td>
                    </tr>
                <?php endforeach; 
            }?>
        </tbody>
    </table>
</body>
<?php include('modal/editRegister.php') ?>
</html> 
