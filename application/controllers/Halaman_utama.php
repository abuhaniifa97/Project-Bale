<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_utama extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('model_barang');
                $this->load->helper('url');
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
		$data['jml_qty'] = $this->model_keranjang->tampil_qty_pesanan()->result();
		$data['gabung']=$this->model_barang->join()->result();
		$data['card'] = $this->model_barang->tampil_data()->result();
		$data['show_item'] = $this->model_barang->join_show_produk()->result();
		$data['jml_produk'] = $this->model_produk->jml_produk()->result();
		$data['jml_qty'] = $this->model_keranjang->tampil_qty_pesanan()->result();
		$data['kuat'] = $this->model_banner->tampil_banner()->result();
		// $this->load->view('www',$data);
		$this->load->view('halaman_utama',$data);
		
		
		// $join['query'] = $this->model_barang->join()->result();
        // $this->load->view('landing_page',$join);

		// MENAMPILKAN DENGAN SINTAX VALUE QUERY
		// $data['query'] = $this->model_barang->tampil_data()->result();
	}
	public function search(){
        $keyword = $this->input->post('keyword');
        $data['query']=$this->model_barang->get_produk_keyword($keyword);
        $this->load->view('halaman_utama',$data);
		
    }
	
	function add_cart()
	
	{
		$id_produk			 = $this->input->post('id_produk');
		$id_keranjang        = $this->input->post('id_keranjang');
		$ip                  = $this->input->post('ip');
		$nama_produk         = $this->input->post('nama_produk');
		$berat               = $this->input->post('berat');
        $harga               = $this->input->post('harga');
		$qty                 = $this->input->post('qty');
		$nama_varian_satu    = $this->input->post('nama_varian_satu');
		$isi_varian_satu     = $this->input->post('isi_varian_satu');
		$nama_varian_dua    = $this->input->post('nama_varian_dua');
		$isi_varian_dua     = $this->input->post('isi_varian_dua');
		$stok				 = $this->input->post('stok');
		// Proses Pengurangan Stok
		$update_stok = $stok - $qty;

			   
		 $dataa = array(
			    'id_keranjang'       => $id_keranjang,
			    'ip'                 => $ip,
				'nama_produk'        => $nama_produk,
				'berat'              => $berat,
				'harga'              => $harga,
				'qty'                => $qty,
				'nama_varian_satu'   => $nama_varian_satu,
				'isi_varian_satu'   => $isi_varian_satu,
				'nama_varian_dua'    => $nama_varian_dua,
				'isi_varian_dua'     => $isi_varian_dua
		         
			);    
		$data_stok = array(
					'stok'          =>$update_stok
		);
		$where_stok = array(
					'id_produk'     =>$id_produk
		);

		// Update Stok
		$this->model_barang->update_stok($where_stok,$data_stok,'produk');
		// Akhir Update Stok
		 $this->model_keranjang->add_cart_m($dataa,'keranjang');
		 $this->session->set_flashdata('success','Action Completed');
		 
		 redirect('halaman_utama');
		

	  }
}

