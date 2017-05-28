<?php if(!$this->session->userdata('nombre_usuario')){
		redirect(base_url());
	}else{
		/*echo var_dump($listarPermisos);
		$insertar='';$consultar='';$editar='';$eliminar='';
		foreach ($listarPermisos as $permisos) {
			echo $permisos['nombre'];
			if($permisos['nombre']=='insertar'){
				echo 'entro a insertar';
				$insertar='1';
			}
			if($permisos['nombre']=='consultar'){
				echo 'entro a consultar';
				$consultar='1';
			}
			if($permisos['nombre']=='editar'){
				$editar='1';
			}
			if($permisos['nombre']=='eliminar'){
				$eliminar='1';
			}
		}*/	
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
	<style type="text/css">
		.id_rol { display: none; }
		.id_rol_modal { display: none; }
		#tablaRoles, .ocultar{display: none;}

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
						<li>
						<a  href="equiposFisicos"><i class="icon-list-alt"></i><span class="hidden-tablet"> Equipos Fisicos</span></a>	
						</li>
						<li>
						<a  href="usuarios"><i class="icon-align-justify"></i><span class="hidden-tablet"> Usuarios</span></a>
						</li>
						<li>
						<a  href="reparacion"><i class="icon-wrench"></i><span class="hidden-tablet"> Reparación</span></a>
						</li>
						<li id="aulas">
						<a  href="aulas"><i class="icon-th"></i><span class="hidden-tablet"> Aulas</span></a>
						</li>
						<li class="active">
						<a  href="#"><i class="icon-group"></i><span class="hidden-tablet"> Roles</span></a>
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
					<a href="#">Roles</a>
				</li>
			</ul>
			

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Registrar Rol</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="registrar">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nombre Rol</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="nombre_rol" name="nombre_rol" type="text" placeholder="Secretaria">
								</div>
							</div>
							 <div class="control-group">
								<label class="control-label" for="selectError1">Permisos</label>
								<div class="controls">
								  <select id="selectError1" name="permisos[]" multiple data-rel="chosen">
									<option value="1">Insertar</option>
									<option value="2" selected>Consultar</option>
									<option value="3">Modificar</option>
									<option value="4">Eliminar</option>
								  </select>
								</div>
							  </div>
							 <div class="form-actions">
				 				<input type="submit" name="registrar" class="btn btn-primary" value="Registrar"></input>
				 				<input type="submit" name="consultar" class="btn btn-primary" value="Consultar Roles"></input>
							  </div>
							</fieldset>
						  </form>
						  	
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			<div class="row-fluid sortable" id="tablaRoles">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white align-justify"></i><span class="break"></span>Roles</h2>
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
									  <th>Rol</th>
									  <th>Estado</th>
									  <th>Permisos</th>
									  <th>Opciones</th>                                            
								  </tr>
							  </thead>   
							  <tbody>
									<?php
											$nombre="1";
									        foreach ($listarRoles as $valor) {
									        	if($valor['nombre1']!=$nombre && $nombre!="1"){
										            ?>
											          	</td>
											            <td class="center">
															<a class="editarRol btn btn-info" href="#">
																<i class="halflings-icon white edit"></i>                                            
															</a>
															<a class="borrarRol btn btn-danger" href="#">
																<i class="halflings-icon white trash"></i> 
															</a>
														</td>
														</tr> 
										            <?php
									        	}
									            if($valor['nombre1']!=$nombre){
									               ?><tr><td class="id_rol"><?php echo $valor['id'];?></td><td class="rol"><?php echo $valor['nombre1'];?></td>
									               <td class="center estado">
														<?php 
															if($valor['estado']=='1'){
																?>
																	<span class="label label-success">Activo</span>
																<?php
															}else{
																?>
																	<span class="label label-important">Inactivo</span>
																<?php
															} 
														?>
													</td>
									               <td class="permisos"><?php
									            }
									            echo  $valor['nombre2'].","; 
									       		$nombre=$valor['nombre1'];
									        }
									    ?>
											
										</td>
								            <td class="center">
												<a class="editarRol btn btn-info" href="#">
													<i class="halflings-icon white edit"></i>                                            
												</a>
												<a class="borrarRol btn btn-danger" href="#">
													<i class="halflings-icon white trash"></i> 
												</a>
											</td></tr> 
							  </tbody>
						 </table>  
						 <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Anterior</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
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
		<!--Modificar Roles-->	
		<div class="modal hide fade" id="myModalEditarRol">
			<form class="form-horizontal" method="post" action="editarPermisos">
			<div class="modal-body">
				<div class="row-fluid sortable">
				<div class="box span12">
				<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Modificar Rol</h2>
					</div>
					<div class="box-content">
						  <fieldset>
							  <div class="control-group">
									<label class="control-label" for="focusedInput">Rol</label>
									<input style="display: none;" class="id_rol id_rol_modal" name="id_rol_modal" type="text" >
									<div class="controls">
									  <input class="input-xlarge disabled" id="rol_modal" type="text" placeholder="Secretaria" disabled="">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Permisos Asignados</label>
									<div class="controls">
									  <input class="input-xlarge disabled" id="permisos_modal" type="text" placeholder="Insertar,Consultar,Modificar,Eliminar" disabled="">
									</div>
								</div>
							   <div class="control-group">
								<label class="control-label" for="selectPagregar">Agregar Permisos</label>
								<div class="controls">
								  <select id="selectPagregar"  name="agregar_permisos[]" multiple data-rel="chosen">
									<option value="1">Insertar</option>
									<option value="2" >Consultar</option>
									<option value="3">Modificar</option>
									<option value="4">Eliminar</option>
								  </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="selectEagregar">Eliminar Permisos</label>
								<div class="controls">
								  <select id="selectEagregar" name="eliminar_permisos[]" multiple data-rel="chosen">
									<option value="1">Insertar</option>
									<option value="2" >Consultar</option>
									<option value="3">Modificar</option>
									<option value="4">Eliminar</option>
								  </select>
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
		<!--Eliminar Aula-->
		<div class="modal hide fade" id="myModalEliminarRol">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">Ã</button>
				<h3>Eliminar Rol</h3>
			</div>
			<form method="post" action="eliminar">
				<div class="modal-body">
					<input style="display: none;" class="id_rol_modal"  name="id_rol_modal" type="text">
					<p id="textBorrar"></p>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn" data-dismiss="modal">Cancelar</a>
					<button type="submit" class="btn btn-danger">Aceptar</button>
				</div>
			</form>
		</div>	
		<div class="modal fade" id="myModal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div id="modal_header" class="modal-header btn-danger">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
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
	<?php  $validacion = $this->session->flashdata('carga');
		if($validacion=='true'){
			?>
				<style type="text/css">#tablaRoles{display: block;}</style>
			<?php
		}	
		$validacion_formulario = $this->session->flashdata('formulario');
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
				  $('.modal-title').text("InformaciÃ³n");	
				  $('#modal_body').text("Registro exitoso!");	
				  $('#myModal').modal('show');
				</script>
			<?php
		}
		$validacion_formulario = $this->session->flashdata('formulario_existe');
		if($validacion_formulario=='false'){
			?>
				<script type="text/javascript">
				  $('.modal-title').text("Información");	
				  $('#modal_body').text("El Rol que desea insertar ya esta registrado!");	
				  $('#myModal').modal('show');
				</script>
			<?php
		}
	?>
</body>
</html>