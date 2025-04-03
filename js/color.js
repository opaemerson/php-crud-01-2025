function updateColor() {
    var color = document.getElementById("colorEdit").value;
    var registerId = document.getElementById("registerEdit").value;

    var formData = new FormData();
    formData.append("action", "update");
    formData.append("color", color);
    formData.append("registerId", registerId);

    fetch("../ajax/colorAjax.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        window.location.reload();
    })
    .catch(error => {
        alert("Erro ao cadastrar");
        console.error("Erro:", error);
    });

    return false;
}

function openModal(id, color) {
    const modal = document.getElementById("modalEditColor");
    modal.style.display = "block";

    document.getElementById("colorEdit").value = color;
    document.getElementById("registerEdit").value = id;
}

function closeModal() {
    const modal = document.getElementById("modalEditColor");
    modal.style.display = "none";
}