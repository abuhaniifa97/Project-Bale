<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_keranjang extends CI_Model{
     public function tampil_data(){
           $ip= $_SERVER['REMOTE_ADDR'];
           $this->db->from('keranjang');
           $this->db->where('ip',$ip);
           return $this->db->get(); 
        //    return $this->db->get()->result();
           
	  }    
	  public function tampil_detail_pesanan(){
		$ip= $_SERVER['REMOTE_ADDR'];
		$this->db->from('detail_keranjang');
		$this->db->where('ip',$ip);
		return $this->db->get(); 
	  }
     function jumlah_harga(){
        $ip= $_SERVER['REMOTE_ADDR']; 
        $this->db->select_sum('harga');
        $this->db->select_sum('berat');
        $this->db->where('ip',$ip);
        return $this->db->get('keranjang');
        // return $query->row();
     }
     function tampil_qty_pesanan(){
        $ip= $_SERVER['REMOTE_ADDR']; 
        $this->db->select_sum('qty');
        $this->db->where('ip',$ip);
        return $this->db->get('keranjang');
        
     }
     function tampil_berat_pesanan(){
        $ip= $_SERVER['REMOTE_ADDR']; 
        $this->db->select_sum('berat');
        $this->db->where('ip',$ip);
        return $this->db->get('keranjang');
        
     }
     
    
    function add_cart_m($dataa,$table){
         $this->db->insert($table, $dataa);
    }
    //FUNCTION HAPUS
    public function hapus_data($where, $table){

      $this->db->where($where);
      $this->db->delete($table);
	}
	// Join Produk Dan Keranjang
	public function joinproduk(){
		$data=$this->db->query("SELECT produk.nama_produk,produk.foto_utama,produk.berat,produk.harga,keranjang.qty FROM keranjang INNER JOIN produk ON keranjang.id_produk = produk.id_produk");
		return $data;
	}
	// SUM TOTAL BERALANJA BELUM WHERE
	public function tot_belanja(){
		$data = $this->db->query("SELECT SUM(produk.harga) as total
		FROM keranjang
		INNER JOIN produk ON keranjang.id_produk = produk.id_produk");
		return $data;
	}
}    
