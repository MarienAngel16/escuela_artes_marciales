<?php
session_start();
/* if (!isset($_SESSION['usuario'])) {
    header("Location: Index.html");
    exit();
} */
echo "Bienvenido, " . $_SESSION['usuario'];
?>
<a href="logout.php">Cerrar sesión</a>
<!--En el archivo dashboard.php, verifica que el usuario esté autenticado-->