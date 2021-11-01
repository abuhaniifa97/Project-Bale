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
		// SELECT produk.nama_produk,produk.harga,produk.foto_utama,kategori.nama_kategori,kategori.img_sampul

		public function showkategoriproduk(){
			$data=$this->db->query("SELECT produk.nama_produk,produk.harga,produk.foto_utama,kategori.nama_kategori,kategori.img_sampul FROM ((detail_kategori INNER JOIN produk ON detail_kategori.id_produk = produk.id_produk) INNER JOIN kategori ON detail_kategori.id_kategori =kategori.id_kategori)");
			return $data;
		}

}
