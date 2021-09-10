<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_confirm extends CI_Model{
     public function tampil_data(){
           $ip= $_SERVER['REMOTE_ADDR'];
           $this->db->from('keranjang');
           $this->db->where('ip',$ip);
           return $this->db->get(); 
        //    return $this->db->get()->result();
           
	 }   
	 public function tampil_data_pembeli(){
		$ip= $_SERVER['REMOTE_ADDR'];
		$this->db->from('pembeli');
		$this->db->where('ip',$ip);
		return $this->db->get(); 
	 //    return $this->db->get()->result();
		
	} 
	public function tampil_data_detail_keranjang(){
		$ip= $_SERVER['REMOTE_ADDR'];
		$this->db->from('detail_keranjang');
		$this->db->where('ip',$ip);
		return $this->db->get(); 
	 //    return $this->db->get()->result();
		
  } 
  public function tampil_detail (){
	$query_show=$this->db->query("SELECT pembeli.nama_pembeli,keranjang.qty,pembeli.no_telepon,pembeli.alamat,keranjang.nama_produk,keranjang.berat,keranjang.harga,detail_keranjang.total_berat,detail_keranjang.total_harga,detail_keranjang.total_berat
	FROM pembeli
	INNER JOIN keranjang ON pembeli.ip = keranjang.ip
	INNER JOIN detail_keranjang ON pembeli.ip = detail_keranjang.ip");
	return $query_show;
  }    
  public function input_data($data,$table){
	$this->db->insert($table, $data);
  }
  public function show_detail(){
	  $show = $this->db->query("SELECT pembeli.nama_pembeli,pembeli.no_telepon,pembeli.alamat,detail_keranjang.total_harga,detail_keranjang.total_berat
	  FROM (pembeli
	  INNER JOIN detail_keranjang ON pembeli.ip = detail_keranjang.ip)
	  ");
	  return $show;
  }
}    
