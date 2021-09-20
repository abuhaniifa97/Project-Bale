<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('auth'));
              
		}
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
		
		$this->load->view('admin/kategori');
	}
	public function add(){
		if (isset($_POST['btn_add_kategori'])) {
			$nama_kategori = $this->input->post('nama_kategori');
			$id_kategori = $this->input->post('id_kategori');

			
			

			$data_kategori = array(
				'id_kategori' 		    => $id_kategori,
				'nama' 					=> $nama_kategori,
			);
					
					// Insert Varian
					$this->model_barang->input_data_kategori($data_kategori,'kategori');
					$this->session->set_flashdata('success','Action Completed');
					$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		             Data berhasil di input
	               </div>');
					redirect('admin/kategori');
					// echo "<script>console.log('Berhasil')</script>";


		}else{

		}
	}
}
