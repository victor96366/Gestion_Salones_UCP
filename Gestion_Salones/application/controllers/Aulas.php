<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Aulas extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    public function cabecera() {
      $this->load->view('admin/cabecera');
    }
    public function index() {
        $this->load->view('index');
    }
    public function aulas() {
        $data['listaraula']= $this->Aula->listartodo();
        $this->load->view('admin/aulas');
    }
    // Cargar Menu
    public function prestamo() {
        redirect('index.php/Prestamo/prestamo');
    }
    public function insertar() {
       if ( ! $this->input->post('ubicacion') OR ! $this->input->post('aula') OR $this->input->post('ubicacion')=="---")
            {
                $this->session->set_flashdata('formulario', 'false');    
                redirect('index.php/Aulas/aulas');    
            }else{
                $ubicacion= $this->input->post('ubicacion');
                $aula= $this->input->post('aula');
                $equipo_fisico=0;
                $dat2= $this->Aula->existe_salon($ubicacion,$aula);
                // print_r ($dat2);
                if($dat2 == TRUE){
                // echo "ESE DATO YA EXISTE--";
                    $this->session->set_flashdata('formulario', '1');
                    redirect('index.php/Aulas/aulas');
                }else{
                    //echo "ESE DATO NO EXISTE--";
                    $dat = array('aula' => $aula,'ubicacion' => $ubicacion, 'equipo_fisico' => $equipo_fisico);
                    $this->Aula->insertar($dat);
                    //echo "YA INSERTE-";
                    $this->session->set_flashdata('formulario', 'true');
                    redirect('index.php/Aulas/aulas');
                }
            }
    }
     public function consultar_aulas(){
        if($this->input->post('consultartodo')){
            $data['listaraula']= $this->Aula->listartodo();
            $this->session->set_flashdata('cargarAulas', 'true');
            $this->load->view('admin/aulas', $data); 
        }else if($this->input->post('consultarcondicion')){
            $aula=$this->input->post('aula2');
            $ubicacion=$this->input->post('ubicacion2');
            
            
            if($aula != "" AND $ubicacion != "---" ){
                $data['listaraula']= $this->Aula->listar_condicion_aula_ubicacion($aula,$ubicacion);
                $this->session->set_flashdata('cargarAulas', 'true');
                $this->load->view('admin/aulas', $data);   
            }
            if($ubicacion != "---" AND  $aula == ""){
                $data['listaraula']= $this->Aula->listar_condicion_ubicacion($ubicacion);
                $this->session->set_flashdata('cargarAulas', 'true');
                $this->load->view('admin/aulas', $data);
            } 
            if($ubicacion == "---"){
                $data['listaraula']= $this->Aula->listar_condicion_aula($aula);
                $this->session->set_flashdata('cargarAulas', 'true');
                $this->load->view('admin/aulas', $data); 
            }            
        } 
    }
    public function equiposFisicos() {
        redirect('index.php/Equipos/equiposFisicos');
    }
    public function usuarios() {
        redirect('index.php/Usuarios/usuarios');
    }
    public function reparacion() {
        redirect('index.php/Reparacion/reparacion');
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