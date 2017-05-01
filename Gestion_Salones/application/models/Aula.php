<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Aula extends CI_Model {

	public function __construct() {
        parent::__construct();
	}

	public function insertar($dat) {
		return $this->db->insert('salon', $dat);
	}

	public function tiene_equipo_fisico($dato, $salon) {
 	return $this->db->update('salon', $dato);
 	return $this->db->where ("id_salon","$salon");
 	}

	public function existe_salon($ubicacion,$aula) {
		$this->db->from('salon');
		$this->db->where(compact('aula'));
		$this->db->where(compact('ubicacion'));
		return ($this->db->count_all_results() > 0) ? TRUE : FALSE;
	}

	public function listar_salon($ubicacion,$aula) {
		$this->db->from('salon');
		$this->db->where(compact('aula'));
		$this->db->where(compact('ubicacion'));
		return ($this->db->count_all_results() > 0) ? TRUE : FALSE;
	}	
}