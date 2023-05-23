function mostrarComentarios() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'functions/comentarios.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById('comentarios').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

function limpiarCampoComentario() {
    document.getElementById('texto-comentario').value = "";
}

function publicarComentario() {
    var textoComentario = document.getElementById('texto-comentario').value;

    // Verificar si el usuario está registrado antes de permitir publicar
    if (usuarioRegistrado()) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'functions/comentarios.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log("Agregado corretamente");
                mostrarComentarios();
                limpiarCampoComentario();
            }
        };
        xhr.send('comentario=' + encodeURIComponent(textoComentario));
    } else {
        alert('Debes estar registrado para publicar comentarios.');
    }
}

function usuarioRegistrado() {
    // Aquí puedes implementar tu lógica de registro de usuarios
    // Devuelve true si el usuario está registrado, de lo contrario, false
    return true;
}
// Mostrar los comentarios al cargar la página
mostrarComentarios();