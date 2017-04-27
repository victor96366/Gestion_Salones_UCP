<?php $this->session->sess_destroy();?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Prestammo de Llaves y Recursos Fisicos</title>
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
	<link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.ico">
	<!-- end: Favicon -->
	
		<style type="text/css">
			body { background-image: url(<?php echo base_url(); ?>public/img/img1.jpg); background-size: 100%;}
			.alert{display: none;}
		</style>
		<?php  $validacion = $this->session->flashdata('validacion');
				if($validacion==1){
					?>
						<style type="text/css">#alert1{display: block !important;}</style>
					<?php
				}else if($validacion==2){
					?>
						<style type="text/css">#alert2{display: block !important;}</style>
					<?php
				}
		?>
				
</head>

<body id="body">
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h2>Ingrese a su cuenta</h2>
					<form class="form-horizontal"  method="post" action="index.php/Login/consultar">
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="username" id="username" type="text" placeholder="Usuario"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="Conraseña"/>
							</div>
							<div class="clearfix"></div>
							<div id="alert1" class="alert alert-danger">
							  <strong>Error!</strong> Usuario y/o Contraseña Incorrectos.
							</div>
							<div id="alert2" class="alert alert-danger">
							  <strong>Error!</strong> Debe ingresar todos los datos.
							</div>
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Recordar Contraseña</label>

							<div id="ingresar" class="button-login">	
								<button type="submit" id="loguear"  class="btn btn-primary">Ingresar</button>
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
					<a href="#" class="registrar"><h3>Registrar Usuario</h3></a>	
					<a href="#" class="recuperarc"><h3>Recuperar Contraseña?</h3></a>	
				</div><!--/span-->
			</div><!--/row-->

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->

		<div class="modal hide fade" id="myModalRC">
			<div class="modal-body">
				<div class="row-fluid sortable">
				<div class="box span12">
				<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Recuperar Contraseña</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nombre de Usuario</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="carlosJ">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Correo</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="j@gmail.com">
								</div>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Cancelar</a>
				<a href="#" class="btn btn-primary">Guardar</a>
			</div>
		</div>



		<div class="modal hide fade" id="myModalR">
			<div class="modal-body">
				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Registro Usuario</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Codigo</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="1076367123">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nombre</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Juan Carlos">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Apellido</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Blando">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nombre Usuario</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Jblandon">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Correo</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="j@gmail.com">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Telefono</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="3145672345">
								</div>
							  </div>
							  <div class="control-group">
							  	<label class="control-label" for="focusedInput">Contraseña</label>
							  	<div class="controls">
									<input class="input-xlarge focused" name="password" id="password" type="password" placeholder="Conraseña"/>
								</div>
							</div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
			</div>	
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Cancelar</a>
				<a href="#" class="btn btn-primary">Guardar</a>
			</div>
		</div>
	    <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-content">
				<ul class="list-inline item-details">
					<li><a href="http://themifycloud.com">Admin templates</a></li>
					<li><a href="http://themescloud.org">Bootstrap themes</a></li>
				</ul>
			</div>
		</div>
	<!-- start: JavaScript-->
		<script src="<?php echo base_url(); ?>public/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery-migrate-1.0.0.min.js"></script>
	<script src="<?php echo base_url(); ?>public/js/slider.js"></script>	
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
