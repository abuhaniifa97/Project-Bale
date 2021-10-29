<?php 

class M_halaman_alamat extends CI_Model
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

    // GET COST ONGKIR
    public function getcost($id = null)
    {
        if($id === null){
            return $this->db->get('cost_ongkir')->result_array();
        } else{
            return $this->db->get_where('cost_ongkir', ['id_cost' => $id])->result_array();
        }
        
    }

    // GET ALAMAT
    public function getalamat($id = null)
    {
        if($id === null){
            return $this->db->get('alamat')->result_array();
        } else{
            return $this->db->get_where('alamat', ['id_alamat' => $id])->result_array();
        }
        
    }

    // GET PAYMENT
    public function getpayment($id = null)
    {
        if($id === null){
            return $this->db->get('payment')->result_array();
        } else{
            return $this->db->get_where('payment', ['order_id' => $id])->result_array();
        }
        
    }

    // GET USER
    public function getuser($id = null)
    {
        if($id === null){
            return $this->db->get('users')->result_array();
        } else{
            return $this->db->get_where('users', ['id_user' => $id])->result_array();
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

    // GET KATEGORI
    public function getkategori($id = null)
    {
        if($id === null){
            return $this->db->get('kategori')->result_array();
        } else{
            return $this->db->get_where('kategori', ['id_kategori' => $id])->result_array();
        }
        
    }
}