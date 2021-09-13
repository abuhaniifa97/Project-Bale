<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// FUnction Tampil Data
class Model_banner extends CI_Model{
    public function tampil_banner(){
        return $this->db->get('banner');
    
    }
  //   public function tambah_produk($data, $table){
	// 	$this->db->insert($table, $data);
	// }
    public function tambah_banner($data,$banner){
     	$this->db->insert($banner,$data);
	 }
    public function input_banner($dataaa,$table){
 	    $this->db->insert($table,$dataaa);
	  }
    //  hapus varian
    public function hapus_banner($where, $table){

        $this->db->where($where);
        $this->db->delete($table);
    }
    // // edit data
    //  public function edit_data($where,$table){
	// 	 return $this->db->get_where($table,$where);
	//  }
    //  public function show_select_varian(){
    //     return $this->db->get('varian');
    //  }       



}