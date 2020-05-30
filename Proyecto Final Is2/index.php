<?php
  session_start();   // Necesitamos una sesion
  if(isset($SESSION['u_usuario'])){  // comparamos si existe
    header("Location: validacion.php"); // si existe, lo redireccionamos a sesion.php
  }
  else{
    session_destroy();  // si no existe, destruimos sesion
  }
?>


<!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login UTP 2020</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
	<img class="wave" src="img\wave.png">
	<div class="container">
		<div class="img">
			<img src="img\undraw_email_campaign_qa8y (1).svg">
		</div>
		<div class="login-content">

				<img src="img\utp.png">
                
                
                 <form class="form-signin" action="validacion.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                
                
				<h2 class="title">Bienvenido</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
                    
           		   <div class="div">
           		   		<h5>Correo</h5>
           		   		<input type="text" id="inputEmail" class="form-control" placeholder="" required autofocus name ="id_usuario" >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" id="inputPassword" class="form-control" placeholder="" required name="clave">
            	   </div>
            	</div>
            	<a href="#">Olvidaste Contraseña?</a>
            	 <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Ingresar</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js\main.js"></script>
</body>
</html>