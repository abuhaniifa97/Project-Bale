<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// FUnction Tampil Data
class Model_pembeli extends CI_Model{
    
    public function tampil_data(){
        // $this->db->order_by('id_produk', 'ASC');
        return $this->db->get('produk');
    }

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
}


