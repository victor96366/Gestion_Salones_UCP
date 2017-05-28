<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Reparacion extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    public function cabecera() {
      $this->load->view('admin/cabecera');
    }
    public function index() {
        $this->load->view('index');
    }
    
    public function reparacion() {
        $data['listarsalon']= $this->Reparaciones->consultarid_salon();
        $data['listarreparacion']= $this->Reparaciones->listartodo();
        $this->load->view('admin/reparacion',$data);
    }
    public function insertar() {
        if ( ! $this->input->post('responsable_reparacion') OR ! $this->input->post('fecha_reparacion') OR ! $this->input->post('empresa_reparacion') OR ! $this->input->post('vida_util_reparacion') OR ! $this->input->post('reparacion_realizada')){ 
                $this->session->set_flashdata('formulario','false');                    
                redirect('index.php/Reparacion/reparacion');    
            }else{
                $responsable_reparacion= $this->input->post('responsable_reparacion');
                $fecha_reparacion= $this->input->post('fecha_reparacion');
                $empresa_reparacion= $this->input->post('empresa_reparacion');
                $vida_util_reparacion= $this->input->post('vida_util_reparacion');
                $reparacion_realizada= $this->input->post('reparacion_realizada');
                $salon= $this->input->post('salon');
                $dat = array('responsable_reparacion' => $responsable_reparacion,'fecha_reparacion' => $fecha_reparacion,'empresa_reparacion' => $empresa_reparacion,'vida_util_reparacion' => $vida_util_reparacion, 'reparacion_realizada' => $reparacion_realizada);
                $this->Reparaciones->insertar($dat);
                
                //con esto me traigo el id del equipo fisico al que se le hizo la reparacion
                $dat3= $this->Reparaciones->consultarid_equipo($salon);
                //con esto me traigo el id de la reparacion que se acaba de insertar
                $dat5= $this->Reparaciones->consultar_id_reparacion($responsable_reparacion,$fecha_reparacion,$empresa_reparacion,$vida_util_reparacion,$reparacion_realizada);
                
                $dat4 = array('id_equipos_fisicos' => $dat3,'id_reparacion' => $dat5);
                $this->Reparaciones->insertar_reparacion_has_equipo($dat4);   
                $this->session->set_flashdata('formulario','true');          
                redirect('index.php/Reparacion/reparacion');
            }
    }
    public function consultarequipos(){
        $data['listarsalon']= $this->Reparaciones->consultarid_salon();
        if($this->input->post('consultartodo')){
            $data['listarreparacion']= $this->Reparaciones->listartodo();
            $this->session->set_flashdata('reparacionset', 'true');
            $this->load->view('admin/reparacion', $data); 
        }else if($this->input->post('consultarcondicion')){   
            $fecha_reparacion=$this->input->post('fecha_reparacion');
            $salon=$this->input->post('salon');
           // echo $salon;
           // echo $fecha_reparacion;
            if($salon != "---" ){
                $data['listarreparacion']= $this->Reparaciones->listar_condicion_salon($salon);
                $this->session->set_flashdata('reparacionset', 'true');
                $this->load->view('admin/reparacion', $data); 
                //print_r($data);
            }else if($salon == "---"){
                $data['listarreparacion']= $this->Reparaciones->listar_condicion_fecha($fecha_reparacion);
                $this->session->set_flashdata('reparacionset', 'true');
                $this->load->view('admin/reparacion', $data); 
                //print_r($data); 
            }
             
        } 
    } 
     public function editar_reparacion(){
        if ( !$this->input->post('nombre_responsable') AND !$this->input->post('nombre_empresa') AND !$this->input->post('vida_util')){
            $this->session->set_flashdata('formulario', 'false');
            redirect('index.php/Reparacion/reparacion');  
        }else{
            $id_reparacion=$this->input->post('id_reparacion');
            $nombre_responsable=$this->input->post('nombre_responsable');
            $empresa_responsable=$this->input->post('nombre_empresa');
            $vida_util=$this->input->post('vida_util');
            $this->Reparaciones->modificar_reparacion($id_reparacion,$nombre_responsable,$empresa_responsable,$vida_util);
            $this->session->set_flashdata('formulario','true');
            $this->session->set_flashdata('reparacionset', 'true');
            redirect('index.php/Reparacion/reparacion'); 
        }
    }
    // Cargar Menu
    public function prestamo() {
        redirect('index.php/Prestamo/prestamo');
    }
    public function equiposFisicos() {
        redirect('index.php/Equipos/equiposFisicos');
    }
    public function usuarios() {
        redirect('index.php/Usuarios/usuarios');
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