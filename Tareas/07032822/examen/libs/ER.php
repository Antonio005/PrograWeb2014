<?php
session_start();

 $_SESSION['imp']=$_POST;

 $correo=$_POST["email"];
 $usu=$_POST["username"];

 $validar=new Usuario();

 $sql="select * from usuario_tb where email = '$correo'";
 $sql2="select * from usuario_tb where username = '$usu'";
 
 $rs=$validar->consulta_sql($sql);  $rows = $rs->GetArray(); 
 $rs2=$validar->consulta_sql($sql2);  $rows2 = $rs2->GetArray(); 
        
##############expresiones regulares
      
 $email1='/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4})*$/'; #validacion de email comun koury_x@hotmail.com

 #$alfanum='/^[a-zA-Z0-9]*$/'; #alfanumericos ---k>7
 #$username1="#^ [a-z]  [\da-z_] {6,22} [a-z\d] \$#i";#alfanum , 6-22 caract -->Koury7
 #$username2="/^[a-zA-Z0-9_]{4,16}$/"; #alfanum, 4-16 caract -->koury_7
 $username3="/^[a-z\d_]{4,15}$/i  ";#alfanum y guion bajo, 4-15 caract

 $password='/^(?=^.{6,}$)((?=.*[A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z]))^.*$/';

 $rfc1="/^[A-Z&]{4}[0-9]{6}[A-Z0-9]{3}$/"; //prueba de VIMA 870510 BFA
 #$rfc2="[A-Z,Ñ,&]{3,4}[0-9]{2}[0-1][0-9][0-3][0-9][A-Z,0-9]?[A-Z,0-9]?[0-9,A-Z]?"; #sat
 #$rfc3="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))([A-Z\d]{3})?$";#sat homoclave opcional
 #$rfc4="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[A-Z|\d]{3})$";#sat homoclave requerida
 #$rfc5="^[a-zA-Z]{3,4}(\d{6})((\D|\d){3})?$";

 $cp='/^[0-9]{5}$/'; //c.p

############alidaciones email

  
   #if ($_POST["email"]=="") {
    if (empty($_POST["email"])){
      $errores[]=true;
      $_SESSION['email']="Debe ingresar un E-mail";         
    }

     if (!preg_match($email1, $_POST['email'])) {
      $errores[]=true;
      $_SESSION["email"]="Datos de E-mail incorrectos";      
    } 

    if (count($rows)>0) {
      
         $errores[]=true;
        $_SESSION["email"]="Este e-mail (".$correo.") ya esta registrado";    
    }
   

   ####validaciones username       

    /*if (empty($_POST["username"])) {
       $errores[]=true;
      $_SESSION['username']="Debe ingresar un nombre de usuario";      
    }*/

    if (!preg_match($username3, $_POST['username'])) {
      $errores[]=true;
      $_SESSION["username"]="Datos de usuario no válidos";      
    }

    if (count($rows2)>0) {
      
        $errores[]=true;
        $_SESSION["username"]="Este usuario (".$usu.") ya esta registrado";    
    }
    ################validaciones codigo postal
    if (!preg_match($cp, $_POST['cp'])) {
      $errores[]=true;
      $_SESSION["cp"]="Datos de C.P. no válidos";      
    }
    
    ###############validaciones password

    if (!preg_match($password, $_POST['password'])) {
      $errores[]=true;
      $_SESSION["password"]="La contraseña debe contener una letra minúscula, una letra mayúscula, un número, y tener por lo menos 6 caracteres de longitud.";      
    }

    ###############validaciones rfc

    if (!preg_match($rfc1, $_POST['rfc'])) {
      $errores[]=true;
      $_SESSION["rfc"]="Datos de R.F.C. no válidos";      
    }
    
  ##############validaciones  
   ############   
    if(!empty($errores)){

     header('location:usuario.php#regis');
   
      
    } 
    
   
      
?>