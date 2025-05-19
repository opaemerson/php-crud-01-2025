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
    <script src="../js/color.js"></script>
    <link rel="stylesheet" href="../css/universal.css">
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
            <?php if (!empty($list)){ ?>
                <?php foreach ($list as $color): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($color['id']); ?></td>
                        <td><?php echo htmlspecialchars($color['nome']); ?></td>
                        <td>
                            <button onclick="openModal(
                                <?php echo htmlspecialchars($color['id']); ?>, 
                                '<?php echo htmlspecialchars($color['nome']); ?>')">
                                Editar
                            </button></td>
                        <td>
                    </tr>
                <?php endforeach; 
            }?>
        </tbody>
    </table>
</body>
<?php include('../modal/editColor.php') ?>
</html>
