<?php
// 1. CONEXIÓN A LA BASE DE DATOS
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro_usuarios"; 

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si hay errores de conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// 2. Obtener datos del formulario
$user = $_POST['nombre'];
$email = $_POST['correo'];
$pass = $_POST['contraseña'];
$confirm_pass = $_POST['confirmar-contraseña'];

// 3. Validaciones Básicas
// Confirmar contraseña
if ($pass !== $confirm_pass) {
    die("Error: Las contraseñas no coinciden. <a href='index.html'> Volver a intentar.</a>"); // Corregido: "coinciden"
}

// Validar correo
$sql_email = "SELECT * FROM usuarios WHERE correo = ?"; // Corregido: usar "correo" en lugar de "email"
$stmt_email = $conn->prepare($sql_email);
$stmt_email->bind_param("s", $email);
$stmt_email->execute();
$result_email = $stmt_email->get_result();

if ($result_email->num_rows > 0) {
    die("Error: El correo electrónico ya está registrado. <a href='index.html'> Intenta con otro correo electrónico.</a>");
}
$stmt_email->close();

// Validar Usuario
$sql_user = "SELECT * FROM usuarios WHERE nombre = ?"; // Corregido: usar "nombre" en lugar de "username"
$stmt_user = $conn->prepare($sql_user);
$stmt_user->bind_param("s", $user);
$stmt_user->execute();
$result_user = $stmt_user->get_result();

if ($result_user->num_rows > 0) {
    die("Error: El nombre de usuario ya está registrado. <a href='index.html'> Intenta con otro nombre de usuario.</a>"); // Agregado punto y coma
}
$stmt_user->close();

// 4. Hashear la contraseña
$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

// 5. Insertar datos en la base de datos
$sql_insert = "INSERT INTO usuarios(nombre, correo, contraseña) VALUES (?, ?, ?)";
$stmt_insert = $conn->prepare($sql_insert);
$stmt_insert->bind_param("sss", $user, $email, $hashed_password);

if ($stmt_insert->execute()) {
    echo "¡Registro exitoso! <a href='login.html'>Iniciar sesión</a>";
} else {
    echo "Error: " . $stmt_insert->error;
}

// 6. Cerrar Conexiones
$stmt_insert->close();
$conn->close();
?>