<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Equipos extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    public function cabecera() {
      $this->load->view('admin/cabecera');
    }
    public function index() {
        $this->load->view('index');
    }
    public function equiposFisicos() {
        $data['listarsalon']= $this->Equipo_fisico->consultarid_salon();
        $this->session->set_flashdata('carga', 'true');
        $this->load->view('admin/equipo',$data);
     //   print_r ($data);
    }
    // Cargar Menu
    public function prestamo() {
        redirect('index.php/Prestamo/prestamo');
    }
    public function usuarios() {
        redirect('index.php/Usuarios/usuarios');
    }
    
    public function insertar() {
       if ( ! $this->input->post('nombre'))
            {
            redirect('index.php/Equipos/equiposFisicos');
             }
            else{
            $salon= $this->input->post('salon');
            
            $nombre=$this->input->post('nombre');
            $observacion=$this->input->post('observacion');
            $fecha_instalacion=$this->input->post('fecha_instalacion');
            echo ($observacion);
            $dat = array('nombre' => $nombre,'fecha_instalacion' => $fecha_instalacion, 'observaciones' => $observacion);
            $this->Equipo_fisico->insertar($dat); 

            $dat3= $this->Equipo_fisico->consultarid_equipo($nombre);

            $dat4 = array('id_equipo_fisico' => $dat3,'id_salon' => $salon);
            $this->Equipo_fisico->insertarsalon_has_equipo($dat4);            
           
            }
            
           redirect('index.php/Equipos/equiposFisicos');
    }
   
    public function consultarequipos(){
        if($this->input->post('consultartodo')){
            $data['listarequipo']= $this->Equipo_fisico->listartodo();
            $this->session->set_flashdata('carga_usuario', 'true');
           $this->load->view('admin/equipo', $data); }
      //     print_r ($data); 
      /*  }else if($this->input->post('consultarcondicion')){
            $cedula=$this->input->post('cedula');
            $estado=$this->input->post('estado');
            $rol=$this->input->post('nombre_rol');
            $data['listarUsuarios']= $this->Usuario->listar_condicion($cedula,$rol,$estado);
            $data['listRoles'] = $this->Rol->consultar_roles();
            $this->session->set_flashdata('carga_usuario', 'true');
            $this->load->view('admin/usuario', $data);
        } */
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

}
