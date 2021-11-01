<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_kategori extends CI_Controller {

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
		// Show Brand Join Produk
		$data['joinkategoriproduk'] = $this->M_kategori->showkategoriproduk()->result();
		// Show All Kategori
		$data['show_all_kategori'] = $this->M_kategori->show_data_kategori()->result();
		$this->load->view('detail_kategori',$data);
	}
}
