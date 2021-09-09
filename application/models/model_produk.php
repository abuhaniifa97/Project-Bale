<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// FUnction Tampil Data
class Model_produk extends CI_Model{
    public function tampil_data(){
        // $this->db->order_by('id_produk', 'ASC');
        return $this->db->get('produk');
		}
	public function join_show_produk(){
			$show_produk = $this->db->query("SELECT produk.nama_produk,produk.harga,produk.berat,produk.deskripsi,produk.foto_utama,produk.foto_samping,produk.foto_atas,varian.nama_varian,varian.isi_varian,varian.nama_varian_dua,varian.isi_varian_dua
			FROM produk
			INNER JOIN varian ON produk.id_varian = varian.id_varian;");
			return $show_produk;
	}
	public function jml_produk(){
		$jml_produk = $this->db->query("SELECT COUNT('id_produk') AS jml FROM produk");
		return $jml_produk;
	}
  //   public function tambah_produk($data, $table){
	// 	$this->db->insert($table, $data);
	// }
  //   function input_data($dataa,$table){
	// 	$this->db->insert($table,$dataa);
	// }
}
