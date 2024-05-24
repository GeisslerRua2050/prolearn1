document.addEventListener('DOMContentLoaded', function() {
    // Manejar el formulario de login
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const username = loginForm.username.value;
            const password = loginForm.password.value;

            // validar las credenciales
            console.log('Intentando iniciar sesión con', username, password);
        });
    }

    // Manejar el formulario de registro
    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const fullName = registerForm.fullName.value;
            const email = registerForm.email.value;
            const role = registerForm.role.value;
            const experience = registerForm.experience.value;
            const newUsername = registerForm.newUsername.value;
            const newPassword = registerForm.newPassword.value;
            const confirmPassword = registerForm.confirmPassword.value;

            if (newPassword !== confirmPassword) {
                alert('Las contraseñas no coinciden');
                return;
            }

            // registrar al usuario
            console.log('Registrando usuario con', {
                fullName,
                email,
                role,
                experience,
                newUsername,
                newPassword
            });
        });
    }
});
