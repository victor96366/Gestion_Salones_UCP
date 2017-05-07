<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reparaciones extends CI_Model {

	public function __construct() {
        parent::__construct();
	}

	public function consultarid_salon(){
		$this->db->select('id_salon, aula, ubicacion');    
		$this->db->from('salon');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function insertar($dat) {
		return $this->db->insert('reparacion', $dat);
	}

	public function consultarid_equipo($salon){
		$this->db->select('she.id_equipo_fisico');    
		$this->db->from('salon_has_equiposfisicos as she');
		$this->db->where("id_salon", "$salon");
		$query = $this->db->get();
		$result=$query->row_array(); // se pone row_array para que solo se traiga el primer campo del array ya que solo se va a traer un campo la consulta
 		return $result['id_equipo_fisico'];
	}

	public function consultar_id_reparacion($responsable_reparacion,$fecha_reparacion,$empresa_reparacion,$vida_util_reparacion,$reparacion_realizada){
		$this->db->select_max('r.id_reparacion');    
		$this->db->from('reparacion as r');
		$this->db->where("responsable_reparacion","$responsable_reparacion");
		$this->db->where("fecha_reparacion", " $fecha_reparacion");
		$this->db->where("empresa_reparacion", "$empresa_reparacion");
		$this->db->where("vida_util_reparacion", "$vida_util_reparacion");
		$this->db->where("reparacion_realizada", "$reparacion_realizada");
		$query = $this->db->get();
		$result=$query->row_array();
 		return $result['id_reparacion'];
	}

	public function insertar_reparacion_has_equipo($dat4) {
		return $this->db->insert('equiposfisicos_has_reparacion', $dat4);
	}

	public function listartodo(){
		$this->db->select('e.id_equipos_fisicos, e.nombre, s.id_salon, s.ubicacion, s.aula, r.id_reparacion, r.responsable_reparacion, r.empresa_reparacion, r.fecha_reparacion, r.reparacion_realizada, r.vida_util_reparacion');    
		$this->db->from('reparacion as r');
		$this->db->join('equiposfisicos_has_reparacion as rhe', 'r.id_reparacion=rhe.id_reparacion');
		$this->db->join('equipos_fisicos as e', 'e.id_equipos_fisicos =rhe.id_equipos_fisicos');
		$this->db->join('salon_has_equiposfisicos as she', ' e.id_equipos_fisicos = she.id_equipo_fisico');
		$this->db->join('salon as s', 's.id_salon=she.id_salon');
		$this->db->order_by("s.aula", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}


	public function listar_condicion_fecha($fecha_reparacion){
		$this->db->select('e.id_equipos_fisicos, e.nombre, s.id_salon, s.ubicacion, s.aula, r.id_reparacion, r.responsable_reparacion, r.empresa_reparacion, r.fecha_reparacion, r.reparacion_realizada, r.vida_util_reparacion');    
		$this->db->from('reparacion as r');
		$this->db->join('equiposfisicos_has_reparacion as rhe', 'r.id_reparacion=rhe.id_reparacion');
		$this->db->join('equipos_fisicos as e', 'e.id_equipos_fisicos =rhe.id_equipos_fisicos');
		$this->db->join('salon_has_equiposfisicos as she', ' e.id_equipos_fisicos = she.id_equipo_fisico');
		$this->db->join('salon as s', 's.id_salon=she.id_salon');
		$this->db->where("r.fecha_reparacion", "$fecha_reparacion");
		$this->db->order_by("s.aula", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function listar_condicion_salon($id_salon){
		$this->db->select('e.id_equipos_fisicos, e.nombre, s.id_salon, s.ubicacion, s.aula, r.id_reparacion, r.responsable_reparacion, r.empresa_reparacion, r.fecha_reparacion, r.reparacion_realizada, r.vida_util_reparacion');    
		$this->db->from('reparacion as r');
		$this->db->join('equiposfisicos_has_reparacion as rhe', 'r.id_reparacion=rhe.id_reparacion');
		$this->db->join('equipos_fisicos as e', 'e.id_equipos_fisicos =rhe.id_equipos_fisicos');
		$this->db->join('salon_has_equiposfisicos as she', ' e.id_equipos_fisicos = she.id_equipo_fisico');
		$this->db->join('salon as s', 's.id_salon=she.id_salon');
		$this->db->where(compact('s.id_salon'));
		$this->db->order_by("s.aula", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}


	public function modificar_reparacion($id_reparacion,$nombre_responsable,$empresa_responsable,$vida_util){
 		$this->db->set('responsable_reparacion', $nombre_responsable); 
 		$this->db->set('empresa_reparacion', $empresa_responsable);
 		$this->db->set('vida_util_reparacion', $vida_util);  
		$this->db->where('id_reparacion', $id_reparacion); 
		$this->db->update('reparacion');
 	}


}