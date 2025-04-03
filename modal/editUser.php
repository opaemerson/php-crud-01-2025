<div id="modalEditUser" class="modal">
    <div class="modal-content">
        <span class="close-button" onclick="closeModal()">&times;</span>
        <h3>Editar Usuário</h3>
        <form id="editForm" onsubmit="return updateUser()">
        <input type="hidden" id="registerEdit" name="registerEdit">

            <label for="user">Usuário:</label>
            <input type="text" name="userEdit" id="userEdit">

            <button type="submit">Salvar</button>
        </form>
    </div>
</div>