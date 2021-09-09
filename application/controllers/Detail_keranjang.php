<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_keranjang extends CI_Controller {

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
		 $data['query'] = $this->model_keranjang->tampil_data()->result();
		 $data['total'] = $this->model_keranjang->jumlah_harga()->result();
		 $data['jml_qty'] = $this->model_keranjang->tampil_qty_pesanan()->result();
		 $data['jml_brt'] = $this->model_keranjang->tampil_berat_pesanan()->result();
		 $this->load->view('detail_keranjang',$data);
		
	}
	public function add_detail_cart(){
		if(isset($_POST['buy_detail_cart'])){

		$id_detail_keranjang       			  = $this->input->post('id_detail_keranjang');
		$ip_detail_keranjang                  = $this->input->post('ip_detail');
		$berat_detail_keranjang       		  = $this->input->post('total_berat');
		$jml_qty_detail                       = $this->input->post('jml_qty');
        $total_harga_detail                   = $this->input->post('tot_harga');
		$total_berat_detail					  = $this->input->post('tot_berat');
			   
		 $dataa = array(
			    'id_detail_keranjang'       => $id_detail_keranjang,
			    'ip'                	    => $ip_detail_keranjang,
				'jml_qty'                   => $jml_qty_detail,
				'total_harga'               => $total_harga_detail,
				'total_berat'               => $berat_detail_keranjang,
				
		         
			);    


		 $this->model_keranjang->add_cart_m($dataa,'detail_keranjang'); 
		 echo "<script>console.log('Data Berhasil Di Simpan')</script>";
		 redirect('alamat');
		 
		}
	}
	// hapus 
	public function hapus ($kjr)
	{
		$where = array('id_keranjang' => $kjr);
		$this->model_keranjang->hapus_data($where, 'keranjang');
		redirect('detail_keranjang');
	}
	
}
