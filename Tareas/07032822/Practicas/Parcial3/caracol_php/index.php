<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/css_caracol.css" rel="stylesheet">
    

    
  </head>
  <body> 

        

        <nav class="navbar navbar-default" role="navigation">
           <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Caracol</a>
                  <a class="navbar-brand" href="#">ANDRES VILLAGOMEZ</a>
              </div>
                 <!-- Collect the nav links, forms, and other content for toggling -->
            </div><!-- /.container-fluid -->
        </nav>  

       <div class="container-fluid">
          <div class="row">
            <div class=" col-sm-12 col-md-12 col-xl-12">
              <div id="alert" class="close"></div>
              
            </div>           
          </div>

          <div class="row">
            <div class=" col-sm-4 col-md-4 col-xl-4">
              
                <form action="tabla.php" method="post">
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
                      <p class="help-block">Minimo 0  y  M</p>
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
            <div class=" col-sm-4 col-md-4 col-xl-4">
              <div class="row">
                <div class=" col-xs-4 col-sm-4 col-md-4 col-xl-4" >
                  <div id="tunel">
                      <img  id="caracolin" src="img/caracol.jpg">
                  </div>                 
                </div>

                <div class="  col-xs-4 col-sm-4 col-md-4 col-xl-4">
                  <div id="sol_luna">
                     <img id="cambia" src="img/1.jpg">
                  </div>                 
                </div>

                <div  class=" col-xs-4 col-sm-4 col-md-4 col-xl-4" id="dias">
                </div>  
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-xl-4" id="tabla">
              <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Datos</div>

                 <table class="table table-bordered">
                    <tr>
                      <td>Distancia</td>
                      <td>Sube de Dia</td>
                      <td>Baja de dia</td>
                    </tr> 
                    
                  </table>                
              </div>
              
            </div>
          </div>
       </div>     




      

       
       

          
        
      

      
      
  



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <script src="js/caracol.js"></script>
    
  </body>
</html>