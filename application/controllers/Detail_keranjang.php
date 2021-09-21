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
		 $data['show_item'] = $this->model_barang->join_show_produk()->result();
		 $data['query'] = $this->model_keranjang->tampil_data()->result();
		 $data['total'] = $this->model_keranjang->jumlah_harga()->result();
		 $data['jml_qty'] = $this->model_keranjang->tampil_qty_pesanan()->result();
		 $data['jml_brt'] = $this->model_keranjang->tampil_berat_pesanan()->result();

		//  memberikan alert kosong jika data tidak ada
		$ip= $_SERVER['REMOTE_ADDR'];
		$this->db->select('ip');
		$this->db->where('ip',$ip);
		$query = $this->db->get('keranjang');
		$num = $query->num_rows();
		if($num < 1)
		{
			
			$this->session->set_flashdata('alert','Action Completed');
			// echo "<script>alert('Tidak Ada produk')</script>";
			$this->load->view('detail_keranjang',$data);
			
		}
		
		
		
		else{
				// $this->session->set_flashdata('success','Action Completed');
				// redirect('confirm_cart');
			echo "<script>console.log('Ada produk')</script>";
			$this->load->view('detail_keranjang',$data);
		}
		
		
	}
	public function add_detail_cart(){
		if(isset($_POST['buy_detail_cart'])){

		$id_detail_keranjang       			  = $this->input->post('id_detail_keranjang');
		$ip_detail_keranjang                  = $this->input->post('ip_detail');
		$berat_detail_keranjang       		  = $this->input->post('total_berat');
		$jml_qty_detail                       = $this->input->post('jml_qty');
        $total_harga_detail                   = $this->input->post('tot_harga');
		$total_berat_detail					  = $this->input->post('tot_berat');

		// Proses Pengurangan keranjang
		$update_keranjang = $jml_qty_detail  - $id_detail_keranjang;
			   
		 $dataa = array(
			    'id_detail_keranjang'       => $id_detail_keranjang,
			    'ip'                	    => $ip_detail_keranjang,
				'jml_qty'                   => $jml_qty_detail,
				'total_harga'               => $total_harga_detail,
				'total_berat'               => $berat_detail_keranjang,
				
		         
			);
			
			$data_produk = array(
				'jml_qty'          =>$update_keranjang
			);
			$where_stok = array(
						'id_detail_keranjang'     =>$id_detail_keranjang
			);

		 $this->model_barang->update_stok($where_stok,$data_produk,'detail_keranjang');
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
		echo"<script>console.log('KOSONG')</script>";
		redirect('detail_keranjang');
	}
	
}
