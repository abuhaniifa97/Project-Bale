<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide_bar extends CI_Controller {

	public function index()
	{
		$data['show_promo'] = $this->Model_banner->tampil_banner()->result();
		$this->load->view('admin/slide_bar',$data);
	}
	function tambah_banner()
	 {
         if(isset($_POST['btn_banner'])){
            $id_banner             = $this->input->post('id_banner');
            $nama_banner           = $this->input->post('nama_banner');
            // Gambar
            $gambar_banner         = $_FILES['gambar_banner']['name'];
            $gambar_banner_tmp         = $_FILES['gambar_banner']['tmp_name'];
    
            // Pindah atau upload server
            move_uploaded_file($gambar_banner_tmp,'./assets/img/'.$gambar_banner);
            echo "<script>console.log('Img Disimpan')</script>";
            
                //Pencocokan data dan field db 
                $dataaa = array(
                    'id_promo'             => $id_banner,
                    'nama_promo'           => $nama_banner,
					'gambar'               => $gambar_banner,
                 );
                //  Simpan Data
                  $this->model_banner->input_banner($dataaa, 'promo');
                   redirect('admin/slide_bar');
         }else{
            echo "<script>console.log('Img Gagal')</script>";
         }
	 	

	 }
	  public function hapuss ($bnr)
        {
            $where = array('id_banner' => $bnr);
            $this->model_banner->hapus_banner($where,'banner');
            redirect('admin/slide_bar');
        }
	// 	public function edit ($id_varian)
	// 	{
	// 		$this->m_varian->edit($id_varian);
	// 		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"data berhasil di edit</div>');
	// 		redirect('admin/varian');
			


	// }
	// public function edit ($id_varian)
	// {
	// 	return json_encode($this->model_varian->find($id_varian));
	// }


}
