<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $entradas = (int)$_POST['entradas'];
    $metodo_pago = $_POST['metodo_pago'];

    // Simulación de pago procesado
    echo "<h1>¡Pago Completado!</h1>";
    echo "<p>Gracias, $nombre. Hemos recibido tu pago por $entradas entradas.</p>";
    echo "<p>Detalles enviados a: $email</p>";
}
?>
