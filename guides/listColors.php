<?php
require_once __DIR__ . '/../services/listService.php';

$service = new ListService();
$list = $service->listColors();
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
    <h2>Lista de Cores</h2>
    <button onclick="window.location.href='../index.php'">Voltar ao inicio</button>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $color): ?>
                <tr>
                    <td><?php echo htmlspecialchars($color['id']); ?></td>
                    <td><?php echo htmlspecialchars($color['nome']); ?></td>
                    <td><button>Editar</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
