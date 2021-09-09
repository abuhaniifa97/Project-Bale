<?php 

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_auth');
 
	}
 
	function index(){
		$this->load->view('form_login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => ($password)
			);
		$cek = $this->model_auth->cek_login("login",$where)->result_array();

		if (count($cek) > 0) {
 
			$data_session = array(
				'nama' => $username,
				"id" => $cek[0]['id'],
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Anda berhasil login</div>');
			redirect(base_url("admin/dashboard"));
 
		}else{
			
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Username atau password salah!</div>');
			
			redirect(base_url('auth'));
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}
}