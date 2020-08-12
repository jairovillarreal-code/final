<?php

	include("conect_bd.php");

	if (isset($_POST['registrar'])){
		if (strlen($_POST ['nombre']) >=1 && strlen($_POST ['email'])>=1){
			$nombre = trim($_POST['nombre']);
			$email = trim($_POST['email']);
			$telefono = trim($_POST['telefono']);
			$edad = trim($_POST['edad']);
			$sexo = trim($_POST['sexo']);
			$domicilio = trim($_POST['domicilio']);
			$e_civil = trim($_POST['e_civil']);
			
			$consulta = "INSERT INTO datos (nombre, email, telefono, edad, sexo, domicilio, e_civil) values('$nombre', '$email', '$telefono', '$edad', '$sexo', '$domicilio', '$e_civil')";

			$resultado = mysqli_query($conex, $consulta);

	if($resultado) { ?>
				<br>
				<h3 class="enviado text-center" style="color: green;">Tus datos se registraron correctamente</h3>				<?php } else { ?>
					<h3 class="error text-center" style="color: red;">Se a encontrado un error</h3>
	<?php }
		}
}
?>