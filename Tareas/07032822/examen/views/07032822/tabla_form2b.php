<?php      
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Form2.php');
?>
<pre>
<?php
  

   $from2 = new Form2();
  if (isset($_POST["peso"])) {
    
    $from2->set_peso($_POST["peso"]);
    $from2->set_estatura($_POST["estatura"]);
    $from2->set_preg1($_POST["preg1"]);
    $from2->set_preg2($_POST["preg2"]);
    $from2->set_preg3($_POST["preg3"]);
    $from2->set_preg4($_POST["preg4"]);
    $from2->set_preg5($_POST["preg5"]);
    

    $from2->inserta($from2->get_atributos());
  }
  $rs = $from2->consulta_datos();
  #$formu1->show_grid('*', ' ','10');
  //print_r($rs->GetArray());
?>  


<table class="table table-responsive table-striped"> 
<?php
  $array_rs = $rs->GetArray();?>
  <tr>
    
    <td>Peso</td>
    <td>Estatura</td>    
    <td>Pregunta1</td>   
    <td>Pregunta2</td>
    <td>Pregunta3</td>
    <td>pregunta4</td>
    <td>pregunta5</td>
    <td>Id</td>
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
    <td><?php echo $value['7']; ?></td>
    
  </tr>

<?php
  }
?>
</table>


