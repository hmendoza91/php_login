<?php
$usuario=$_POST["Usuario"];
$contraseña=$_POST["contraseña"];
session_start();
$_SESSION["usuario"]=$usuario;



$conexion=mysqli_connect("localhost","root","","Clase de PHP");

$consulta="SELECT*FROM usuarios where usuario=$usuario and contaseña=$contraseña";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR DE AUTENTICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);