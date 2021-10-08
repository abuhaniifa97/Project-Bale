<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model
{
		function input_data_kategori($brand,$table){
			$this->db->insert($table, $brand);
		}
		public function show_data_kategori(){
			return $this->db->get('kategori');
		}
		function input_data_kategori_detail($kategori,$table){
			$this->db->insert($table, $kategori);
		}

}
