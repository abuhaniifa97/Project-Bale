<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

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
		$data['show_kategori'] = $this->M_kategori->show_data_kategori()->result();
		$this->load->view('admin/kategori',$data);
	}
	public function add(){
		if (isset($_POST['btn_add_kategori'])) {
			$nama_kategori = $this->input->post('nama_kategori');
			$id_kategori = $this->input->post('id_kategori');
			// Foto
			$foto_kategoori = $_FILES['img_sampul']['name'];
			$kategori_tmp = $_FILES['img_sampul']['tmp_name'];
			// Akhir Foto

			// cek ekstensi foto
			$ekstensiGambarValid = ['jpg','jpeg','png','webp','PNG','JPG'];
			$ekstensiGambar = explode('.',$foto_kategoori);
			$ekstensiGambar = strtolower(end($ekstensiGambar));

			// // GENERAT NAME PHOTO 1\
			$encrypted = base64_encode($foto_kategoori);
			$encrypted .= '.';
			$encrypted .= $ekstensiGambar;
			
			$data_kategori = array(
				'id_kategori' 		    => $id_kategori,
				'nama_kategori' 	    => $nama_kategori,
				'img_sampul'            => $encrypted
			);

			// Upload Icon Brand
			move_uploaded_file($kategori_tmp,'./assets/img_kategori/'.$encrypted);
			// Insert Varian
			$this->M_kategori->input_data_kategori($data_kategori,'kategori');
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
