<!DOCTYPE html>
<html lang="es">
<head>
	<title>LogIn | Vac.Inf ©</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('/css/main.css'); ?>">
	<link rel="shortcut icon" href="<?php echo base_url('/favicon.ico'); ?>" type="image/x-icon">
</head>
<body>
	<div class="full-box login-container cover">
		<form action="home.html" method="" autocomplete="off" class="logInForm">
			<p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
			<p class="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>
			<div class="form-group label-floating">
			  <label class="control-label" for="UserName">Usuario</label>
			  <input class="form-control" id="UserName" type="text">
			  <p class="help-block">Escribe tú nombre de usuario</p>
			</div>
			<div class="form-group label-floating">
			  <label class="control-label" for="UserPass">Contraseña</label>
			  <input class="form-control" id="UserPass" type="text">
			  <p class="help-block">Escribe tú contraseña</p>
			</div>
			<div class="form-group text-center">
				<input type="submit" value="Iniciar sesión" class="btn btn-info" style="color: #FFF;">
			</div>
		</form>
	</div>
	<!--====== Scripts -->
	<script src="<?php echo base_url('/js/jquery-3.1.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('/js/bootstrap.min.js'); ?>"></script>	
	<script src="<?php echo base_url('/js/material.min.js'); ?>"></script>
	<script src="<?php echo base_url('/js/ripples.min.js'); ?>"></script>
	<script src="<?php echo base_url('/js/sweetalert2.min.js'); ?>"></script>
	<script src="<?php echo base_url('/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
	<script src="<?php echo base_url('/js/main.js'); ?>"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>