<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH . 'controllers/Webshop.php');

class Produs extends Webshop {

	public function index()
	{		
		$this->load->model('produscatalog');
		
		$id_produs = $this->uri->segment(2);
		$produs = $this->produscatalog->obtineProdus($id_produs);
		
		$data = array('titlu' => 'detalii produs', 'produs' => $produs );
		
		$this->load->view('header',$data);
		$this->load->view('produs',$data);
		$this->load->view('footer');
	}
}
