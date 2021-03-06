<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
		$data['buyer'] = $this->model_confirm->tampil_data_pembeli()->result();
		$data['detail_keranjang'] = $this->model_confirm->tampil_data_detail_keranjang()->result();
		$data['jml_qty'] = $this->model_keranjang->tampil_qty_pesanan()->result();
		$this->load->view('blog',$data);
	}
}
