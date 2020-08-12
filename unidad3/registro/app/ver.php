
<?php

  $conexion = mysqli_connect('localhost', 'root', '', 'muestreo');
  ?>

<!DOCTYPE html>
<html lang="es">
  <head>
<link rel="shortcut icon" href="img/php.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="../css/estiloss.css">

    <title>Consulta de datos</title>

    
  </head>
<body style="background: #74ebd5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ACB6E5, #74ebd5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ACB6E5, #74ebd5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
  <header>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a href="../../../unidad3.html"><img src="../img/atras.png" style="margin-right: 10px;"> </a>

      <a class="navbar-brand" href="../index.php">Registro y muestreo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../registro.php">Ingresar datos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="ver.php">Consultar datos</a>
      </li>
     </ul>
    </div>
  </nav>
  
  

</header>
  <body>
    <div class="container-fluid">

  <br>
      <h1 class="display text-center " style="color: white;">Consulta de Datos </h1>
    <br>
    
    <table class="table table-Striped">
      <thead class="thead-dark" >
        <tr>
          <th>ID</th>
          <th>Nombre completo</th>
          <th>Email</th>
          <th>Telefono</th>
          <th>Edad</th>
          <th>Sexo</th>
          <th>Domicilio</th>
          <th>Estado civil</th>
       </tr>        
      </thead>

      <?php
        $sql = "SELECT * from datos";
        $result = mysqli_query($conexion, $sql);

        while ($mostrar= mysqli_fetch_array($result)){
        ?>
        <tr>
          <td><?php echo $mostrar ['id'] ?></td>
          <td><?php echo $mostrar ['nombre'] ?></td>
          <td><?php echo $mostrar ['email'] ?></td>
          <td><?php echo $mostrar ['telefono'] ?></td>
           <td><?php echo $mostrar ['edad'] ?></td>
          <td><?php echo $mostrar ['sexo'] ?></td>
          <td><?php echo $mostrar ['domicilio'] ?></td>
          <td><?php echo $mostrar ['e_civil'] ?></td>
          
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
 



 <footer class="footer">
    <div class="container">
        <span class="list-inline text.center">&copy; Dw-Villarreal 2020</span>
    </div>
</footer>
  
</div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>