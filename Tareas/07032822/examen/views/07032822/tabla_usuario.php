<?php   
       error_reporting(E_ALL ^ E_NOTICE );  
      
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');    
     
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');      
      include ('../../models/Usuario.php');
      include ('../../libs/ER.php');       

?>
 
<?php  


   $usuario = new Usuario();  

    $usuario->set_email($_POST["email"]);
    $usuario->set_username($_POST["username"]);
    $usuario->set_password($_POST["password"]);
    $usuario->set_foto($_POST["foto"]);
    $usuario->set_rfc($_POST["rfc"]);
    $usuario->set_cp($_POST["cp"]);

     if(empty($errores)){

      $usuario->inserta($usuario->get_atributos());  
     # $_SESSION['exito']="Usuario Registrado";        
      session_destroy();  
      
      header('location: ../site/inicio.php');
    }

    
 
  #$usuario->show_grid('*', ' ','10');
  #$rs = $usuario->consulta_datos();  
  //print_r($rs->GetArray());
?>  




<!--
<table class="table table-responsive table-striped"> 
<?php
  $array_rs = $rs->GetArray();?>
  <tr>
    
    <td>ID</td>
    <td>email</td>    
    <td>username</td>   
    <td>password</td>
    <td>foto</td>
    <td>rfc</td>
    <td>cp</td>
   
  </tr>
  <?php foreach ($array_rs as $value) {
?>  
  <tr>
    <td><?php echo $value['0']; ?></td>
    <td><?php echo $value['1']; ?></td>
    <td><?php echo $value['2']; ?></td>    
    <td><?php echo $value['3']; ?></td>      
    <td><?php echo $value['4']; ?></td>
    <td><?php echo $value['5']; ?></td>
    <td><?php echo $value['6']; ?></td>
        
  </tr>

<?php
  }
?>
</table>-->


