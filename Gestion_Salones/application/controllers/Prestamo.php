<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/Bogota');
class Prestamo extends CI_Controller {

	function __construct() {
        parent::__construct();
    }
    public function cabecera() {
      $this->load->view('admin/cabecera');
    }
    public function index() {
		$this->load->view('index');
    }
    public function prestamo() {
        $data['salones'] = $this->Prestamos->listarSalones();
		$this->load->view('admin/prestamo',$data);
    }
    // Cargar Menu
    public function equiposFisicos() {
    	redirect('index.php/Equipos/equiposFisicos');
    }
    public function usuarios() {
    	redirect('index.php/Usuarios/usuarios');
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
    public function consultarHorario() {
        if ( ! $this->input->post('cedula')){
            $this->session->set_flashdata('formulario','false');
            redirect('index.php/Prestamo/prestamo');    
        }else{
            $this->session->set_flashdata('formulario','true');
            $cedula= $this->input->post('cedula');
            $data['horario'] = $this->Prestamos->consultar_Horario($cedula);
            if(empty($data['horario'])){
               $this->session->set_flashdata('formulario','1'); 
               redirect('index.php/Prestamo/prestamo'); 
            }else{
                $this->load->view('admin/prestamo', $data);
            }
        }
    }
    public function registrar_prestamo(){
            $cedula = $this->input->post('cedula');
            $id_salon = $this->input->post('id_salon');
            $hora_inicio = date('H:i:s');
            $fecha =date('y-m-d');
            $datos = array('hora_entrega' => $hora_inicio,'hora_recibe' => '00:00:00','cedula' => $cedula,'id_salon' => $id_salon, 'fecha_prestamo' => $fecha,'observaciones' => 'N/A');
            $datos1 = array('disponibilidad' => '1');
            //insertar usuario
            $this->Prestamos->insertar($datos);
            //modificar estado del salon
            $this->Prestamos->editar_estado_salon($id_salon,$datos1);
            $this->session->set_flashdata('formulario','2');
            redirect('index.php/Prestamo/prestamo');
        
    }
    public function consultarPrestamo() {
        if ( !$this->input->post('cedula')){
            $this->session->set_flashdata('formulario','false');
            redirect('index.php/Prestamo/prestamo');    
        }else{
            $this->session->set_flashdata('formulario','3');
            $cedula= $this->input->post('cedula');
            $data['prestamo'] = $this->Prestamos->consultar_prestamo($cedula);
            if(empty($data['prestamo'])){
               $this->session->set_flashdata('formulario','1'); 
               redirect('index.php/Prestamo/prestamo'); 
            }else{
                $this->load->view('admin/prestamo', $data);
            }
        }
    }
    public function registrar_prestamofin(){
            $id_prestamo = $this->input->post('id_prestamo');
            $id_salon = $this->input->post('id_salon');
            $observacion = $this->input->post('observacion');
            $hora_fin = date('H:i:s');
            $datos = array('hora_recibe' => $hora_fin,'observaciones' => $observacion);
            $this->Prestamos->editar($id_prestamo,$datos);
            $datos1 = array('disponibilidad' => '0');
            $this->Prestamos->editar_estado_salon($id_salon,$datos1);
            $this->session->set_flashdata('formulario','2');
            redirect('index.php/Prestamo/prestamo');
        
    }
    public function consultar(){
        if($this->input->post('listar')){
            $data['listarPrestamo']= $this->Prestamos->consulta_general();
            $data['salones'] = $this->Prestamos->listarSalones();
            $this->session->set_flashdata('carga_prestamo', '1');
            $this->load->view('admin/prestamo', $data);

        }else if($this->input->post('listar_condicion')){
            $cedula=$this->input->post('cedula');
            $fecha_prestamo=$this->input->post('fecha_prestamo');
            $id_salon=$this->input->post('id_salon');
            $data['listarPrestamo']= $this->Prestamos->consultar_condicion($cedula,$fecha_prestamo,$id_salon);
            $data['salones'] = $this->Prestamos->listarSalones();
            $this->session->set_flashdata('carga_prestamo', '1');
            $this->load->view('admin/prestamo', $data);
        }
    }
}