<?php
// Configuración de la base de datos
$host = "localhost";
$dbname = "BDRealFight";
$username = "root";
$password = "";

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$email = htmlspecialchars($_POST['email']);
$pin = htmlspecialchars($_POST['pin']);

// Insertar el usuario en la base de datos
$sql = "INSERT INTO usuarios (email, pin) VALUES (?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $pin);

if ($stmt->execute()) {
    // Redirigir a la página de confirmación o logueado
    header("Location: ../../logueado.html");
    exit();
} else {
    echo "Error al registrar el usuario: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
