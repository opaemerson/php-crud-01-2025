<?php
require_once __DIR__ . '/../services/insertService.php';
require_once __DIR__ . '/../services/deleteService.php';
require_once __DIR__ . '/../services/updateService.php';

try {
    if (!isset($_POST['action'])) {
        throw new Exception("Ação não definida.");
    }

    $action = $_POST['action'];

    switch ($action) {
        case 'update':
            if (empty($_POST['registerId']) || empty($_POST['color'])) {
                throw new Exception("Parametros inválidos para atualização.");
            }

            $params = [
                'name' => $_POST['color'],
                'register_id' => $_POST['registerId']
            ];

            $return = (new UpdateService())->updateColor($params);

            if($return === false){
                throw new Exception("Falha ao deletar no banco de dados.");
            }
            
            break;
        default:
            throw new Exception("Ação inválida");
    }

    echo "Transação obeteve sucesso!";
    exit;
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>
