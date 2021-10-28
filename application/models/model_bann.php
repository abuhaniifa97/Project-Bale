<?php 

class Model_bann extends CI_Model
{
    public function getbanner($id = null)
    {
        if($id === null){
            return $this->db->get('produk')->result_array();
        } else{
            return $this->db->get_where('produk', ['id_produk' => $id])->result_array();
        }
        
    }

   public function deleteproduk($id)
   {
       $this->db->delete('produk', ['id_produk' => $id]);
       return $this->db->affected_rows();
   }

   public function createproduk($data)
   {
        $this->db->insert('produk', $data);
        return $this->db->affected_rows();
   }
}