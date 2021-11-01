<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_invoice extends CI_Model{
    public function tampil_data(){
        $campur = $this->db->query("SELECT pembeli.nama_pembeli,pembeli.no_telepon,pembeli.alamat, keranjang.nama_produk,keranjang.ip,keranjang.qty,keranjang.harga, detail_keranjang.ip,detail_keranjang.jml_qty,detail_keranjang.total_harga,detail_keranjang.total_berat, payment.transaction_time, payment.bank FROM ((pembeli INNER JOIN keranjang ON pembeli.ip = keranjang.ip) INNER JOIN detail_keranjang ON pembeli.ip = detail_keranjang.ip)INNER JOIN payment ON pembeli.ip = payment.ip");
        return $campur; 
	}
	// Belum Bayar
	public function tbl_order(){
		$show =$this->db->query("SELECT produk.foto_utama,produk.nama_produk,produk.harga,keranjang.qty,keranjang.isi_varian_satu,keranjang.isi_varian_dua,tbl_order.tanggal FROM ((keranjang INNER JOIN produk ON keranjang.id_produk = produk.id_produk)
		INNER JOIN tbl_order ON keranjang.id_keranjang = tbl_order.id_detail_keranjang)WHERE tbl_order.status = '201'");
		return $show;
	}
	// Sudah Bayar
	public function order_bayar(){
		$show =$this->db->query("SELECT produk.foto_utama,produk.nama_produk,produk.harga,keranjang.qty,keranjang.isi_varian_satu,keranjang.isi_varian_dua FROM ((keranjang INNER JOIN produk ON keranjang.id_produk = produk.id_produk)
		INNER JOIN tbl_order ON keranjang.id_keranjang = tbl_order.id_detail_keranjang)WHERE tbl_order.status = '200'");
		return $show;
	}
}    
