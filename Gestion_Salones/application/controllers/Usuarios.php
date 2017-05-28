<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	function __construct() {
        parent::__construct();
    }
    public function cabecera() {
      $this->load->view('admin/cabecera');
    }
    public function index() {
		$this->load->view('index');
    }
    public function usuarios() {
        $data['listRoles'] = $this->Rol->consultar_roles();
		$this->load->view('admin/usuario', $data);
    }
    // Cargar Menu
    public function prestamo() {
    	redirect('index.php/Prestamo/prestamo');
    }
    public function equiposFisicos() {
    	redirect('index.php/Equipos/equiposFisicos');
    }
    public function reparacion() {
    	redirect('index.php/Reparacion/reparacion');
    }
    public function aulas() {
    	redirect('index.php/Aulas/aulas');
    }
    public function roles() {
    	redirect('index.php/Roles/roles');
    }
    public function inicio() {
    	redirect('index.php/Inicio/inicio');
    }
    public function contacto() {
    	redirect('index.php/Inicio/contacto');
    }
    public function ayuda() {
    	redirect('index.php/Inicio/ayuda');
    }
    public function registrar_usuario(){
        if (!$this->input->post('codigo') or !$this->input->post('nombre') or !$this->input->post('apellido')
            or !$this->input->post('usuario') or !$this->input->post('correo') or !$this->input->post('contrasena') or !$this->input->post('telefono') or !$this->input->post('selectRol'))
        {
            $this->session->set_flashdata('formulario','false');
            redirect('index.php/Usuarios/usuarios');
        }else{
            $codigo = $this->input->post('codigo');
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $usuario = $this->input->post('usuario');
            $correo = $this->input->post('correo');
            $contrasena = md5($this->input->post('contrasena'));
            $telefono = $this->input->post('telefono');
            $rol = $this->input->post('selectRol');
            $fecha_creacion=date('y-m-d');
            $datos = array('cedula' => $codigo,'nombre' => $nombre,'apellido' => $apellido,'correo' => $correo, 'contrasena' => $contrasena, 'fecha_creacion'=>$fecha_creacion, 'nombre_usuario' => $usuario,'telefono' => $telefono,'ultimo_acceso'=> $fecha_creacion, 'id_rol'=>$rol);
            //insertar usuario
            $this->Usuario->insertar($datos);
            $this->session->set_flashdata('formulario','true');
            redirect('index.php/Usuarios/usuarios');
        }
    }
    public function data(){
        $data['listarUsuarios']= $this->Usuario->listar();
        $data['listRoles'] = $this->Rol->consultar_roles();
        $this->session->set_flashdata('carga_usuario', 'true');
        $this->load->view('admin/usuario', $data);
    }
    public function consultar(){
        if($this->input->post('listar')){
            $data['listarUsuarios']= $this->Usuario->listar();
            $data['listRoles'] = $this->Rol->consultar_roles();
            $this->session->set_flashdata('carga_usuario', 'true');
            $this->load->view('admin/usuario', $data);

        }else if($this->input->post('listar_condicion')){
            $cedula=$this->input->post('cedula');
            $estado=$this->input->post('estado');
            $rol=$this->input->post('nombre_rol');
            $data['listarUsuarios']= $this->Usuario->listar_condicion($cedula,$rol,$estado);
            $data['listRoles'] = $this->Rol->consultar_roles();
            $this->session->set_flashdata('carga_usuario', 'true');
            $this->load->view('admin/usuario', $data);
        }
    }
    public function editar_usuario(){
        if (!$this->input->post('correo') or !$this->input->post('password') or !$this->input->post('telefono') or !$this->input->post('selectRolModal'))
        {
            $this->session->set_flashdata('formulario','false');
            redirect('index.php/Usuarios/data');
        }else{
            $cedula = $this->input->post('cedula');
            $correo = $this->input->post('correo');
            $contrasena = md5($this->input->post('password'));
            $telefono = $this->input->post('telefono');
            $rol = $this->input->post('selectRolModal');
            $estado = $this->input->post('selectEstadoModal');
            $datos = array('correo' => $correo, 'contrasena' => $contrasena,'telefono' => $telefono,'id_rol'=>$rol,'estado'=>$estado);
            //insertar usuario
            $this->Usuario->editar($cedula,$datos);
            $this->session->set_flashdata('formulario','true');
            $this->session->set_flashdata('carga_usuario', 'true');
            redirect('index.php/Usuarios/data');
        }
    }
}