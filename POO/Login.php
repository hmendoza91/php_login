<?php
session_start();

if($_SESSION){
    header("location:");
}
  $error=$_REQUEST["Error"] ?? "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Signin Template for bootstrap</title>
    
    <link rel="canonical" href="css/decoracion.css">
    <style>
        html,
        body{
            height: 100%;
        }

        body{
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: f5f5f5;
        }

        .from-signin{
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }

        .from-signin .checkbox{
            font-weight: 400;
        }

        .from-signin .from-control{
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }

        .from-signin .from-control:focus{
            z-index: 2;
        }

        .from-signin input[type="email"]{
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .from-signin input[type="password"]{
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>

</head>

<body class="text-center">
    <form class="form-signin" action="validar.php" method="POST">
        <img class="mb.4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap.solid.svg" alt="" width="72" height="auto">
        <h1 class="h3 mb-3 front-height-normal">INGRESAR</h1>

        <label for="inputEmail" class="sr-only">Correo electronico</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Ingresar correo" required auto>
        
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Ingresar contraseña" required auto>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button><?php echo $error;?>

        <p class="mt-5 mb-3 text-muted"></p>

    </form> 
</body>

</html>