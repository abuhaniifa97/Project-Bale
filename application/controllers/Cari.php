<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cari extends CI_Controller {

	public function index()

	{   
        $data['jml_qty'] = $this->model_keranjang->tampil_qty_pesanan()->result(); 
		$this->load->view('cari',$data);
		// $this->load->view('Landing_page');
	}
}