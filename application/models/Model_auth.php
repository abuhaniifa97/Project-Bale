<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_auth extends CI_Model
{
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
        
    function insert_manual1($data, $table)
    {
    $this->db->insert($table, $data);
    }
	
}