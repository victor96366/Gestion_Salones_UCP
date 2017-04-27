<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Aula extends CI_Model {

	public function __construct() {
        parent::__construct();
	}

	public function insertar($dat) {
		return $this->db->insert('salon', $dat);
	}

	public function consultarsalon($aula, $ubicacion) {
		$this->db->select('ubicacion, aula');    
		$this->db->from('salon');
		$this->db->where( "aula", "$aula");
		$this->db->where("ubicacion", "$ubicacion");
		$query = $this->db->get();
		return $query->result_array();
	}

	
}