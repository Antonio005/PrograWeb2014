<?php  



$dist1 = $_POST["var1"];  
$sube1 = $_POST["var2"];  
$baja1 = $_POST["var3"];  
?>
     <!-- Table -->
     <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Datos</div>

                 <table class="table table-bordered">
                    <tr>
                      <td>Distancia</td>
                      <td>Sube de Dia</td>
                      <td>Baja de dia</td>
                    </tr> 
                    <tr>
                      <td>
                        <?php 
                        echo $dist1;
                        ?>
                      </td>
                      <td>
                        <?php 
                        echo $sube1;
                        ?>
                      </td>
                      <td>
                        <?php 
                        echo $baja1;
                        ?>
                      </td>
                    </tr> 
                  </table>                
              </div>
              
         </div>