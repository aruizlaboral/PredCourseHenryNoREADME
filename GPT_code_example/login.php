<?php 
//incluimos la conexion a la base de datos
include("conexion.php");
 
//recibimos los datos del formulario de login
$usuario = $_POST['usuario'];
$password = $_POST['password'];
 
//consultamos a la base de datos para verificar si existe el usuario y su contraseña es correcta
$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
$resultado = mysqli_query($conexion, $sql); 

 //si existe el usuario y su contraseña es correcta, entonces iniciamos sesion y redirigimos al index.php 
if(mysqli_num_rows($resultado) > 0){ 

    session_start();  

    $_SESSION['usuario'] = $usuario;  

    header("location:index.php");  

 }else{  

    echo "Usuario o contraseña incorrecta";  

 }  

 ?>