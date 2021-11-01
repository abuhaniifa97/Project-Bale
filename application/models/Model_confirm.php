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

  //fungsi edit alamat
  public function show_edit(){
	$ip= $_SERVER['REMOTE_ADDR'];
	  $show_edit = $this->db->query("SELECT * FROM pembeli WHERE ip = '$ip'");
	  return $show_edit;
  }
  public function show_detail(){
	  $show = $this->db->query("SELECT pembeli.nama_pembeli,pembeli.no_telepon,pembeli.alamat,detail_keranjang.total_harga,detail_keranjang.total_berat
	  FROM (pembeli
	  INNER JOIN detail_keranjang ON pembeli.ip = detail_keranjang.ip)
	  ");
	  return $show;
  }

//   Update
	// 	Join Alamat User
  	public function joinuseralamat(){
		$userjoin = $this->db->query("SELECT users.nama_lengkap,users.no_hp,alamat.alamat,alamat.kodepos
		FROM users
		INNER JOIN alamat ON users.id_user = alamat.id_user;");
		return $userjoin;
  	}
    public function produkshow(){
		$produkshow = $this->db->query("SELECT produk.nama_produk,produk.harga,keranjang.qty
		FROM keranjang
		INNER JOIN produk ON keranjang.id_produk = produk.id_produk; ");
		return $produkshow;
   }
	//    Detail Keranjang
	public function detail_keranjang(){
		$show_detail = $this->db->query("SELECT * FROM detail_keranjang");
		return $show_detail;
	}
	//    Cost(Ongkir)
   public function showcost(){
		$show_cost = $this->db->query("SELECT * FROM cost_ongkir");
		return $show_cost;
   }

}    
