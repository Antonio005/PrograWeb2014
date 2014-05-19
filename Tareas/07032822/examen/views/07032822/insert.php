<?php
      
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Caracol.php');
    
?>



  
    <?php

      
      $carcol = new Caracol();
      $rs = $carcol->consulta_datos();
      $carcol->show_grid('*', ' ','1');
      //print_r($rs);
      //print_r($rs->GetArray());
      ?>                              
             





   