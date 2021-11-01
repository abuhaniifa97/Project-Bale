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
		public function joinprodukbrand(){
			$data=$this->db->query("SELECT produk.nama_produk,produk.harga,produk.foto_utama,brand.banner,brand.nama_brand,brand.icon_brand
			FROM ((detail_brand
			INNER JOIN produk ON detail_brand.id_produk = produk.id_produk)
			INNER JOIN brand ON detail_brand.id_brand = brand.id_brand);");
			return $data;
			
		}
	
}
