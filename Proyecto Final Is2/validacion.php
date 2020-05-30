<?php 	

session_start();

$id_usuario = $_POST['id_usuario'];
echo $id_usuario;
$clave 	= $_POST['clave'];
echo $clave;
include("conexion.php");

$query = "SELECT * FROM usuarios WHERE cedula = '$id_usuario' AND clave = '$clave'";
 

	$resultado = $con->query($query);

	
	if ($row = $resultado->fetch_assoc()) {


		if ($row['rol'] == '1') {
			$_SESSION['id_usuario'] = $row['correo'];
			$_SESSION['u_usuario'] = $row['nombres'];
			header("Location: administrador/index.php");
		} 
        if ($row['rol'] == '2') {
			$_SESSION['id_usuario'] = $row['correo'];
			$_SESSION['u_usuario'] = $row['nombres'];
			header("Location: estudiantes/index.php");
		}
        if ($row['rol'] == '3') {
			$_SESSION['id_usuario'] = $row['correo'];
			$_SESSION['u_usuario'] = $row['nombres'];
			header("Location: profesores/index.php");
		}

	} else {
		header("Location: index.php");
	}


	if (!$query) {
	    printf("Error: %s\n", mysqli_error($conn));
	    exit();
	}

	

 ?>