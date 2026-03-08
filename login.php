<?php
session_start();
include("conexion.php");

$error = "";

if(isset($_POST['usuario']) && isset($_POST['password'])){

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
$resultado = $conexion->query($sql);

if($resultado->num_rows > 0){

$usuario_db = $resultado->fetch_assoc();

if(password_verify($password, $usuario_db['password'])){

$_SESSION['usuario'] = $usuario;
header("Location: panel.php");
exit();

}else{
$error = "Contraseña incorrecta";
}

}else{
$error = "Usuario no encontrado";
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

<h2>Iniciar Sesión</h2>

<?php if($error){ ?>
<div class="error"><?php echo $error; ?></div>
<?php } ?>

<form method="POST">

<input name="usuario" placeholder="Usuario" required>
<input name="password" type="password" placeholder="Password" required>

<button>Entrar</button>

</form>

<a href="registro.php">Crear cuenta</a>

</div>

</body>
</html>