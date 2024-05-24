<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="stylesA.css">
</head>
<body>
    <div class="container">
        <h2>Registro</h2>
        <form method="POST" action="registerA.php">
            <div class="form-group">
                <label for="fullName">Nombre completo:</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="role">Rol:</label>
                <select id="role" name="role" required>
                    <option value="Profesor">Profesor</option>
                    <option value="Estudiante">Estudiante</option>
                    <option value="Persona normal">Persona normal</option>
                </select>
            </div>
            <div class="form-group">
                <label for="experience">Nivel de experiencia en programación:</label>
                <select id="experience" name="experience" required>
                    <option value="Aprendiz">Aprendiz</option>
                    <option value="Intermedio">Intermedio</option>
                    <option value="Avanzado">Avanzado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="newUsername">Nombre de usuario:</label>
                <input type="text" id="newUsername" name="newUsername" required>
            </div>
            <div class="form-group">
                <label for="newPassword">Contraseña:</label>
                <input type="password" id="newPassword" name="newPassword" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirmar contraseña:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
            </div>
            <button type="submit">Registrarse</button>
        </form>
        
        <p>¿Ya tienes una cuenta? <a href="indexA.html">Inicia sesión aquí</a></p>
    </div>
    <script src="scriptA.js"></script>
</body>
</html>

<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "registro";

$conexion = new mysqli($server, $user, $pass, $db);

if($conexion->connect_errno){
    die("conexion fallida" . $conexion->connect_errno);
} else {
    echo "conectado";
}

if (isset($_POST["fullName"]) && isset($_POST["email"]) && isset($_POST["role"]) && isset($_POST["experience"]) && isset($_POST["newUsername"]) && isset($_POST["newPassword"]) && isset($_POST["confirmPassword"])) {
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    $experience = $_POST["experience"];
    $newUsername = $_POST["newUsername"];
    $newPassword = $_POST["newPassword"];
    $confirmPassword = $_POST["confirmPassword"];


    // Preparar y ejecutar la consulta
    $insertardatos = "INSERT INTO usuario (fullName, email, role, experience, newUsername, newPassword, confirmPassword) VALUES ('$fullName', '$email', '$role', '$experience', '$newUsername', '$newPassword', '$confirmPassword')";

    if ($conexion->query($insertardatos) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $conexion->error;
    }
}

$conexion->close();
?>
