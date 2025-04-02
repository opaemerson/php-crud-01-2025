function insertRegister() {
    var user = document.getElementById("user").value;
    var color = document.getElementById("color").value;

    var formData = new FormData();
    formData.append("action", "insert");
    formData.append("user", user);
    formData.append("color", color);

    fetch("../ajax/registerAjax.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        document.getElementById("form").reset();
    })
    .catch(error => {
        alert("Erro ao cadastrar");
        console.error("Erro:", error);
    });

    return false;
}

function updateRegister() {
    var user = document.getElementById("userEdit").value;
    var color = document.getElementById("colorEdit").value;
    var registerId = document.getElementById("registerEdit").value;

    var formData = new FormData();
    formData.append("action", "update");
    formData.append("user", user);
    formData.append("color", color);
    formData.append("registerId", registerId);

    fetch("ajax/registerAjax.php", {
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

function deleteRegister(id) {
    const confirmation = confirm("Tem certeza de que deseja excluir este registro?");
    if (confirmation) {
        var formData = new FormData();
        formData.append("action", "delete");
        formData.append("registerId", id);

        fetch("ajax/registerAjax.php", {
            method: "POST",
            body: formData
        })
        .then(response => {
            if (response.ok) {
                alert("Registro excluído com sucesso!");
                location.reload(); 
            } else {
                alert("Falha ao excluir o registro.");
            }
        })
        .catch(error => {
            console.error("Erro:", error);
            alert("Ocorreu um erro ao tentar excluir o registro.");
        });
    }
}

function openModal(id, user, color) {
    const modal = document.getElementById("modalEditRegister");
    modal.style.display = "block";

    document.getElementById("userEdit").value = user;
    document.getElementById("colorEdit").value = color;
    document.getElementById("registerEdit").value = id;
}

function closeModal() {
    const modal = document.getElementById("modalEditRegister");
    modal.style.display = "none";
}