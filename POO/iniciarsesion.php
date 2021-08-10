<?php
session_start();

if (!$_SESSION){
    header("location:http://localhost/TAREA_DE_LOGIN/POO/Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Iniciaste session con exito,bienvenido
        <?php echo $_SESSION["email"];?>
    </h1>
    <form class="form-signin" action="validar.php?cerrar=true" method="POST">


        <button class="btn btn-lg btn-primary btn-block" type="submit">Cerrar sesion</button>
    </form>
    
</body>
</html>