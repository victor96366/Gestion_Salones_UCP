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
    public function enviarEmail(){
        $nombre=$this->input->post('nombre');
        $telefono=$this->input->post('telefono');
        $correo=$this->input->post('correo');
        $observaciones=$this->input->post('observaciones');
        if(!$nombre or  !$telefono or !$correo or !$observaciones ){
            $this->session->set_flashdata('correo', '2');
            redirect('index.php/Inicio/contacto');
        }else{
            $this->load->library('email');
            $this->email->from($correo,'Observaciones '.$nombre);
            $this->email->to('victor.orozco@ucp.edu.co');
            $this->email->subject('Gestion de Prestamo de Llaves y Recursos Fisicos');
            $this->email->message('Buen dia '.$observaciones.' Para comunicarse Responder al correo '.$correo.' o llamar a '.$telefono.' Muchas Gracias');
            if($this->email->send()){
                $this->session->set_flashdata('correo', '1');
                redirect('index.php/Inicio/contacto');
            }else{
                $this->session->set_flashdata('correo', '3');
                redirect('index.php/Inicio/contacto');
            }
        }
    }
}
