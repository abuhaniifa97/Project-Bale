<?php
class Ajaxsearch_model extends CI_Model
{
 function fetch_data($query)
 {
  $this->db->select("*");
  $this->db->from("produk");
  if($query != '')
  {
   $this->db->like('nama_produk', $query);
   $this->db->or_like('harga', $query);
  }
  $this->db->order_by('id_produk', 'DESC');
  return $this->db->get();
 }
}
?>