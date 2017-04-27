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
        $this->session->set_flashdata('carga', 'true');
        $this->load->view('admin/reparacion',$data);
    }


     public function insertar() {
        if ( ! $this->input->post('responsable_reparacion') OR ! $this->input->post('fecha_reparacion') OR ! $this->input->post('empresa_reparacion') OR ! $this->input->post('vida_util_reparacion') OR ! $this->input->post('reparacion_realizada'))
            {
            redirect('index.php/Reparacion/reparacion');    
            }

        else{
            $responsable_reparacion= $this->input->post('responsable_reparacion');
            $fecha_reparacion= $this->input->post('fecha_reparacion');
            $empresa_reparacion= $this->input->post('empresa_reparacion');
            $vida_util_reparacion= $this->input->post('vida_util_reparacion');
            $reparacion_realizada= $this->input->post('reparacion_realizada');

            $dat = array('responsable_reparacion' => $responsable_reparacion,'fecha_reparacion' => $fecha_reparacion,'empresa_reparacion' => $empresa_reparacion,'vida_util_reparacion' => $vida_util_reparacion, 'reparacion_realizada' => $reparacion_realizada);
            $this->Reparaciones->insertar($dat);
            }

            redirect('index.php/Reparacion/reparacion');
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