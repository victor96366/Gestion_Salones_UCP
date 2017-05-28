<?php if(!$this->session->userdata('nombre_usuario')){
		redirect(base_url());
	}
?>
<ul class="nav pull-right">
	<!-- start: User Dropdown -->
		<li class="dropdown hidden-phone">
		<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="icon-bell"></i>
			<span class="badge red">
			3 </span>
		</a>
		<ul class="dropdown-menu notifications">
			<li class="dropdown-menu-title">
					<span>Notificaciones</span>
				<a href="#refresh"><i class="icon-repeat"></i></a>
			</li>	
        	<li>
                <a href="#">
					<span class="icon blue"><i class="icon-user"></i></span>
					<span class="message">Solicitud: Aula 313K</span>
					<span class="time">1 min</span> 
                </a>
            </li>
			<li>
                <a href="#">
					<span class="icon blue"><i class="icon-user"></i></span>
					<span class="message">Solicitud: Aula 301K</span>
					<span class="time">2 min</span> 
                </a>
            </li>
			<li>
                <a href="#">
					<span class="icon blue"><i class="icon-user"></i></span>
					<span class="message">Solicitud: Aula 301K</span>
					<span class="time">3 min</span> 
                </a>
            </li>
            <li class="dropdown-menu-sub-footer">
        		<a>Ver todas las notificaciones</a>
			</li>	
		</ul>
	</li>
	<li class="dropdown">
		<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="halflings-icon white user"></i> <?php echo   $this->session->userdata('nombre_usuario');?>
			<span class="caret"></span>
		</a>
		<ul class="dropdown-menu">
			<li class="dropdown-menu-title">
					<span>OPCIONES</span>
			</li>
			<li><a href="<?php echo base_url(); ?>"><i class="halflings-icon off"></i> Cerrar Sesión</a></li>
		</ul>
	</li>
	<!-- end: User Dropdown -->
</ul>