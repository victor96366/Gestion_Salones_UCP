<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {

	public function __construct() {
        parent::__construct();
	}
	public function insertar($datos) {
		return $this->db->insert('persona', $datos);
	}
	public function listar(){
		$this->db->select('persona.cedula,persona.nombre as nombre_persona,persona.nombre_usuario,persona.correo,persona.telefono,persona.contrasena,rol.nombre as nombre_rol,persona.estado,rol.id_rol');    
		$this->db->from('persona');
		$this->db->join('rol', 'rol.id_rol= persona.id_rol');
		$this->db->order_by("persona.nombre", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}
	public function listar_condicion($cedula,$id_rol,$estado){
		$this->db->select('persona.cedula,persona.nombre as nombre_persona,persona.nombre_usuario,persona.correo,persona.telefono,persona.contrasena,rol.nombre as nombre_rol,persona.estado,rol.id_rol');    
		$this->db->from('persona');
		$this->db->join('rol', 'rol.id_rol= persona.id_rol');
		$this->db->where("(persona.cedula='$cedula' OR rol.id_rol='$id_rol' or persona.estado='$estado')");
		$this->db->order_by("persona.nombre", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}
	public function editar($cedula,$datos){
		return $this->db->update('persona', $datos, compact('cedula'));
	}
}	

