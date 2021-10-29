<?php 

class M_halaman_brand extends CI_Model
{

    // GET DETAIL BRAND
    public function getdetail_brand($id = null)
    {
        if($id === null){
            return $this->db->get('detail_brand')->result_array();
        } else{
            return $this->db->get_where('detail_brand', ['id_detail_brand' => $id])->result_array();
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

    // GET BRAND
    public function getbrand($id = null)
    {
        if($id === null){
            return $this->db->get('brand')->result_array();
        } else{
            return $this->db->get_where('brand', ['id_brand' => $id])->result_array();
        }
        
    }


    // GET PROMO
    public function getpromo($id = null)
    {
        if($id === null){
            return $this->db->get('promo')->result_array();
        } else{
            return $this->db->get_where('promo', ['id_promo' => $id])->result_array();
        }
        
    }
}