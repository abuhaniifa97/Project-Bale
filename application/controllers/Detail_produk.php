<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_produk extends CI_Controller {

	public function index()

	{   
		$data['show_produk'] = $this->model_barang->tampil_data()->result();
		$this->load->view('detail_produk',$data);
		// $this->load->view('Landing_page');
	}
}
