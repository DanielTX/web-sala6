document.getElementById("formulario").addEventListener("submit", function (e) {
    e.preventDefault();

    const datos = {
        name: document.getElementById("name").value,
        contact: document.getElementById("contact").value,
        message: document.getElementById("message").value
    };

    fetch("../Controller/guardar.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(datos)
    })
    .then(res => res.text())
    .then(msg => {
        alert(msg);
        document.getElementById("formulario").reset();
    })
    .catch(err => console.error("Error:", err));
});