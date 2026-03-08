<?php
session_start();

if(!isset($_SESSION['usuario'])){
header("Location: login.php");
exit();
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Panel</title>
<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="panel">

<h2>Hola, Mundo!!</h2>

<p>Bienvenido <b><?php echo $_SESSION['usuario']; ?></b></p>

<p>Has iniciado sesión correctamente.</p>

<a class="logout" href="logout.php">Cerrar sesión</a>

</div>

</body>

</html>