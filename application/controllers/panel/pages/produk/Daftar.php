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
		
		// $data['item'] = $this->model_produk->tampil_data()->result();
		$data['prod'] = $this->model_produk->tampil_data()->result();
		$this->load->view('panel/partial/head',$data);
		$this->load->view('panel/partial/navbar_top.php',$data);
		$this->load->view('panel/partial/sidebar.php',$data);
		$this->load->view('panel/pages/produk/daftar');
		$this->load->view('panel/partial/footer',$data);
	}
}

