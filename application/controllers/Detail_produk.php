<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_produk extends CI_Controller {

	public function index()

	{   
		$this->load->view('detail_produk');
		// $this->load->view('Landing_page');
	}
}