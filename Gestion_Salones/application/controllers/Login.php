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
    public function recuperar_pass(){
        $codigo=$this->input->post('codigo');
        $correo=$this->input->post('correo');
        if(!$codigo or  !$correo){
            $this->session->set_flashdata('correo', '2');
            redirect(base_url());
        }else{
            $pass=rand();
            $respuesta['datos']=$this->Ingresar->existe_usuario($codigo);
            if(empty($respuesta['datos'])){           
                $this->session->set_flashdata('correo', '3');
                redirect(base_url());
            }else{
                $this->load->library('email');
                $this->email->from('victor.orozco@ucp.edu.co','Recuperar Contraseña');
                $this->email->to($correo);
                $this->email->subject('Recuperar Contraseña');
                $this->email->message('Buen dia Ingrese al sistema con la siguiente contraseña: '.$pass);
                if($this->email->send()){
                    $this->session->set_flashdata('correo', '1');
                    $datos = array('contrasena' => md5($pass));
                    $this->Usuario->editar($codigo,$datos);
                    redirect(base_url());
                }else{
                    $this->session->set_flashdata('correo', '3');
                    redirect(base_url());
                }

            }
        }
    }
    public function registrar_usuario(){
        if(!$this->input->post('codigo') or !$this->input->post('nombre') or !$this->input->post('apellido')
            or !$this->input->post('usuario') or !$this->input->post('correo') or !$this->input->post('contrasena') or !$this->input->post('telefono'))
        {
            $this->session->set_flashdata('formulario','false');
            redirect(base_url());
        }else{
            $codigo = $this->input->post('codigo');
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $usuario = $this->input->post('usuario');
            $correo = $this->input->post('correo');
            $contrasena = md5($this->input->post('contrasena'));
            $telefono = $this->input->post('telefono');
            $rol = '1';
            $fecha_creacion=date('y-m-d');
            $datos = array('cedula' => $codigo,'nombre' => $nombre,'apellido' => $apellido,'correo' => $correo, 'contrasena' => $contrasena, 'fecha_creacion'=>$fecha_creacion, 'nombre_usuario' => $usuario,'telefono' => $telefono,'ultimo_acceso'=> $fecha_creacion, 'id_rol'=>$rol);
            //insertar usuario
            $this->Usuario->insertar($datos);
            $this->session->set_flashdata('formulario','true');
            redirect(base_url());
        }
    }
    public function consultar() {
    	$usuario=  $this->input->post('username');
		$contrasena=  md5($this->input->post('password'));
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

