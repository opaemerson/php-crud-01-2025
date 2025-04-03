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
            if (empty($_POST['user'])) {
                throw new Exception("Preencha todos os campos.");
            }

            $return = (new InsertService())->insertUser($_POST['user']);

            if($return === false){
                throw new Exception("Falha ao inserir no banco de dados.");
            }
            
            break;
        case 'delete':
            if (empty($_POST['id'])) {
                throw new Exception("ID de usuário desconhecido.");
            }

            $return = (new DeleteService())->deleteUser($_POST['id']);

            if($return === false){
                throw new Exception("Falha ao deletar no banco de dados.");
            }
            
            break;
        case 'update':
            if (empty($_POST['registerId']) || empty($_POST['user'])) {
                throw new Exception("Parametros inválidos para atualização.");
            }

            $params = [
                'name' => $_POST['user'],
                'register_id' => $_POST['registerId']
            ];

            $return = (new UpdateService())->updateUser($params);

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
