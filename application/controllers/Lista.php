<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH . 'controllers/Webshop.php');

class Lista extends Webshop {

	public function index()
	{
		$this->load->model('produscatalog');
		$this->load->model('producatori');
		
		$filtre = [];
		$filtru_producator = $this->uri->segment(2);
		if($filtru_producator != null) {
			$filtre['id_producator'] = $filtru_producator;
		}
		$offset = !empty($_GET['pagina']) ? ($_GET['pagina'] - 1) * 6 : 0;
		
		$produse = $this->produscatalog->obtineLista($filtre,6,$offset);
		$producatori = $this->producatori->obtine_producatori();
		$paginare = $this->produscatalog->obtinePaginare($filtre);
		
		$data = array( 
			'titlu' 				=> 'lista', 
			'produse' 				=> $produse, 
			'producatori' 			=> $producatori,
			'producator_selectat' 	=> $filtru_producator,
			'paginare'				=> $paginare
		);

		$this->load->view('header',$data);
		$this->load->view('lista',$data);
		$this->load->view('footer');
	}
}
