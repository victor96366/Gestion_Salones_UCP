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
       if ( ! $this->input->post('nombre') OR $this->input->post('salon') == "---"){
            $this->session->set_flashdata('formulario','false');                
            redirect('index.php/Equipos/equiposFisicos');
        }else{
            $nombre=$this->input->post('nombre');
            $en=$this->Equipo_fisico->existe_nombre($nombre);
            if($en == TRUE){
                $this->session->set_flashdata('formulario','1');                
                redirect('index.php/Equipos/equiposFisicos');
                }else if($en == FALSE){
                    $salon= $this->input->post('salon');
                    $observacion=$this->input->post('observacion');
                    $fecha_instalacion=$this->input->post('fecha_instalacion');
                   
                    $dat = array('nombre' => $nombre,'fecha_instalacion' => $fecha_instalacion, 'observaciones' => $observacion);
                    $si=1;
                    $this->Equipo_fisico->insertar($dat); 
                    // para insertar un 1 es decir SI en el campo de equipo fisico del salon seleccionado 
                    $this->Aula->tiene_equipo_fisico($si, $salon); 
                       
                    //con esto me traigo el id del equipo fisico que se acabo de insertar           
                    $dat3= $this->Equipo_fisico->consultarid_equipo();
                    $dat4 = array('id_equipo_fisico' => $dat3,'id_salon' => $salon);
                    $this->Equipo_fisico->insertarsalon_has_equipo($dat4);   
                    $this->session->set_flashdata('formulario', 'true');  
                    redirect('index.php/Equipos/equiposFisicos');       
                }
        }
    }
   
    public function consultarequipos(){
        $data['listarsalon']= $this->Equipo_fisico->consultarid_salon();
        
        if($this->input->post('consultartodo')){
            
            $data['listarequipo']= $this->Equipo_fisico->listartodo();
            $this->session->set_flashdata('carga_usuario', 'true');
            $this->load->view('admin/equipo', $data); 
        }
      
        else if($this->input->post('consultarcondicion')){
            $fecha_instalacion=$this->input->post('fecha_instalacion');
            $salon=$this->input->post('salon');
            
            if($salon != "---" ){
            $data['listarequipo']= $this->Equipo_fisico->listar_condicion_salon($salon);
            $this->session->set_flashdata('carga_usuario', 'true');
            $this->load->view('admin/equipo', $data); 
            } 
            else if($salon == "---"){
            $data['listarequipo']= $this->Equipo_fisico->listar_condicion_fecha($fecha_instalacion);
            $this->session->set_flashdata('carga_usuario', 'true');
            $this->load->view('admin/equipo', $data);  
             
            }
             
        } 
    }
    public function eliminar(){
        $id_equipo_fisico = $this->input->post('id_equipo_fisico_modal');
        echo "METODO ELIMINAR";
        echo "$id_equipo_fisico";
        $this->Equipo_fisico->eliminar_equipo($id_equipo_fisico);
        $this->Equipo_fisico->eliminar_equipo_has_salon($id_equipo_fisico);
        $this->session->set_flashdata('formulario', 'true');
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
}