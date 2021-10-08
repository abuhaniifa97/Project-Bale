<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class M_brand extends CI_Model
{
		function input_data_brand($brand,$table){
			$this->db->insert($table, $brand);
		}
		public function show_data_brand(){
			return $this->db->get('brand');
		}
	
}
