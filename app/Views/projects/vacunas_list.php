<!DOCTYPE html>
<html lang="es">
<head>
	<title>Catálogo de Vacunas | Vac.Inf ©</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo base_url('/css/main.css'); ?>">
</head>
<body>
	<!-- SideBar / barra superior y derecha -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				minsap | poli II <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info / Informacion del Usuario -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="<?php echo base_url('/assets/avatars/AdminMaleAvatar.png'); ?>" alt="UserIcon">
					<figcaption class="text-center text-titles">User Name</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="my-data.html" title="Mis datos">
							<i class="zmdi zmdi-account-circle"></i>
						</a>
					</li>
					<li>
						<a href="my-account.html" title="Mi cuenta">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="<?= site_url('/logout'); ?>" title="Salir del sistema" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu / Barra del Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="<?php echo base_url('inventario/administrar'); ?>">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Resumen Gral
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Vacunas <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="company.html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Empresa</a>
						</li>
						<li>
							<a href="category.html"><i class="zmdi zmdi-labels zmdi-hc-fw"></i> Categorías</a>
						</li>
						<li>
							<a href="provider.html"><i class="zmdi zmdi-truck zmdi-hc-fw"></i> Proveedores</a>
						</li>
						<li>
							<a href="<?php echo base_url('/vacunas/agregar_nueva_vacuna') ?>"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Agregar Vacuna</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Niños <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="<?php echo base_url('/infantiles/listado_de_infantiles') ?>"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Listado</a>
						</li>
						<li>
							<a href="<?php echo base_url('/infantil/nuevo_infante') ?>"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Agregar Nuevo</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo base_url('/vacunas/listado_de_vacunas') ?>">
						<i class="zmdi zmdi-book-image zmdi-hc-fw"></i> Catalogo de Vacunas
					</a>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="search.html" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-book-image zmdi-hc-fw"></i> CATÁLOGO DE VACUNAS</h1>
			</div>
			<p class="lead">
				Catálogo de Vacunas registradas en el esquema nacional...
			</p>
		</div>
		<div class="container-fluid text-center">
			<div class="btn-group">
              <a href="javascript:void(0)" class="btn btn-default btn-raised">SELECCIONE FILTRO</a>
              <a href="javascript:void(0)" data-target="dropdown-menu" class="btn btn-default btn-raised dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#!">1 Dosis</a></li>
                <li><a href="#!">2 Dosis</a></li>
                <li><a href="#!">3 Dosis</a></li>
                <li><a href="#!">Refuerzos</a></li>
                <li><a href="#!">Intramusculares</a></li>
                <li><a href="#!">Orales</a></li>
                
              </ul>
            </div>
		</div>
		<div class="container-fluid">
			<h2 class="text-titles text-center">Filtro Seleccionado</h2>
			<div class="row">
				<div class="col-xs-12">
					<div class="list-group">
						<!-- Listado de Vacunas -->
						<?php foreach ($esqvac as $key): ?>

						<div class="list-group-item">
							<div class="row-picture">
								<img class="circle" src="assets/book/book-default.png" alt="icon">
							</div>
							<div class="row-content">
								<h4 class="list-group-item-heading">
								<td><?php echo $key-> nombre ?>								
								</h4>
								<p class="list-group-item-text">
									<strong><?php echo $key-> id ?>: </strong><?php echo $key-> resumen ?>.
									| Dosis(ml): <?php echo $key-> dosis_ml ?>.
									| Vía de Administración: <?php echo $key-> via ?>.
									
									<br>
									<a href="book-info.html" class="btn btn-primary" title="Más información"><i class="zmdi zmdi-info"></i></a>
									<a href="#!" class="btn btn-primary" title="Ver PDF"><i class="zmdi zmdi-file"></i></a>
									<a href="#!" class="btn btn-primary" title="Descargar PDF"><i class="zmdi zmdi-cloud-download"></i></a>
									<a href="book-config.html" class="btn btn-primary" title="Gestionar Vacuna"><i class="zmdi zmdi-wrench"></i></a>
								</p>
							</div>
						</div>
						<div class="list-group-separator"></div>

						<?php endforeach; ?>
						<!-- Fin del Listado de Vacunas -->
					</div>
					<nav class="text-center">
						<ul class="pagination pagination-sm">
							<li class="disabled"><a href="javascript:void(0)">«</a></li>
							<li class="active"><a href="javascript:void(0)">1</a></li>
							<li><a href="javascript:void(0)">2</a></li>
							<li><a href="javascript:void(0)">3</a></li>
							<li><a href="javascript:void(0)">4</a></li>
							<li><a href="javascript:void(0)">5</a></li>
							<li><a href="javascript:void(0)">»</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		
		
	</section>

	<!--====== Scripts -->
	<script src="<?php echo base_url('/js/jquery-3.1.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('/js/sweetalert2.min.js'); ?>"></script>
	<script src="<?php echo base_url('/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('/js/material.min.js'); ?>"></script>
	<script src="<?php echo base_url('/js/ripples.min.js'); ?>"></script>
	<script src="<?php echo base_url('/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
	<script src="<?php echo base_url('/js/main.js'); ?>"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>