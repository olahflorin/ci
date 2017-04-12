<?php

class Producatori extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	
	public function obtine_producatori() {
		$this->db->select('id_producator,producator.nume');
		$this->db->from('produse');
		$this->db->distinct();
		$this->db->join('producator', 'producator.id = produse.id_producator');
		$query = $this->db->get();
		return $query->result_array();
	}
}