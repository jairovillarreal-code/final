<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operaciones basicas</title>
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body style="background-image: url(img/cuarzo.jpg);">

<a href="../unidad3.html"><img src="img/atras.png" style="padding-left: 5%; margin-bottom:  0px; padding-top: 10px"> </a>


  <div class="container-fluid">
    <?php
    $num1="";
    $num2="";

    if ($_POST){
        $num1=$_POST ['numero1'];
        $num2=$_POST ['numero2'];
    }

?>

    <div class="jumbotron mt-5">
    
<h2 class="text-center">Operaciones basicas </h2>
<form class="text-center" class="#" action="operaciones.php" method="POST">

<div class="col-sm-4 offset-md-4">
      <div class="card-header bg-dark text-white text-center">
<table>
<tr>
<td>

<input class="container-fluid" type="number" name="numero1" placeholder="Ingrese un numero"
value="<?php echo $num1; ?>">
</td>
<td>
<input class="container-fluid" type="number" name="numero2" placeholder="Ingrese un numero"
value="<?php echo $num2; ?>">
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="Calcular">
</td>
</tr>
</table>
</div>
</div>
</form>
<br>
<div class="text-center"><?php
if ($_POST){
    $suma=$num1+$num2;
    echo "La suma de: " . $num1 . " mas " . $num2 . " es " . $suma;
}
?>
<br>



<?php
if ($_POST) {
    $resta=$num1-$num2;
    echo "La resta de: " . $num1 . " menos " . $num2 . " es " . $resta;
}
?>
<br>



<?php
if ($_POST) {
    $multiplicacion=$num1*$num2;
    echo "La multipicacion de: " . $num1 . " por " . $num2 . " es " . $multiplicacion;
}
?>



<br>
<?php
if ($_POST) {
    $divicion=$num1/$num2;
    echo "La divicion de: " . $num1 . " entre " . $num2 . " es " . $divicion;
}
?>
</div>
</div>
<br>

</div> 




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