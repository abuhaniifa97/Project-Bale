<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('daftar');
	}

	public function insert_manual()
	{
		$type_akun = "MANUAL";
        $role = "2";
		
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $id_user = substr(str_shuffle($permitted_chars), 0, 8);
		$no_hp = $this->input->post('no_hp');

		$data = array(
			'id_user' => $id_user,
			'type_akun' => $type_akun,
			'role'    => $role,
			'no_hp'   => $no_hp
		);

		$this->model_auth->insert_manual1($data,'users');
		redirect('halaman_utama');
	}
}