<?php
session_start();

 $_SESSION['imp']=$_POST;
 #$error=0;
 #$correo=$_POST["email"];
 #$usu=$_POST["username"];
 #$usuario = new Usuario(); 

 $email1='/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4})*$/';
 $alfanum='/^[a-zA-Z0-9]*$/';
 $username="#^ [a-z]  [\da-z_] {6,22} [a-z\d] \$#i";

   #if ($_POST["email"]=="") {
    if (empty($_POST["email"])){
      $errores[]=true;
      $_SESSION['email']="Debe ingresar un E-mail";         
    }

    if (!preg_match($email1, $_POST['email'])) {
      $errores[]=true;
      $_SESSION["email"]="Este E-mail no es válido";      
    } 

           

    if (empty($_POST["username"])) {
       $errores[]=true;
      $_SESSION['username']="Debe ingresar un nombre de usuario";      
    }

    if (!preg_match($alfanum, $_POST['username'])) {
      $errores[]=true;
      $_SESSION["username"]="Este nombre de usuario no es válido";      
    } 

      
    if(!empty($errores)){

      header('location:usuario.php');
   
      
    } 
    
   
      
?>