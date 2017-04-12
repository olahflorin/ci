<?php

class Produscatalog extends CI_Model {
	
	public function __construct() {
		$this->load->database();
	}
	
	public function obtineProdus($id) {
		$query = $this->db->get_where('produse',array('id' => $id));
		$produs = $query->row_array();
		$this->adaugaUrlImagine($produs);
		return $produs;
	}
	
	public function obtineLista($where = [],$limit = 6,$offset = 0) {
		$query = $this->db->get_where('produse',$where,$limit,$offset);
		$produse = $query->result_array();
		foreach($produse as &$produs) {
			$this->adaugaUrlImagine($produs);
		}
		return $produse;
	}
	
	public function obtinePaginare($filtre) {
		$this->load->library('pagination');
		$config['base_url'] = base_url().'lista';
		if(!empty($filtre['id_producator'])) {
			$config['base_url'] += '/'.$filtre['id_producator'];
		}
		$config['total_rows'] = $this->obtineTotal($filtre);
		$config['per_page'] = 6;
		$config['page_query_string'] = true;
		$config['use_page_numbers'] = true;
		$config['query_string_segment'] = 'pagina';
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "</a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
	
	public function obtineTotal($where = []) {
		$this->db->from('produse');
		$this->db->where($where);
		return $this->db->count_all_results();
	}
	
	private function adaugaUrlImagine(&$produs) {
		if(empty($produs['id_imagine'])) {
			$produs['imagine'] = '';
			return;
		}
		$produs['imagine'] = base_url().'public/images/shop/product'.
								$produs['id_imagine'].'.jpg';
	}
}