<?php
  include ('../layouts/header.php');
?>


<div class="row">
	

	
	<div class="col-md-12">
		<div class="panel panel-success">
		  <div class="panel-heading">Practica ajax</div>
		  	<div class="panel-body info" id="loadAjax">
		    .......
		  	</div>
		</div>	
	</div>

	
	

	<div class="col-md-8">
		<div class="panel panel-info info">
		  <div class="panel-heading">Formulario Historial Clinico</div>
		  <div class="panel-body" id="info">	    


			<form class="form-horizontal">
				<fieldset>

				<!-- Form Name -->
				<legend>Formulario 2</legend>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="peso"><center>Peso Actual:</center></label>
				  <div class="controls">
				    <input id="peso" name="peso" type="text" placeholder="peso" class="form-control input-xlarge" required="" >
				    
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="estatura">Estatura Actual:</label>
				  <div class="controls">
				    <input id="estatura" name="estatura" type="text" placeholder="estatura" class="form-control input-xlarge" >
				    
				  </div>
				</div>

				<!-- Select Basic 
				<div class="control-group">
				  <label class="control-label" for="ciudad">ciudad</label>
				  <div class="controls">
				    <select id="ciudad" name="ciudad" class="input-xlarge">
				      <option>Guanajuato</option>
				      <option>Querétaro</option>
				      <option>Otro</option>
				    </select>
				  </div>
				</div>-->
				<!-- Select Basic -->
				<div class="control-group">
				  <label class="control-label" for="preg1"><center>¿Alguna vez has estado hospitalizado(a) por otras razones que no sean por embarazo o cirugía?</center></label>
				  <div class="controls">
				    <select id="preg1" name="preg1" class="form-control input-xlarge">
				      <option>Si</option>
				      <option>No</option>				      
				    </select>
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="preg2"><center>¿Alguna vez has estado expuesto(a) a químicos, sustancias tóxicas, o radiación?</center> </label>
				  <div class="controls">
				    <select id="preg2" name="preg2" class="form-control input-xlarge">
				      <option>Si</option>
				      <option>No</option>				      
				    </select>
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="preg3"><center>¿Alguna vez has sufrido un accidente serio?</center></label>
				  <div class="controls">
				    <select id="preg3" name="preg3" class="form-control input-xlarge">
				      <option>Si</option>
				      <option>No</option>				      
				    </select>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="preg4"><center>¿Alguna vez has recibido una transfusión sanguínea?</center> </label>
				  <div class="controls">
				    <select id="preg4" name="preg4" class=" form-control input-xlarge">
				      <option>Si</option>
				      <option>No</option>				      
				    </select>
				  </div>
				</div>
				
				<div class="control-group">
				  <label class="control-label" for="preg5"><center>¿Haces ejercicio con regularidad?</center> </label>
				  <div class="controls">
				    <select id="preg5" name="preg5" class=" form-control input-xlarge">
				      <option>Si</option>
				      <option>No</option>				      
				    </select>
				  </div>
				</div>

				<!-- Multiple Radios 
				<div class="control-group">
				  <label class="control-label" for="sexo">Sexo</label>
				  <div class="controls">
				    <label class="radio" for="sexo">
				      <input type="radio" name="Sexo" id="sexo" value="masculino" checked="checked" >
				      masculino
				    </label>
				    <label class="radio" for="sexo">
				      <input type="radio" name="Sexo" id="sexo" value="femenino">
				      femenino
				    </label>
				  </div>
				</div>-->

				<!-- Text input
				<div class="control-group">
				  <label class="control-label" for="curp">CURP</label>
				  <div class="controls">
				    <input id="curp" name="curp" type="text" placeholder="CURP" class="input-xlarge" >
				    
				  </div>
				</div>-->

				<!-- Text input
				<div class="control-group">
				  <label class="control-label" for="fechanac">Fecha de Nacimiento</label>
				  <div class="controls">
				    <input id="fechanac" name="fechanac" type="date" placeholder="Fecha" class="input-xlarge" >
				    
				  </div>
				</div>-->

				
				

				<!-- Text input
				<div class="control-group">
				  <label class="control-label" for="cel">Telefono Celular</label>
				  <div class="controls">
				    <input id="cel" name="cel" type="text" placeholder="Telefono Celular" class="input-xlarge" >
				    
				  </div>
				</div>-->

				<!-- Text input
				<div class="control-group">
				  <label class="control-label" for="tel">Telefono Casa</label>
				  <div class="controls">
				    <input id="tel" name="tel" type="text" placeholder="Telefono Casa" class="input-xlarge" >
				    
				  </div>
				</div>-->

				<!-- Text input
				<div class="control-group">
				  <label class="control-label" for="email">E-mail</label>
				  <div class="controls">
				    <input id="email" name="email" type="text" placeholder="E-mail" class="input-xlarge">
				    
				  </div>
				</div>-->

				
				</fieldset>
			</form>



		  </div>
		</div>
		
	</div>
	<div class="col-md-4">

		<div class="panel panel-primary">
		  <div class="panel-heading">Practica ajax</div>
		  <div class="panel-body">
		    <button type="button" class="btn btn-primary btn-large" id="btnform2" >Ajax</button>
		  </div>
		</div>	
		
	</div>
	<!--
  	<div class="col-md-6">
		<div class="panel panel-default">
		  <div class="panel-heading">Formulario Datos personales</div>
		  <div class="panel-body">
		    <label for="profundidad">Profundidad</label>
				<input type="text" name="profundidad" id="profundidad">
			<label for="sube">Sube</label>
				<input type="text" name="sube" id="sube">
			<label for="baja">Baja</label>
				<input type="text" name="baja" id="baja">
			<label for="dias">Dias</label>
				<input type="text" name="dias" id="dias">

		  </div>
		</div>
		
	</div>
	-->


  	

</div>




<?php include ('../layouts/footer.php'); ?>
