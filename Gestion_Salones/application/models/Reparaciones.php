<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reparaciones extends CI_Model {

	public function __construct() {
        parent::__construct();
	}

	/*public function insertar($empresa_reparacion, $fecha_reparacion, $reparacion_realizada, $responsable_reparacion, $vida_util_reparacion) {
		return $this->db->insert('reparacion', $empresa_reparacion, $fecha_reparacion, $reparacion_realizada, $responsable_reparacion, $vida_util_reparacion);
	}*/

	public function consultarid_salon(){
		$this->db->select('id_salon, aula, ubicacion');    
		$this->db->from('salon');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function insertar($dat) {
		return $this->db->insert('reparacion', $dat);
	}

}