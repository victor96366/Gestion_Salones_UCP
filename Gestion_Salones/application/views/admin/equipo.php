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
		.ocultar,#supertabla{display: none ;}
		#id_equipo_fisico, #id_equipo_fisico_modal{display: none !important;}
		#equipo>ul{
			display: block;
		}
		#equipo{
			background: #578EBE;
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
			<a class="brand logo" href="index.html"><img src="http://www.ucp.edu.co/portal/wp-content/themes/UCatolica/images/logo.png"></img></a>
			<a class="brand titulo" href="index.html"><span>GESTION DE SALONES</span></a>
			
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
						<li id="equipo">
						<a class="dropmenu" href="#"><i class="icon-list-alt"></i><span class="hidden-tablet"> Equipos Fisicos</span></a>
						<ul>
							<li id="registroEF"><a class="submenu" href="#" ><i class="icon-file-alt"></i><span class="hidden-tablet"> Registrar</span></a></li>
							<li id="consultaEF"><a class="submenu" href="#"><i class="icon-search"></i><span class="hidden-tablet"> Consultar</span></a></li>
						</ul>	
						</li>
						<li>
						<a  href="usuarios"><i class="icon-align-justify"></i><span class="hidden-tablet"> Usuarios</span></a>	
						</li>
						<li>
						<a  href="reparacion"><i class="icon-wrench"></i><span class="hidden-tablet"> Reparación</span></a>
						</li>
						<li>
						<a href="aulas"><i class="icon-th"></i><span class="hidden-tablet"> Aulas</span></a>	
						</li>
						<li>
						<a  href="roles"><i class="icon-group"></i><span class="hidden-tablet"> Roles</span></a>
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
				<li><a href="#">Equipos Fisicos</a><i class="icon-angle-right"></i></li>
				<li class="texto"><a href="#">Registrar</a></li>
			</ul>

			<div class="row-fluid sortable" id="registroE">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Registrar Equipos Fisicos</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="insertar">
							<!-- en los form se le pone method="post" action="insertar" para poder decir que tenga en cuenta esa accion cuando algun boton la utilice-->
						  <fieldset>
							  <div class="control-group">
							  <label class="control-label" for="date01">Nombre equipo fisico</label>
							  <div class="controls">
								<input type="text" class="input" id="idd" name="nombre" placeholder="videobeam1">
								<!--  en los imput poner un atributo name, el cual y le pongo el nombre que quiera, ese atributo me indica el nombre de la funcion que debo utilizar en el ontroaldor para darle funcionailidad, ese name me captura los datos del formulario  -->
							  </div>
							</div> 
						<div class="control-group">
							<label class="control-label" for="selectsalonConsulta">Aula</label>
							<div class="controls">
							 <select id="selectsalonConsulta" data-rel="chosen" name="salon">
							<option value="---">---</option>
							<?php
							 	foreach ($listarsalon as $salon) {
							 	?><option value="<?php echo $salon['id_salon']; ?>"><?php echo     $salon['aula'].'-'.$salon['ubicacion']; ?></option><?php
							 	}
							 	?>
							 </select>
							</div>
						</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Fecha Instalación</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" placeholder="02/16/17" name="fecha_instalacion">
								<!--  en los imput poner un atributo name, el cual y le pongo el nombre que quiera, ese atributo me indica el nombre de la funcion que debo utilizar en el ontroaldor para darle funcionailidad, ese name me captura los datos del formulario  -->
							  </div>
							</div>       
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Observaciones</label>
							  <div class="controls">
								<textarea class="cleditor" rows="3" name="observacion"></textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Aceptar</button>
							  <!-- class="registrar btn btn-primary" en class van las clases que utiliza el boton, la clase insertar es la accion que se decalro 
							  en el form, entonces cuando den click en aceptar funcionaria la accion insertar, la cual se debe poner en el controlador-->
							</div>
						  </fieldset>
						</form>   
						
					</div>
				</div><!--/span-->

			</div><!--/row-->

			<div class="row-fluid sortable visible" id="consultaE">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white search"></i><span class="break"></span>Consultar Equipos</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="consultarequipos">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date02" >Fecha Instalación </label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date02" placeholder="02/16/17" name="fecha_instalacion">
								<!--  en los imput poner un atributo name, el cual y le pongo el nombre que quiera, ese atributo me indica el nombre de la funcion que debo utilizar en el ontroaldor para darle funcionailidad, ese name me captura los datos del formulario  -->
							  </div>
							</div>
							<div class="control-group">
							<label class="control-label" for="selectsalonConsulta2">Aula</label>
							<div class="controls">
							 <select id="selectsalonConsulta2" data-rel="chosen" name="salon">
							 	<option value="---">---</option>
							<?php
							 	foreach ($listarsalon as $salon) {
							 	?><option value="<?php echo $salon['id_salon']; ?>" "<?php echo $salon['id_salon']; ?>"><?php echo $salon['aula'].'-'.$salon['ubicacion']; ?></option><?php
							 	}
							 	?>
							 </select>
							</div>
						</div>  
							  
							<div class="form-actions">
							 <input type="submit" class="btn btn-primary" value="Consultar" name="consultarcondicion"></input>
							  <input type="submit" class="btn btn-primary" value="Consulta General" name="consultartodo"></input>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			<div class="row-fluid sortable visible" id="supertabla">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white tasks"></i><span class="break"></span>Equipos</h2>
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
						  <thead>
							  <tr>
								  <th>Video Beam</th>
								  <th>Ubicacion</th>
								  <th>Fecha Instalacion</th>
								  <th>Horas de uso</th>
								  <th>Observaciones</th>
								  <th>Acciones</th>
							  </tr>
						  </thead>   
						  <tbody>
							<?php
							  		foreach ($listarequipo as $equipo) {
							  			?>
							  				<tr>
							  					<td class="ocultar idequipo"><?php echo $equipo['id_equipos_fisicos']; ?></td>
							  					<td class="ocultar idsalon"><?php echo $equipo['id_salon']; ?></td>
							  					<td class="center nombre"><?php echo $equipo['nombre']; ?></td>
												<td class="center aula"><?php echo  $equipo['aula'].'-'.$equipo['ubicacion']; ?></td>
												<td class="center fecha_instalacion"><?php echo $equipo['fecha_instalacion']; ?></td>
												<td class="center horas_uso"><?php echo $equipo['horas_uso']; ?></td>
												<td class="center observaciones"><?php echo $equipo['observaciones']; ?></td>
													
												</td>
												<td class="center">
													<a class="borrarEquipo btn btn-danger" href="#">
													<i class="halflings-icon white trash"></i> 
													</a>
												</td>
											</tr>

							  			<?php
							  		}
							  ?>
						  </tbody>
					  </table> 
					  <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Anterior</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Siguiente</a></li>
						  </ul>
						</div>              
					</div>
				</div><!--/span-->

			</div><!--/row-->
	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	
	<!--Modificar equipo-->
		<div class="modal hide fade" id="myModalEditarEquipo">
			<form class="form-horizontal" method="post" action="editar_equipo">
			<div class="modal-body">
				<div class="row-fluid sortable">
				<div class="box span12">
				<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Modificar Equipo</h2>
					</div>
					<div class="box-content">

						  <fieldset>
						 	  <div class="control-group">
								<label class="control-label" for="focusedInput">Nombre</label>
								<input style="display: none;" class="id_equipo_fisico id_equipo_fisico_modal" name="id_equipo_fisico_modal" type="text" >
								<div class="controls">
								  	<input class="input-xlarge focused" id="nombre" type="text" name="nombre">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Aula</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="aula" type="text" name="aula">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Fecha instalaciom</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="fecha_instalacion" type="text" name="fecha_instalacion">
								</div>
							  </div>
							  <div class="control-group">
							  	<label class="control-label" for="focusedInput">Horas de uso</label>
							  	<div class="controls">
									<input class="input-xlarge focused" id="horas_uso" type="text" name="horas_uso">
								</div>
							</div>
							<div class="control-group">
							  	<label class="control-label" for="focusedInput">Observaciones</label>
							  	<div class="controls">
									<input class="input-xlarge focused" id="observaciones" type="text" name="observaciones">
								</div>
							</div> 
							</fieldset>
						
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Cancelar</a>
				<button type="submit" class="btn btn-warning">Editar</button>
			</div>
			</form> 
		</div>	

	<!--Eliminar Equipo-->
		<div class="modal hide fade" id="myModalEliminarEquipo">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Eliminar Equipo</h3>
			</div>
		<form method="post" action="eliminar">
				<div class="modal-body">
					<input style="display: none;" id="id_equipo_fisico_modal"  name="id_equipo_fisico_modal" type="text">
				<!--	<input style="display: none;" class="id_salon_modal"  name="id_salon_modal" type="text">  -->
					<p id="textBorrar"></p>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn" data-dismiss="modal">Cancelar</a>
					<button type="submit" class="btn btn-danger">Aceptar</button>
				</div>
			</form>
		</div>	

<!-- modal para borar los datos-->
	<div class="modal fade" id="myModal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div id="modal_header" class="modal-header btn-danger">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	        <h4 class="modal-title">titulo</h4>
	      </div>
	      <div class="modal-body" >
	        <p id="modal_body">mensaje</p>
	      </div>
	      <div class="modal-footer">
	        <a href="#" class="btn" data-dismiss="modal">Aceptar</a>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2017</span>
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
	


	<?php  $validacion = $this->session->flashdata('carga_usuario');
		if($validacion=='true'){
			?>
				<script type="text/javascript">
					$(".texto>a").text("Consultar ");
					$("#registroE").css("display","none");
					$("#consultaE").css("display","block");
					$("#supertabla").css("display","block");
				</script>
			<?php
		}
		$validacion_formulario = $this->session->flashdata('formulario');
		?>

<?php
		if($validacion_formulario=='false'){
			?>
				<script type="text/javascript">
				  $('.modal-title').text("Información");	
				  $('#modal_body').text("Debe de llenar todos los campos solicitados!");	
				  $('#myModal').modal('show');
				</script>
			<?php
		}else if($validacion_formulario=='true'){
			?>
				<script type="text/javascript">
				  $('#modal_header').removeClass('btn-danger');
				  $('#modal_header').addClass('btn-primary');
				  $('.modal-title').text("Información");	
				  $('#modal_body').text("Registro exitoso!");	
				  $('#myModal').modal('show');
				</script>
			<?php
		}else if($validacion_formulario=='1'){
			?>
				<script type="text/javascript">
				  $('.modal-title').text("Información");	
				  $('#modal_body').text("El equipo ya esta registrado!");	
				  $('#myModal').modal('show');
				</script>
			<?php
		}
	?>	


</body>
</html>