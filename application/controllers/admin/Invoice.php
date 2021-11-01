<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

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
		
		// $data['query'] = $this->model_barang->tampil_data()->result();
		// Tbl Order Belum Bayar
		$data['tbl_order'] = $this->Model_invoice->tbl_order()->result();
		// Tbl Order Sudah Bayar
		$data['order_bayar'] = $this->Model_invoice->order_bayar()->result();
		$this->load->view('admin/invoice',$data);
		
	}
}
