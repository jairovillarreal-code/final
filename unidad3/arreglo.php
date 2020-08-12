 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos carrera </title>
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<a href="../unidad3.html"><img src="img/atras.png" style="padding-left: 5%; margin-bottom:  0px; padding-top: 10px"> </a>

<div class="jumbotron mt-5">  
<body style="background-image: url(img/mezclilla.jpg);">
	
	<h2>Arreglo carrera </h2>

 <?php

$nombre =  array ("Jairo","Dewing","Everardo","Sebastian","Saydel","Eliodoro","Jacki","Jose Maria","Abdiel","Daniel","Edgar","Yuren","Yahaira","Eduardo","Vitel","Armando","Miguel","Karime","Abraham","Noe");
$edad = array ("17 Años","18 Años","19 Años","20 Años","21 Años","22 Años","23 Años","24 Años","25 Años","26 Años","18 Años","19Años","20 Años","21 Años","22 Años","23 Años","24 Años","25 Años","26Años","17 Años");
$carrera = array ("El plantel","Las oportunidades de trabajo","Mis compañeros","Los maestros","La comida","Las excursiones","Mi salon","Las clases","Las Canchas","Los jueBEBES","Las hora de salida","L hora de comer","Jugar en la cancha","Platicar con mis compañeros","Los talleres","Los laboratorios","no hacer tarea","Mis trabajos","Hacer mis tareas","Los proyectos");
$clases = array ("Me encatan","No me gusta para nada","Son exelentes","Muy malas","Si me gustan pero prefiero que mejoren","Si me gustan pero mi maestro me explica bien","Son muy aburridas","Pues hay van","Prefiero no hablar de ellas","Hay van mas o menos","Estan de lo peor","Quiero que tarden mas","Quiero que tardaran menos","Son muy claras","No les entiedo","Estan muy bien explicadas","Aveces quisiera salir de ellas","Aveces no quisiera salir de ellas","Aburridas","Estan de lo pesimo");
$trabajos = array ("Voy muy bien y los trabajoslos entrego a tiempo","Voy bien pero los trabajos los entrego tarde","Voy bien pero los trabajos os entrego con retraso","Voy mas o menos y mis y trabajos ni los entrego","No entro a las clases pero mis trabajos si los entrego","Entro a todas las clases pero mis trabajo casi no los entrego","Llego tarde a las clases pero mis tareas nunca van a faltar","Siempre puntual tanto en asistencia como trabajos y tareas","No entro a clases y ni entrego trabajos ni tareas","Haveces llego tarde pero todos los trabajos puntuales","Excelente en todo","Voy bien pero veces entrego tareas por que trabajo","No puedo entregar tareas pero voy bien","No hago nada","Pues hay voy","Claro que hago todo","Aveces voy a la escuela y entrego lo que me piden","Voy muy bien hago tolo que me piden","No me gusta pero que le hago","Todo bien");

echo "Me llamo " . $nombre [1] . " tengo " . $edad [3] . " lo que me gusta de la escuela " . $carrera [12] . " y tambien " . $carrera [15] . " lo que pienso de las clases es que " . $clases [5] . " pero aun asi " . $trabajos [14];
?>
  
</div>
  

<br>
<br>
<br>
      <footer class="footer">
    <div class="container">
        <span class="list-inline text.center">&copy; Dw-Villarreal 2020</span>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>