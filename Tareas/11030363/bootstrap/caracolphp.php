<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>El 22222</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/caracol.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  
    
	
	<div class="container-fluid">
		
		
		<div class="row">
		  <div class="col-md-12">
			<center> <h1> El caracol</h1> </center>
		  </div>
		</div>
		
		<div class="row">
		  <div class="col-md-12">
			<center> 
				<?php
					$profundidad=$_REQUEST['profundidad'];
					$sube=$_REQUEST['sube'];
					$resbala=$_REQUEST['resbala'];
					$dia=0;
					$salir=0;
					
					
					while($salir<$profundidad){
						$salir=$salir+$sube;
						$dia++;
						if($salir<$profundidad){
							$salir=$salir-$resbala;
							
						}
							
						
					}//while
					
					echo "El caracol salio en: ".$dia." dias.";
				?>
			</center>
		  </div>
		</div>

	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/caracol2.js"></script>
  </body>
</html>