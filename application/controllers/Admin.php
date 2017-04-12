<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH . 'controllers/Webshop.php');

class Admin extends Webshop {
	
	public function __construct() {
		parent::__construct();
		if(!$this->esteLogat()) {
			die('Nu esti logat');
		}
		$this->load->model('producatori');
		$this->load->model('produscatalog');
	}
	
	public function index() {
		if(!empty($_POST['id_produs'])) {
			redirect(base_url().'index.php/admin/modifica/'.$this->input->post('id_produs'));
		}
		$date['produse'] = $this->produscatalog->obtineLista(array(),999);
		
		$this->load->view('header');
		$this->load->view('admin/dashboard',$date);
		$this->load->view('footer');
	}
	
	public function esteLogat() {
		return !empty($_SESSION['email']);
	}
	
	public function adauga_produs() {
		$date = array( 
			'producatori' => $this->producatori->obtine_producatori(),
			'salvat'	=> false
		);
		
		if(!empty($_POST)) {
			$produs = array();
			$produs['nume'] = $this->input->post('nume');
			$produs['descriere'] = $this->input->post('descriere');
			$produs['id_categorie'] = $this->input->post('id_categorie');
			$produs['id_producator'] = $this->input->post('id_producator');
			$produs['pret'] = $this->input->post('pret');
			$this->db->insert('produse',$produs);
			$date['salvat'] = true;
		}
		
		$this->load->view('header');
		$this->load->view('admin/adauga',$date);
		$this->load->view('footer');
	}
	
	public function modifica_produs() {
		$idprodus = $this->uri->segment(3);
		$date = array('salvat' => false);
		if(!empty($_POST)) {
			$idimagine = date('YmdHis') ;
			$config['upload_path']          = './public/images/shop/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['file_name']			= 'product'.$idimagine;
			$this->load->library('upload', $config);
			
			$produs = array();

			if ( ! $this->upload->do_upload('fisier')) {
				echo $this->upload->display_errors();
				die();
			} else {
				$produs['id_imagine'] = $idimagine;
			}
		
			$produs['nume'] = $this->input->post('nume');
			$produs['descriere'] = $this->input->post('descriere');
			$produs['id_categorie'] = $this->input->post('id_categorie');
			$produs['id_producator'] = $this->input->post('id_producator');
			$produs['pret'] = $this->input->post('pret');
			
			$this->db->where('id', $idprodus);
			$this->db->update('produse',$produs);
			$date['salvat'] = true;
		}
		
		$produs = $this->produscatalog->obtineProdus($idprodus);

		$date['produs'] = $produs;
		$date['producatori'] = $this->producatori->obtine_producatori();
		
		$this->load->view('header');
		$this->load->view('admin/modifica',$date);
		$this->load->view('footer');
	}
	
	public function adauga_banner() {
		if(!empty($_POST)) {
			$banner = array();
			$banner['nume'] = $this->input->post('nume');
			$banner['link'] = $this->input->post('link');
			$banner['data_adaugare'] = $this->input->post('data_start');
			$banner['data_expirare'] = $this->input->post('data_expirare');
			
			$idimagine = date('YmdHis');
			$config['upload_path']          = './public/images/shop/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['file_name']			= 'slider'.$idimagine;
			$this->load->library('upload', $config);
			$this->upload->do_upload('fisier');
			$banner['id_imagine'] = $idimagine;
			$this->db->insert('slider',$banner);
		}
		$this->load->view('header');
		$this->load->view('admin/adauga_banner');
		$this->load->view('footer');
	}
}