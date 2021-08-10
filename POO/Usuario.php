<?php

class Usuario{
    
    private $id;
    public $email;
    public $password;
     
       public function validar($email,$password)
    { 
        if($email === "a@a.co" && $password === "1234"){
            $_SESSION["email"]=$this->email;
            $_SESSION["id"]=random_int(1,10000);

            header("location:http://localhost/TAREA_DE_LOGIN/POO/iniciarsesion.php");
        } else{
            $error = "Incorrecto";
            header("location:http://localhost/TAREA_DE_LOGIN/POO/Login.php?error=$error");
        }

    }

    function cerrarsesion(){
        session_unset();
        session_destroy();
        header("location:http://localhost/TAREA_DE_LOGIN/POO/Login.php");
    }

}
?>