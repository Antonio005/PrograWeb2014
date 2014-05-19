<?php
      
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Caracol.php');
    
?>



  
    <!-- Default panel contents -->
    <div class="panel-heading">Caracolbd</div>
    <?php
      
      $carcol = new Caracol();
    /*  #insert
      if (isset($_POST['profundidad'])) {
        # code...
        $Caracol->set_profundidad($_POST('profundidad'));
        $Caracol->set_sube($_POST('sube'));
        $Caracol->set_sube($_POST('baja'));
        $Caracol->set_dias($_POST('dias'));
        $caracol->inserta(caracol->get_atributos());
      }
*/

      #consultar
      $rs = $carcol->consulta_datos();
      $carcol->show_grid('*', ' ','1');
      //print_r($rs);
      //print_r($rs->GetArray());
    ?>     
         
     