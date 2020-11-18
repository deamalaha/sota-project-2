<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('admin/login/login');
	}

	public function cekLogin(){
		$input = $this->input->post(NULL, TRUE);
		//NULL Untuk Bisa Inputan Null
		//TRUE bisa XSS Filter

		// var_dump($input);
		// //Format MD5 = md5(Nama_Variabel_yg_mau_di_encrypt)

		// echo "Ini Inputan Username : ".$input['username'].'<br/>';
		// echo "Ini Inputan Password : ".$input['password'].'<br/>';$input['password'];
		// echo "Ini Inputan Password Encr : ".md5($input['password']).'<br/>';
		$pass_encrypt = ($input['password']);
		$this->modelAdmin->login($input['username'], $pass_encrypt);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('admin/Login');
	}
	
}
	