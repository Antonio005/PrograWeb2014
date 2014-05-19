<!DOCTYPE HTML>  
<html>  
<head>  
    <title>Formulario Basico</title>  
    <link href="css/bootstrap.min.css" rel="stylesheet">  
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
                      
                      <a class="navbar-brand" href="#">ANDRES VILLAGOMEZ</a>
                  </div>
                     <!-- Collect the nav links, forms, and other content for toggling -->
                </div><!-- /.container-fluid -->
    </nav> 

    <div class="container-fluid">
      <div class="row">
        <div class="row">
              <div class="col-md-6">
                    <form action="datosf2.php" method="post" class="form-horizontal">
                        <fieldset>

                        <!-- Form Name -->
                        <legend>Form Name</legend>

                        <!-- Text input-->
                        <div class="control-group">
                          <label class="control-label" for="nombre">Nombre</label>
                          <div class="controls">
                            <input id="nombre" name="nombre" type="text" placeholder="nombe" class="input-xlarge" required="">
                            <p class="help-block">Ingresa tu nombre</p>
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="control-group">
                          <label class="control-label" for="apellido">Apellido</label>
                          <div class="controls">
                            <input id="apellido" name="apellido" type="text" placeholder="apellido" class="input-xlarge">
                            <p class="help-block">Ingresa tu apellido</p>
                          </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="control-group">
                          <label class="control-label" for="materia">Materia</label>
                          <div class="controls">
                            <select id="materia" name="materia" class="input-xlarge">
                              <option>Progra Web</option>
                              <option>Topicos de redes</option>
                            </select>
                          </div>
                        </div>

                        <!-- Textarea -->
                        <div class="control-group">
                          <label class="control-label" for="comentario">Comentario</label>
                          <div class="controls">                     
                            <textarea id="comentario" name="comentario">Sin Comentarios</textarea>
                          </div>
                        </div>

                        <!-- Button -->
                        <div class="control-group">
                          <label class="control-label" for="enviar"></label>
                          <div class="controls">
                            <button id="enviar" name="enviar" type="submit" class="btn btn-primary">Enviar</button>
                          </div>
                        </div>

                        </fieldset>
                    </form>
              </div>
              <div class="col-md-6">
                <div class="panel panel-default">
                <!-- Default panel contents -->
                    <div class="panel-heading">Datos</div>

                     <table class="table table-bordered">
                        <tr>
                          <td>Nombre</td>
                          <td>Apellido</td>
                          <td>Materia</td>
                          <td>Comentarios</td>
                        </tr> 
                        <tr>
                         
                        </tr> 
                      </table>                
                    </div>             
                  </div>            

              </div>
              
        </div>
      </div>
    </div>
  
 
          
</body>  
</html> 