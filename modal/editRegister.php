<?php 
require_once __DIR__ . '/../services/listService.php';

$service = new ListService();
$listUsers = $service->listUsers();
$listColors = $service->listColors();
?>

<div id="modalEditRegister" class="modal">
    <div class="modal-content">
        <span class="close-button" onclick="closeModal()">&times;</span>
        <h3>Editar Registro</h3>
        <form id="editForm" onsubmit="return updateRegister()">
        <input type="hidden" id="registerEdit" name="registerEdit">

            <label for="usuario">Usuário:</label>
            <select id="userEdit" name="userEdit" required>
                <?php foreach ($listUsers as $user): ?>
                    <option value="<?php echo htmlspecialchars($user['id']); ?>">
                        <?php echo htmlspecialchars($user['nome']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
            
            <label for="cor">Cor:</label>
            <select id="colorEdit" name="colorEdit" required>
                <?php foreach ($listColors as $color): ?>
                    <option value="<?php echo htmlspecialchars($color['id']); ?>">
                        <?php echo htmlspecialchars($color['nome']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
            
            <button type="submit">Salvar</button>
        </form>
    </div>
</div>