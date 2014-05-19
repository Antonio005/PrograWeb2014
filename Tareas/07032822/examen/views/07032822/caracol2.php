<?php
	include ('../layouts/header.php');
?>

<div class="container-fluid" id="contenido">
	<div class="row">	  
	  <div class=" col-sm-12 col-md-12 col-xl-12">	  
	    <div id="alert" class="close"></div>
	              
	  
	  </div>           
	</div>

          <div class="row">
            <div class="  col-md-4 col-xl-4">
              
                <form action="" method="post">
                  <fieldset>

                  <!-- Form Name -->
                  <legend>Formulario</legend>



                  <!-- Text input-->
                  <div class="control-group">
                    <label >Profundidad</label>
                    <div class="controls">
                      <input id="var1" name="var1" type="number" min="1" placeholder="Profundidad" required=" " value=" " >
                      <p class="help-block">Mínimo 1</p>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="control-group">
                    <label>Sube de Dia</label>
                    <div class="controls">
                      <input id="var2" name="var2" type="number" min="1" placeholder="Sube" required=" " value=" " >
                      <p class="help-block">Minimo 1 </p>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="control-group">
                    <label>Baja de NOche</label>
                    <div class="controls">
                      <input id="var3" name="var3" type="number" min="0" placeholder="Baja" required=" "  value=" ">
                      <p class="help-block">Minimo 0 </p>
                    </div>
                  </div>

                   <div class="control-group">
                    <label>Dias</label>
                    <div class="controls">
                      <input id="var3" name="var3" type="number" min="0" placeholder="Baja" required=" "  value=" ">
                      <p class="help-block">Minimo 0</p>
                    </div>
                  </div>

                  <!-- Button -->
                  <div class="control-group">
                    <label class="control-label" for="singlebutton"></label>
                    <div class="controls">
                      <button id="btn" type="button" class="btn btn-primary">Comenzar</button>
                      <button type="submit" class="btn btn-default">Enviar</button>
                    </div>
                  </div>

                  </fieldset>
                </form>                   
            </div>
            <div class=" col-md-4 col-xl-4">
              <div class="row">
                <div class=" col-xs-4 col-sm-4 col-md-4 col-xl-4" >
                  <div id="tunel">
                      <img  id="caracolin" src="../img/caracol.jpg">
                  </div>                 
                </div>

                <div class="  col-xs-4 col-sm-4 col-md-4 col-xl-4">
                  <div id="sol_luna">
                     <img id="cambia" src="../img/1.jpg">
                  </div>                 
                </div>

                <div  class=" col-xs-4 col-sm-4 col-md-4 col-xl-4" id="dias">
                </div>  
              </div>
            </div>
            <div class="col-md-4 col-xl-4" id="tabla">
                 <?php
                  include("tabla.php");
                 ?>
            </div>
          </div>    


<?php
	include ('../layouts/footer.php');
?> 
