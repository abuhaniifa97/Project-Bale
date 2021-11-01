<?php 

class M_halaman_utama extends CI_Model
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

    // GET KATEGORI
    public function getkategori($id = null)
    {
        if($id === null){
            return $this->db->get('kategori')->result_array();
        } else{
            return $this->db->get_where('kategori', ['id_kategori' => $id])->result_array();
        }
        
    }

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

    // DELETE PRODUK
    public function deleteproduk($id)
    {
       $this->db->delete('produk', ['id_produk' => $id]);
       return $this->db->affected_rows();
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

    // GET DETAIL KATEGORI
    public function getdetail($id = null)
    {
        if($id === null){
            return $this->db->get('detail_kategori')->result_array();
        } else{
            return $this->db->get_where('detail_kategori', ['id_detail_kategori' => $id])->result_array();
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