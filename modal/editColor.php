<div id="modalEditColor" class="modal">
    <div class="modal-content">
        <span class="close-button" onclick="closeModal()">&times;</span>
        <h3>Editar Cor</h3>
        <form id="editForm" onsubmit="return updateColor()">
        <input type="hidden" id="registerEdit" name="registerEdit">

            <label for="user">Cor:</label>
            <input type="text" name="colorEdit" id="colorEdit">

            <button type="submit">Salvar</button>
        </form>
    </div>
</div>