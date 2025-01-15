document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Credenciales de prueba
    const usuarioValido = 'admin';
    const passwordValido = '1234';

    // Obtener valores del formulario
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Validar credenciales
    if (username === usuarioValido && password === passwordValido) {
        window.location.href = 'contenido_curso.html'; // Redirige al aula virtual
    } else {
        document.getElementById('loginMessage').innerText = 'Usuario o contraseña incorrectos.';
    }
});
