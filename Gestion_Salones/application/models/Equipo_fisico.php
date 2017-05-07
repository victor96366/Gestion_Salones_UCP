<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Equipo_fisico extends CI_Model {

	public function __construct() {
        parent::__construct();
	}

	public function insertar($dat) {
		return $this->db->insert('equipos_fisicos', $dat);
	}

	public function consultarid_salon(){
		$this->db->select('id_salon, aula, ubicacion');    
		$this->db->from('salon');
		$query = $this->db->get();
		return $query->result_array();
	}


	public function existe_nombre($nombre) {
		$this->db->from('equipos_fisicos');
		$this->db->where(compact('nombre'));
		return ($this->db->count_all_results() > 0) ? TRUE : FALSE;
	}

	public function consultarid_equipo(){
		$this->db->select_max('id_equipos_fisicos');    
		$this->db->from('equipos_fisicos');
		$query = $this->db->get();
		$result=$query->row_array();
 		return $result['id_equipos_fisicos'];
	}


	public function insertarsalon_has_equipo($dat4) {
		return $this->db->insert('salon_has_equiposfisicos', $dat4);
	}

	public function listartodo(){
		$this->db->select('e.id_equipos_fisicos, e.nombre, e.fecha_instalacion, e.horas_uso, e.observaciones, s.id_salon, s.ubicacion, s.aula');    
		$this->db->from('equipos_fisicos as e');
		$this->db->join('salon_has_equiposfisicos as she', ' e.id_equipos_fisicos = she.id_equipo_fisico');
		$this->db->join('salon as s', 's.id_salon=she.id_salon');
		$this->db->order_by("s.aula", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function listar_condicion_fecha($fecha_instalacion){
		$this->db->select('e.id_equipos_fisicos, e.nombre, e.fecha_instalacion, e.horas_uso, e.observaciones, s.id_salon, s.ubicacion, s.aula');    
		$this->db->from('equipos_fisicos as e');
		$this->db->join('salon_has_equiposfisicos as she', ' e.id_equipos_fisicos = she.id_equipo_fisico');
		$this->db->join('salon as s', 's.id_salon=she.id_salon');
		$this->db->where(" e.fecha_instalacion", "$fecha_instalacion");
		$this->db->order_by("s.aula", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function listar_condicion_salon($salon){
		$this->db->select('e.id_equipos_fisicos, e.nombre, e.fecha_instalacion, e.horas_uso, e.observaciones, s.id_salon, s.ubicacion, s.aula');    
		$this->db->from('equipos_fisicos as e');
		$this->db->join('salon_has_equiposfisicos as she', ' e.id_equipos_fisicos = she.id_equipo_fisico');
		$this->db->join('salon as s', 's.id_salon=she.id_salon');
		$this->db->where(" s.id_salon", "$salon");
		$this->db->order_by("s.aula", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}


	public function eliminar_equipo ($id_equipo_fisico){
		$this->db->where('id_equipos_fisicos', $id_equipo_fisico);
		$this->db->delete('equipos_fisicos');
		
	//	$query = $this->db->get();
	//	return $query->result_array();
	}

	public function eliminar_equipo_has_salon ($id_equipo_fisico){
		$this->db->where('id_equipo_fisico', $id_equipo_fisico);
		$this->db->delete('salon_has_equiposfisicos');
		//	$query = $this->db->get();
	//	return $query->result_array();
	}

}

