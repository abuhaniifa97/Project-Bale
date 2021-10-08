<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {

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
		
        $data['show_brand'] = $this->M_brand->show_data_brand()->result();
		$this->load->view('admin/brand',$data);
		
	}
	public function add(){
		if (isset($_POST['add_brand'])) {
			$nama_brand = $this->input->post('nama_brand');
			$id_brand = $this->input->post('id_brand');
			// Foto
			// Icon
			$foto_icon_brand = $_FILES['icon']['name'];
			$icon_tmp = $_FILES['icon']['tmp_name'];
			// Banner
			// Foto 1
			$foto_banner_brand = $_FILES['banner']['name'];
			$banner_tmp = $_FILES['banner']['tmp_name'];

			// Format
			 // cek ekstensi foto
			 $ekstensiGambarValid = ['jpg','jpeg','png','webp','PNG','JPG'];
			 $ekstensiGambar = explode('.',$foto_icon_brand);
			 $ekstensiGambar = strtolower(end($ekstensiGambar));
			// // GENERAT NAME PHOTO 1\
			$encrypted = base64_encode($foto_icon_brand);
			$encrypted .= '.';
			$encrypted .= $ekstensiGambar;
			// // GENERAT NAME PHOTO 1
			$encrypteddua = base64_encode($foto_banner_brand);
			$encrypteddua .= '.';
			$encrypteddua .= $ekstensiGambar;
			// Upload Icon Brand
			move_uploaded_file($icon_tmp,'./assets/img_brand/icon/'.$encrypted);
			// Upload Banner Brand
			move_uploaded_file($banner_tmp,'./assets/img_brand/banner/'.$encrypteddua);

			$brand = array(
				'id_brand' 		 			    => $id_brand,
				'nama_brand' 					=> $nama_brand,
				'icon_brand' 				    => $encrypted,
				'banner' 				    	=> $encrypteddua,
			);
					
					// Insert Varian
					$this->M_brand->input_data_brand($brand,'brand');
					$this->session->set_flashdata('success','Action Completed');
					$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		             Data berhasil di input
	               </div>');
					redirect('admin/brand');
					// echo "<script>console.log('Berhasil')</script>";


		}else{

		}
	}
}

