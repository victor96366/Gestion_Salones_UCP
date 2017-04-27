<?php if(!$this->session->userdata('nombre_usuario')){
		redirect(base_url());
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Gestion de Prestamo de Llaves y Recursos Fisicos</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>public/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url(); ?>public/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->	
	<style>
		.row-fluid p{
			text-align: justify;
		}
	</style>	
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand logo" href="index.html"><img src="<?php echo base_url(); ?>public/img/logo.png"></img></a>
			<a class="brand titulo" href="index.html"><span>GESTIÓN DE SALONES</span></a>
				<div class="nav-no-collapse header-nav">
					</div>
					<!-- end: Header Menu -->
					
				</div>
			</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
			<div class="row-fluid">
				
						<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="inicio"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Inicio</span></a></li>	
						<li>
						<a  href="prestamo"><i class="icon-calendar"></i><span class="hidden-tablet"> Prestamo</span></a>	
						</li>
						<li>
						<a  href="equiposFisicos"><i class="icon-list-alt"></i><span class="hidden-tablet"> Equipos Fisicos</span></a>	
						</li>
						<li>
						<a  href="usuarios"><i class="icon-align-justify"></i><span class="hidden-tablet"> Usuarios</span></a>
						</li>
						<li>
						<a  href="reparacion"><i class="icon-wrench"></i><span class="hidden-tablet"> Reparación</span></a>
						</li>
						<li>
						<a  href="aulas"><i class="icon-th"></i><span class="hidden-tablet"> Aulas</span></a>	
						</li>
						<li>
						<a href="roles"><i class="icon-group"></i><span class="hidden-tablet"> Roles</span></a>
						</li>
						<li><a href="ayuda"><i class="icon-book"></i><span class="hidden-tablet"> Ayuda</span></a></li>
						<li><a href="contacto"><i class="icon-envelope"></i><span class="hidden-tablet"> Contacto</span></a></li>
						<li><a href="<?php echo base_url(); ?>"><i class="icon-lock"></i><span class="hidden-tablet"> Cerrar Sesión</span></a></li>	
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">
		       <ul class="breadcrumb">
					<li>
						<i class="icon-home"></i>
						<a href="index.html">Inicio</a> 
						<i class="icon-angle-right"></i>
					</li>
					<li>
						<a href="index.html">Ayuda</a> 
					</li>
				</ul>
				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white book"></i><span class="break"></span>Ayuda</h2>
					</div>
					<div class="box-content">    
						  <div class="row-fluid">            
							  <div class="span12">
								<h3>Sistema de gestión de llaves y equipos fisicos</h3>
								<p>
								El sistema cuenta con diferentes opciones, las principales de ellas son:
								Prestamo, Equipos Fisicos, Usuarios, Reparaciones, Aulas y Roles.
								En cada una de estas podemos  encontrar otras dos opciones que son Registrar y Consultar, en la cual se puede realizar su respetivo registro o su consulta.
								</p>
							  </div>							                           		 					 	 
					  </div>
					  <div class="row-fluid">            
							  <div class="span6">
								<div id="image-8" class="masonry-thumb">
									<img class="grayscale" src="<?php echo base_url(); ?>public/img/registro.png" alt="Sample Image 8">
								</div>
							  </div>
							  <div class="span6">
								<p>
								En las diferentes opciones podemos encontrar la opción de Registro, la cual nos permite almacenar información que será necesaria para llevar un control de esta, para almacenar esta información debe de llenar todos los campos solicitados y dar clic en el botón de aceptar.
								</p>
								<p>
								Igualmente podemos observar que en la parte superior derecha encontramos el nombre de usuario de la persona que ingreso al sistema.
								</p>
							  </div>							                           		 					 	 
					  </div>
					   <div class="row-fluid">            
							  <div class="span6">
							  <p>
								En la opción de consulta, se puede encontrar que se solicitan unos datos para realizar la respectiva consulta, estos los puede ingresar según el tipo de consulta que requiera, no es necesario que se suministren todos los datos, estos se ingresan según lo que quiera consultar, dado el caso de que sea necesario realizar una consulta general, se da clic en el botón de "Consulta General".
								</p>
								<p>
								Los datos se listaran automáticamente en la tabla inferior, con su respectiva información, igualmente esta tabla incluye dos opciones las cuales son de editar y eliminar. Para poder realizar cualquiera de las dos opciones debe de dar clic en el respectivo icono.
								</p>
							  </div>
							  <div class="span6">
								<div id="image-8" class="masonry-thumb">
									<img class="grayscale" src="<?php echo base_url(); ?>public/img/consulta.png" alt="Sample Image 8">
								</div>
							  </div>								                           		 					 	 
					  </div>
					  <div class="row-fluid">            
							  <div class="span6">
								<div id="image-8" class="masonry-thumb">
									<img class="grayscale" src="<?php echo base_url(); ?>public/img/editar.png" alt="Sample Image 8">
								</div>
							  </div>
							  <div class="span6">
								<p>
								Al dar clic en el icono de modificar aparecerá una venta emergente donde puede encontrar un formulario en el cual hay ciertos datos, si al pasar el mouse sobre el campo aparece un icono rojo este no es posible modificarlo, los demás son completamente modificables, para guardar los cambios es necesario dar clic en el botón editar.
								</p>
							  </div>							                           		 					 	 
					  </div>
					  <div class="row-fluid">            
							  <div class="span6">
							  <p>
								Al dar clic en el icono de eliminar aparecerá una ventana emergente donde puede observar un mensaje indicándole si está seguro de eliminar este registro, para realizar la eliminación es necesario dar clic en el botón Aceptar.
							   </p>								
							  </div>
							  <div class="span6">
								<div id="image-8" class="masonry-thumb">
									<img class="grayscale" src="<?php echo base_url(); ?>public/img/eliminar.png" alt="Sample Image 8">
								</div>
							  </div>								                           		 					 	 
					  </div>
					  <div class="row-fluid">            
							  <div class="span6">
								<div id="image-8" class="masonry-thumb">
									<img class="grayscale" src="<?php echo base_url(); ?>public/img/registrarp.png" alt="Sample Image 8">
								</div>
							  </div>
							  <div class="span6">
								<p>
								En la opción de registrar préstamo puede encontrar dos formularios, uno de ellos que es registrar préstamo permite que se registre el préstamo de las llaves, en este caso debe ingresar el código del docente y dar clic en el botón de aceptar.  
								</p>
								<p>
								En el formulario de registrar entrega de llaves me permite registrar que el docente ya realizo la entrega de las respectivas llaves del aula, en este formulario es necesario ingresar el código del docente, llegado el caso de que el docente no entrega las llaves personalmente se selecciona el aula, adicional a esto se encuentra un campo para registrar las horas de uso de video Beam.
								</p>
							  </div>							                           		 					 	 
					  </div>
					   <div class="row-fluid">            
							  <div class="span6">
							  <p>
								Al dar clic en Aceptar en cualquiera de los dos formularios, aparecerá una ventana emergente en la cual se puede encontrar información relevante del docente e igualmente se encuentra el aula reservada y el horario en el cual se realizara el préstamo.
							   </p>	
							   <p>
							   	Es necesario para guardar el registro del préstamo o de la entrega de llaves dar clic en el botón de Aceptar de la venta emergente.
							   </p>							
							  </div>
							  <div class="span6">
								<div id="image-8" class="masonry-thumb">
									<img class="grayscale" src="<?php echo base_url(); ?>public/img/inforp.png" alt="Sample Image 8">
								</div>
							  </div>								                           		 					 	 
					  </div>

				</div><!--/span-->
			</div><!--/row-->

		</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2017 UCP</span>
			
		</p>

	</footer>
	<!-- start: JavaScript-->


		<script src="<?php echo base_url(); ?>public/js/jquery-1.9.1.min.js"></script>

	    <script src="<?php echo base_url(); ?>public/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/modernizr.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.cookie.js"></script>
	
		<script src='<?php echo base_url(); ?>public/js/fullcalendar.min.js'></script>
	
		<script src='<?php echo base_url(); ?>public/js/jquery.dataTables.min.js'></script>

		<script src="<?php echo base_url(); ?>public/js/excanvas.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery.flot.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo base_url(); ?>public/js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.noty.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.raty.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/counter.js"></script>
	
		<script src="<?php echo base_url(); ?>public/js/retina.js"></script>

		<script src="<?php echo base_url(); ?>public/js/custom.js"></script>


	<!-- end: JavaScript-->
</body>
</html>
