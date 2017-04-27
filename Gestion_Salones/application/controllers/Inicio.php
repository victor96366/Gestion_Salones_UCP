<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	function __construct() {
        parent::__construct();
    }
    public function cabecera() {
      $this->load->view('admin/cabecera');
    }
    public function index() {
		$this->load->view('index');
    }
    public function inicio() {
		$this->load->view('admin/inicio');
    }
    public function contacto() {
		$this->load->view('admin/contacto');
    }
    public function ayuda() {
		$this->load->view('admin/ayuda');
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




}
