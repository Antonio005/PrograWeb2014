<?php	
	error_reporting(E_ALL ^ E_NOTICE);    session_start();  session_destroy();
	
	$imprimir=$_SESSION['imp'];


  include ('../layouts/header.php');
 

?>


<div class="row">
	

	
	<div class="col-md-12">

		<div class="panel panel-primary">
		  <div class="panel-heading">Bienvenidos</div>
		  	<div class="panel-body info" id="loadAjax">
		    Examen 3er Parcial
		  	</div>
		</div>	

	</div>

	<div class="col-md-12">

		<div class="panel panel-primary">
		  <div class="panel-heading">Usuarios</div>

		 <div class="alert alert-primary alert-dismissable">
	  			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  			<strong>Mensajes!</strong><?php # if(isset($_SESSION['exito'])){echo $_SESSION['exito']; session_destroy();}else{echo "" ;} unset($_SESSION['exito']);?>
  		     </div>
		  <!--<div class="panel-body">
		    <button type="button" class="btn btn-primary btn-large" id="btnuser" >Registar</button>
		  </div> --> 
		</div>	
		
	</div>

		
	<div class="col-md-4">
		<div class="panel panel-success">
		  <div class="panel-heading">Inicar Sesión</div>
		  	<div class="panel-body info" id="loadAjax">
		  		<form class="form-horizontal" role="form">
				  <div class="form-group">
				    
				    <div class="col-sm-10">
				      <label for="inputEmail3" class=" control-label">E-mail</label>
				      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required >
				   	 </div>
				  </div>
				  <div class="form-group">				    
				    <div class="col-sm-10">
				      <label for="inputPassword3" class=" control-label">Contraseña</label>
				      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
				    </div>
				  </div>
				  <div class="form-group">				    
				      <div class="checkbox">
				      	<div class="col-sm-offset-2 col-sm-10">
				        <label><input type="checkbox"> Recordar</label>
				        </div>
				      </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Iniciar Sesión</button>
				    </div>
				  </div>
				</form>		    
		  	</div>
		</div>	
	</div>
	

	<div class="col-md-8" >
		<div class="panel panel-info " id="regis">
		  <div class="panel-heading">Registro de Usuario</div>
		  <div class="panel-body" id="info">	    


			<form class="form-horizontal" action="tabla_usuario.php" method="post">
		

				<!-- Form Name -->
				<legend>Usuario</legend>
				<p><h6>Campos con * son obligatorios</h6></p>

				<!-- Text input-->
				<div class="control-group ">
				  <label class="control-label" for="email"><span class="glyphicon glyphicon-envelope"></span>E-mail *</label>
				  <div class="controls">
				    <input id="email" name="email" type="text" placeholder="Ejemplo de e-mail: usuario@email.com" class="form-control" requerid="" value=<?php if(isset($_SESSION['email'])){echo $imprimir['email'];}else{echo $imprimir['email'] ;}?>>	
				    <p class="bg-danger"><?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}else{echo "" ;} unset($_SESSION['email']);?></p>				    
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="username"><span class="glyphicon glyphicon-user"></span>Usuario *</label>
				  <div class="controls">
				    <input id="username" name="username" type="text" placeholder="Ejemplo de usuario : usuario_123" class="form-control"  value="<?php echo $imprimir['username'];?>" requerid>				     
				    <p class="bg-danger"><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}else{echo "" ;} unset($_SESSION['username']);?></p>				   
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="password">Contraseña *</label>
				  <div class="controls">
				    <input id="password" name="password" type="password" placeholder="password" class="form-control"  value="<?php echo $imprimir['password'];?>"  requerid >		
				    <p class="bg-danger"><?php if(isset($_SESSION['password'])){echo $_SESSION['password'];}else{echo "" ;} unset($_SESSION['password']);?></p>				   		    
				  </div>
				</div>

							

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="foto">Foto</label>
				  <div class="controls">
				    <input id="foto" name="foto" type="text" placeholder="Foto" class="form-control" >				    
				  </div>
				</div>

					<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="cp">C.P</label>
				  <div class="controls">
				    <input id="cp" name="cp" type="text" placeholder="Ejemplo de C.P.: 38020" class="form-control" value="<?php echo $imprimir['cp'];?>" requerid>				
				    <p class="bg-danger"><?php if(isset($_SESSION['cp'])){echo $_SESSION['cp'];}else{echo "" ;} unset($_SESSION['cp']);?></p>	    
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="rfc">R.F.C</label>
				  <div class="controls">
				    <input id="rfc" name="rfc" type="text" placeholder="Ejemplo de R.F.C. : VIMA870510BFA" class="form-control" value="<?php echo $imprimir['rfc'];?>" requerid >
				    <p class="bg-danger"><?php if(isset($_SESSION['rfc'])){echo $_SESSION['rfc'];}else{echo "" ;} unset($_SESSION['rfc']);?></p>				   
				  </div>
				  </div>
				</div>

				
				<div class="control-group">
                    <label class="control-label" for="singlebutton"></label>
                    <div class="controls">                     
                      <button type="submit" id="btnuser2"  class="btn btn-primary">Registrarse</button>
                    </div>
                 </div>


			
			</form>



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
