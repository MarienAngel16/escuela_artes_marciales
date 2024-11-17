<?php
session_start();
session_destroy();
header("Location: index.php");
// exit();
?>

<!--cerrar sesion y destruirla para que no regrese y abra denuevo la sesion-->