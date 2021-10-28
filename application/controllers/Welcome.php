<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');		
		$this->load->model('model_barang');
               
	}
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

		// $data["card"] = $this->model_barang->tampil_data()->result();
		
		
		
		// Show Brand Join Produk
		$data['joinbrandproduk'] = $this->M_brand->joinprodukbrand()->result();
		// Show Product
		$data['show_produk'] = $this->model_barang->tampil_data()->result();
		// Show Kategori
		$data['show_kategori_all'] = $this->M_kategori->show_data_kategori()->result();
		$data['show_brand'] = $this->M_brand->show_data_brand()->result();
		$this->load->view('halaman_utama',$data);
		
		//inisialisasi
		// $this->pagination->initialize($config);

	}
	
	// pagination
	// public function index()
	// {

	// 	// $data["card"] = $this->model_barang->tampil_data()->result();
		
	// 	$data["gabung"] = $this->model_barang->join()->result();

	// 	//PAGINATION
	// 	$this->load->library('pagination');

	// 	//CONFIG
	// 	$config['base_url'] = "http://localhost/clone/ballesupply/index";
	// 	$config['total_rows'] = $this->model_barang->pagination();
	// 	$config['per_page'] = 12;

	// 	//inisialisasi
	// 	$this->pagination->initialize($config);

	// 	$data["card"] = $this->model_barang->tampil_data($config['per_page'], 30);
	// 	$data["gabung"] = $this->model_barang->tampil_data()->result();
		
	// 	$this->load->view('halaman_utama',$data);

		
	// }
}
