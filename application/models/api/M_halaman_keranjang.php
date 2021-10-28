<?php 

class M_halaman_keranjang extends CI_Model
{

    // GET KERANJANG
    public function getkeranjang($id = null)
    {
        if($id === null){
            return $this->db->get('keranjang')->result_array();
        } else{
            return $this->db->get_where('keranjang', ['id_keranjang' => $id])->result_array();
        }
        
    }

    // GET DETAIL KERANJANG
    public function getdetail_keranjang($id = null)
    {
        if($id === null){
            return $this->db->get('detail_keranjang')->result_array();
        } else{
            return $this->db->get_where('detail_keranjang', ['id_detail_keranjang' => $id])->result_array();
        }
        
    }

    // GET PRODUK
    public function getproduk($id = null)
    {
        if($id === null){
            return $this->db->get('produk')->result_array();
        } else{
            return $this->db->get_where('produk', ['id_produk' => $id])->result_array();
        }
        
    }

}