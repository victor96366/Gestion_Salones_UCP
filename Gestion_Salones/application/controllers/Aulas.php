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
		$this->load->view('admin/aulas');
    }
    // Cargar Menu
    public function prestamo() {
    	redirect('index.php/Prestamo/prestamo');
    }

    public function insertar() {
       if ( ! $this->input->post('ubicacion') OR ! $this->input->post('aula') OR $this->input->post('ubicacion')=="---")
            {
            redirect('index.php/Aulas/aulas');    
             }
            else{
            $ubicacion= $this->input->post('ubicacion');
            $aula= $this->input->post('aula');
            $equipo_fisico=0;

            $dat2= $this->Aula->existe_salon($ubicacion,$aula);
            // print_r ($dat2);
                
          
                if($dat2 == TRUE){
                // echo "ESE DATO YA EXISTE--";
                redirect('index.php/Aulas/aulas');
                }
                else{
                //echo "ESE DATO NO EXISTE--";
                $dat = array('aula' => $aula,'ubicacion' => $ubicacion, 'equipo_fisico' => $equipo_fisico);
                $this->Aula->insertar($dat);
              //echo "YA INSERTE-";
              }
            }
            redirect('index.php/Aulas/aulas');
            
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