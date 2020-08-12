<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">

      <link rel="stylesheet" href="css/estiloss.css">
    <link rel="shortcut icon" href="img/php.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Registro de datos</title>
</head>
<body style="background: #74ebd5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ACB6E5, #74ebd5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ACB6E5, #74ebd5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
  
  <header> 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a href="../../unidad3.html"><img src="img/atras.png" style="margin-right: 10px;"> </a>

     <a class="navbar-brand" href="index.php">Registro y muestreo de datos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="registro.php">Ingresar Datos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="app/ver.php">Ver Datos</a>
      </li>
     </ul>
    </div>
  </nav>
  </header> 
    <?php
    include('app/registrar.php');
    ?>
          <br>
       <div class="registro"> 
        <form  method="POST">
              <div class="container-fluid">
             <div class="jumbotron mt-5">
                       <h2 class="text-center">Ingrese los datos solicitados</h2>
                          <div class="card-body">
                                  <br>
                                   <input class="form-control" type="text" name="nombre" autofocus placeholder="Ingrese su nombre completo" required> 
                                   <br> 
                                    <input class="form-control" type="email" name="email" placeholder="Ingrese su Email" required> 
                                   <br> 
                                    <input class="form-control" type="number" name="telefono" autofocus placeholder="Ingrese su numero de telefono" required> 
                                   <br> 
                                    <input class="form-control" type="number" name="edad" autofocus placeholder="Ingrese su edad" min="18" max="100" required> 
                                   <br>
                                    <select class="form-control" name="sexo" required>
                                      <option value="">Seleccione su sexo</option>
                                      <option value="Masculino">Masculino</option>
                                      <option value="Femenino">Femenino</option>   
                                    </select> 
                                   <br>  
                                   <input class="form-control" name="domicilio" placeholder="Ingrese su domicilio "></input>
                                    <br>
                                     <select class="form-control" name="e_civil">
                                     <option value="">Ingrese su estado civil</option>
                                     <option value="Soltero">Soltero</option>
                                     <option value="Casado">Casado</option>
                                     <option value="Divorciado">Divorciado</option>
                                   </select>
<br>
                          <div class="form-group">
                                  <div class="text-center">
                                     <button class="btn btn-success btn-block" type="submit" name="registrar">Enviar datos</button>
                                      <button class="btn btn-success btn-block" type="reset">Limpiar campos</button>   
                                      <hr class="my-1"> 
                               </div>             
                          </div>    
                      </div>
                      </div>
         </div>
         </form>
      </div>
       <br>

<br>
<br>
<br>

    <footer class="footer">
    <div class="container">
        <span class="list-inline text.center">&copy; Dw-Villarreal 2020</span>
    </div>
</footer>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>