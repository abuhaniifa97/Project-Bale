<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// FUnction Tampil Data
class Model_pembeli extends CI_Model{
    
    public function tampil_data(){
        // $this->db->order_by('id_produk', 'ASC');
        return $this->db->get('produk');
    }

    //Function Tambah data
    public function input_data($data,$table){
        $this->db->insert($table, $data);
    }

    function get_all_provinsi() {
			$this->db->select('*');
			$this->db->from('wilayah_provinsi');
			$query = $this->db->get();
			
			return $query->result();
		}
    // function cek_IP()
    // {
    //     $ip= $_SERVER['REMOTE_ADDR']; 
    //     $query = $this->db->query('SELECT * FROM pembeli WHERE ip = '$ip'');
    //     return $query->num_rows();
    //     var_dump($query);
       
    // }

    //function update alamat
    function edit_alamat($where,$table){		
        return $this->db->get_where($table,$where);
    }

    // UPDATE PRODUK
    public function ubah_alamat($data){
        $ip= $_SERVER['REMOTE_ADDR'];
        $this->db->where('ip',$ip);
        $this->db->update('pembeli',$data);
        return TRUE;
    }

    // Fungsi delete produk di keranjang
    public function delete_id_produk($data){
        $ip= $_SERVER['REMOTE_ADDR'];
        $this->db->where('ip',$ip);
        $this->db->delete('detail_keranjang',$data);
    }

    // Fungsi delete keranjang
    public function delete_id_keranjang($data){
        $ip= $_SERVER['REMOTE_ADDR'];
        $this->db->where('ip',$ip);
        $this->db->delete('keranjang',$data);
	}
	
	// Update
	// Show Data User
	public function show_user(){
		return $this->db->get('users');
	}
	// Join Alamat
	public function join_user_alamat(){
		$data = $this->db->query("SELECT users.nama_lengkap,users.no_hp,users.email,alamat.alamat
		FROM users
		INNER JOIN alamat ON users.id_user = alamat.id_user;");
		return $data;
	}
}


