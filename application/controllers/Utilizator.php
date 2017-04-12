<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH . 'controllers/Webshop.php');

class Utilizator extends Webshop {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('utilizator_model');
	}

	public function index()
	{
		$erori = [];
		if(isset($_POST['nume'])) {
			//formular create user
			$parola = $_POST['parola'];
			$nume = $_POST['nume'];
			$email = $_POST['email'];
			$erori = $this->utilizator_model->creaza_user($nume,$email,$parola);
		}

		if(isset($_POST['login_email'])) {
			//formular login
			$email = $_POST['login_email'];
			$parola = $_POST['login_parola'];
			if($this->utilizator_model->parola_user_valida($email,$parola)) {
				$_SESSION['email'] = $email;
				header('Location:'.base_url().'lista');
			}
			$erori['login'] = 'autentificare invalida';
		}	
		
		$data = array('titlu' => 'Login', 'erori' => $erori );
		$this->load->view('header',$data);
		$this->load->view('utilizator',$data);
		$this->load->view('footer');
	}
	
	public function logout() {
		unset($_SESSION['email']);
		header('Location:'.base_url().'lista');
	}

}
