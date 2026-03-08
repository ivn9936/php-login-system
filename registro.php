<?php
include("conexion.php");

$mensaje = "";

if(isset($_POST['usuario']) && isset($_POST['password'])){

$usuario = $_POST['usuario'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (usuario, password) VALUES ('$usuario', '$password')";
$conexion->query($sql);

$mensaje = "Usuario registrado correctamente";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Registro</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

<h2>Registro</h2>

<?php if($mensaje){ ?>
<div><?php echo $mensaje; ?></div>
<?php } ?>

<form method="POST">

<input name="usuario" placeholder="Usuario" required>
<input name="password" type="password" placeholder="Password" required>

<button>Registrar</button>

</form>

<a href="login.php">Iniciar Sesión</a>

</div>

</body>
</html>