<?php
session_start();
session_destroy();
header("Location: Index.php");
exit();
?>

<!--cerrar sesion y destruirla para que no regrese y abra denuevo la sesion-->