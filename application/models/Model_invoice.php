<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_invoice extends CI_Model{
    public function tampil_data(){
        $campur = $this->db->query("SELECT pembeli.nama_pembeli,pembeli.no_telepon,pembeli.alamat, keranjang.nama_produk,keranjang.ip,keranjang.qty,keranjang.harga, detail_keranjang.ip,detail_keranjang.jml_qty,detail_keranjang.total_harga,detail_keranjang.total_berat, payment.transaction_time, payment.bank FROM ((pembeli INNER JOIN keranjang ON pembeli.ip = keranjang.ip) INNER JOIN detail_keranjang ON pembeli.ip = detail_keranjang.ip)INNER JOIN payment ON pembeli.ip = payment.ip");
        return $campur; 
    }
}    
