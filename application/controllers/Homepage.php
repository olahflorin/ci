<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH . 'controllers/Webshop.php');

class Homepage extends Webshop {

	public function index()
	{
		$this->db->where('data_expirare >=',date('Y-m-d'));
		$query = $this->db->get('slider');
		$slider = $query->result_array();
		
		$data = array('titlu' => 'homepage', 'slider' => $slider );
		$this->load->view('header',$data);
		$this->load->view('homepage',$data);
		$this->load->view('footer');
	}

}
