<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Aula extends CI_Model {

	public function __construct() {
        parent::__construct();
	}

	public function insertar($dat) {
		return $this->db->insert('salon', $dat);
	}

	
	public function tiene_equipo_fisico($si, $salon) {
 		$this->db->set('equipo_fisico', $si); 
		$this->db->where('id_salon', $salon); 
		$this->db->update('salon');
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


	public function listartodo(){
		$this->db->select('*');    
		$this->db->from('salon');
		$this->db->order_by("aula", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function listar_condicion_ubicacion($ubicacion){
		$this->db->select('*');    
		$this->db->from('salon');
		$this->db->where("ubicacion", "$ubicacion");
		$this->db->order_by("aula", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function listar_condicion_aula($aula){
		$this->db->select('*');    
		$this->db->from('salon');
		$this->db->where("aula", "$aula");
		$this->db->order_by("aula", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function listar_condicion_aula_ubicacion($aula, $ubicacion){
		$this->db->select('*');    
		$this->db->from('salon');
		$this->db->where("aula", "$aula");
		$this->db->where("ubicacion", "$ubicacion");
		$this->db->order_by("aula", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}
}