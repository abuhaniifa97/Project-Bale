<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cari extends CI_Controller {

	public function index()

	{   
		$this->load->view('cari');
		// $this->load->view('Landing_page');
	}
}