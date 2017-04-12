<?php

class Utilizator_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function creaza_user($nume,$email,$parola = '1234') {
		$erori = [];
		if(empty($parola)) {
			$erori['parola'] = 'Nu ai setat parola';
		}
		if(empty($nume)) {
			$erori['nume'] = 'Nu ai setat nume';
		}
		if(empty($email)) {
			$erori['email'] = 'Nu ai setat email';
		}
		if(empty($erori)){
			if(!$this->exista_user_in_db($email)) {
				$parola = md5($parola);
				$dateuser = array('nume' => $nume, 'email' => $email, 'parola' => $parola);
				$this->db->insert('useri',$dateuser);
			} else {
				$erori['email'] = 'Exista deja user cu acest email';
			}
		}
		return $erori;
	}

	public function parola_user_valida($email,$parola) {
		$parola = md5($parola);
		$this->db->where('email', $email);
		$this->db->where('parola', $parola);
		$this->db->from('useri');
		$total = $this->db->count_all_results();
		return $total > 0;
	}
	
	private function exista_user_in_db($email) {
		$this->db->where('email', $email);
		$this->db->from('useri');
		$total = $this->db->count_all_results();
		return $total > 0;
	}
}