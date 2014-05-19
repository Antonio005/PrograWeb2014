<?php      
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Form1.php');
?>
<pre>
<?php
  

   $formu1 = new Form1();
  if (isset($_POST["nombres"])) {
    
    $formu1->set_nombres($_POST["nombres"]);
    $formu1->set_apellidos($_POST["apellidos"]);
    #$formu1->set_sexo($_POST["sexo"]);
    $formu1->set_curp($_POST["curp"]);
    #$formu1->set_fechanac($_POST["fechanac"]);
    $formu1->set_ciudad($_POST["ciudad"]);
    $formu1->set_cel($_POST["cel"]);
    $formu1->set_tel($_POST["tel"]);
    $formu1->set_email($_POST["email"]);

    $formu1->inserta($formu1->get_atributos());
  }
  $rs = $formu1->consulta_datos();
  #$formu1->show_grid('*', ' ','10');
  //print_r($rs->GetArray());
?>  


<table class="table table-responsive table-striped"> 
<?php
  $array_rs = $rs->GetArray();?>
  <tr>
    <td>Id</td>
    <td>Nombres</td>
    <td>Apellidos</td>
    
    <td>curp</td>
   
    <td>Ciudad</td>
    <td>Cel</td>
    <td>Tel</td>
    <td>Email</td>
  </tr>
  <?php foreach ($array_rs as $value) {
?>  
  <tr>
    <td><?php echo $value['0']; ?></td>
    <td><?php echo $value['1']; ?></td>
    <td><?php echo $value['2']; ?></td>
    
    <td><?php echo $value['4']; ?></td>
    <td><?php echo $value['5']; ?></td>
      
    <td><?php echo $value['6']; ?></td>
    <td><?php echo $value['7']; ?></td>
    <td><?php echo $value['8']; ?></td>
    <td><?php echo $value['9']; ?></td>
  </tr>

<?php
  }
?>
</table>


