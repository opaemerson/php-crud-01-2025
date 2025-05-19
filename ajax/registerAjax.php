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
        case 'insert':
            if (empty($_POST['user']) || empty($_POST['color'])) {
                throw new Exception("Preencha todos os campos.");
            }
        
            $params = [
                'user_id' => $_POST['user'],
                'color_id' => $_POST['color']
            ];

            $return = (new InsertService())->insertRegister($params);

            if($return === false){
                throw new Exception("Falha ao inserir no banco de dados.");
            }
            
            break;
        case 'delete':
            if (empty($_POST['registerId'])) {
                throw new Exception("Registro ID não reconhece.");
            }

            $return = (new DeleteService())->deleteRegister($_POST['registerId']);

            if($return === false){
                throw new Exception("Falha ao deletar no banco de dados.");
            }
            
            break;
        case 'update':
            if (empty($_POST['registerId']) || empty($_POST['user']) || empty($_POST['color'])) {
                throw new Exception("Parametros inválidos para atualização.");
            }

            $params = [
                'user_id' => $_POST['user'],
                'color_id' => $_POST['color'],
                'register_id' => $_POST['registerId']
            ];

            $return = (new UpdateService())->updateRegister($params);

            if($return === false){
                throw new Exception("Falha ao atualizar no banco de dados.");
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
