<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Prestamos extends CI_Model {

	public function __construct() {
        parent::__construct();
    }
	public function insertar_has($datos) {
		return $this->db->insert('salon_has_prestamo', $datos);
	}
    public function insertar($datos) {
		return $this->db->insert('prestamo', $datos);
	}
	public function editar($id_prestamo,$datos){
		return $this->db->update('prestamo', $datos, compact('id_prestamo'));
	}
	public function editar_estado_salon($id_salon,$datos){
		return $this->db->update('salon', $datos, compact('id_salon'));
	}
	public function consultar_Horario($cedula) {
		$this->db->select('horario.cedula,horario.hora_inicio,horario.hora_fin,persona.nombre,salon.id_salon,salon.aula,salon.ubicacion');
		$this->db->from('horario');
		$this->db->join('persona', 'horario.cedula=persona.cedula');
		$this->db->join('salon', 'horario.id_salon=salon.id_salon');
		$this->db->where('horario.hora_inicio  BETWEEN SEC_TO_TIME(TIME_TO_SEC(curTime())-1800) AND SEC_TO_TIME(TIME_TO_SEC(curTime())+1800)');
		$this->db->where("horario.cedula", "$cedula");
		$query = $this->db->get();
		return $query->result_array();
	}
	public function consultar_prestamo($cedula) {
		$this->db->select('prestamo.id_salon,prestamo.id_prestamo,prestamo.cedula,prestamo.hora_entrega,persona.nombre,salon.aula,salon.ubicacion');
		$this->db->from('prestamo');
		$this->db->join('persona', 'prestamo.cedula=persona.cedula');
		$this->db->join('salon', 'prestamo.id_salon=salon.id_salon');
		$this->db->where('prestamo.hora_recibe','00:00:00');
		$this->db->where("prestamo.cedula", "$cedula");
		$query = $this->db->get();
		return $query->result_array();
	}
	public function consultar_condicion($cedula,$fecha_prestamo,$id_salon){
		$this->db->select('prestamo.id_prestamo,prestamo.id_salon,prestamo.hora_entrega,prestamo.hora_recibe,prestamo.fecha_prestamo,persona.nombre,persona.apellido,salon.aula,salon.ubicacion');
		$this->db->from('prestamo');
		$this->db->join('persona', 'prestamo.cedula=persona.cedula');
		$this->db->join('salon', 'prestamo.id_salon=salon.id_salon');
		$this->db->where("(prestamo.cedula='$cedula' or prestamo.fecha_prestamo='$fecha_prestamo' or prestamo.id_salon='$id_salon')");
		$query = $this->db->get();
		return $query->result_array();
	}
	public function consulta_general(){
		$this->db->select('prestamo.id_prestamo,prestamo.id_salon,prestamo.hora_entrega,prestamo.hora_recibe,prestamo.fecha_prestamo,persona.nombre,persona.apellido,salon.aula,salon.ubicacion');
		$this->db->from('prestamo');
		$this->db->join('persona', 'prestamo.cedula=persona.cedula');
		$this->db->join('salon', 'prestamo.id_salon=salon.id_salon');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function listarSalones(){
		$this->db->select('id_salon,aula,ubicacion');    
		$this->db->from('salon');
		$this->db->order_by("aula", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}
}