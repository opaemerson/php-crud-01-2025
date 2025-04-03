function insertUser() {
    var user = document.getElementById("user").value;

    var formData = new FormData();
    formData.append("action", "insert");
    formData.append("user", user);

    fetch("../ajax/userAjax.php", {
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

function deleteUser(id) {
    const confirmation = confirm("Tem certeza de que deseja excluir este usuário?");
    if (confirmation) {
        var formData = new FormData();
        formData.append("action", "delete");
        formData.append("id", id);

        fetch("../ajax/userAjax.php", {
            method: "POST",
            body: formData
        })
        .then(response => {
            if (response.ok) {
                alert("Usuário excluído com sucesso!");
                location.reload(); 
            } else {
                alert("Falha ao excluir o usuário.");
            }
        })
        .catch(error => {
            console.error("Erro:", error);
            alert("Ocorreu um erro ao tentar excluir o usuário.");
        });
    }
}

function updateUser() {
    var user = document.getElementById("userEdit").value;
    var registerId = document.getElementById("registerEdit").value;

    var formData = new FormData();
    formData.append("action", "update");
    formData.append("user", user);
    formData.append("registerId", registerId);

    fetch("../ajax/userAjax.php", {
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

function openModal(id, user) {
    const modal = document.getElementById("modalEditUser");
    modal.style.display = "block";

    document.getElementById("userEdit").value = user;
    document.getElementById("registerEdit").value = id;
}

function closeModal() {
    const modal = document.getElementById("modalEditUser");
    modal.style.display = "none";
}