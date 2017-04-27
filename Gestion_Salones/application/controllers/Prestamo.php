<?php defined('BASEPATH') OR exit('No direct script access allowed');

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
		$this->load->view('admin/prestamo');
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

}