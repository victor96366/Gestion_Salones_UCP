<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
    }
    public function index() {
		redirect('Login/home');
	}
	public function cabecera() {
	  $this->load->view('admin/cabecera');
    }
    public function home() {
	 redirect('index.php/Inicio/inicio');
    }
    public function login() {
	  $this->load->view('index');
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

    public function consultar() {
    	$usuario=  $this->input->post('username');
		$contrasena=  $this->input->post('password');
		if ($usuario!=null and $contrasena!=null) {
			$respuesta['infousers']=$this->Ingresar->existe($usuario,$contrasena);
			if(empty($respuesta['infousers'])){
                $this->session->set_flashdata('validacion', '1');
               redirect(base_url());
			}else{
                $this->session->set_userdata($respuesta['infousers']['0']);                
                redirect('index.php/Login/home');
			}
		}else{
            $this->session->set_flashdata('validacion', '2');
			redirect(base_url());
		}
	}
}
