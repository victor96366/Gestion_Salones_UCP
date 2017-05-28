<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ingresar extends CI_Model {

	public function __construct() {
        parent::__construct();
	}
	public function existe_usuario($cedula){
		$this->db->select('cedula');
		$this->db->from('persona');
		$this->db->where(compact('cedula'));
		$this->db->where('estado','1');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function existe($nombre_usuario,$contrasena) {
		$this->db->select('cedula,id_rol,nombre_usuario');
		$this->db->from('persona');
		$this->db->where(compact('nombre_usuario'));
		$this->db->where(compact('contrasena'));
		$this->db->where('estado','1');
		$query = $this->db->get();
		return $query->result_array();
	}
}	

