<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Halaman_keranjang extends REST_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('api/M_halaman_keranjang');
    }

    // GET KERANJANG
    public function index_get()
    {
        $id = $this->get('id_keranjang');
        if($id === null){
            $krj = $this->M_halaman_keranjang->getkeranjang();
        } else{
            $krj = $this->M_halaman_keranjang->getkeranjang($id);
        }

        if($krj){
            $this->response([
                'status' => true,
                'data' => $krj
            ], REST_Controller::HTTP_OK); 
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND); 
        }
    }

    // GET DETAIL KERANJANG

    public function detail_keranjang_get()
    {
        $id = $this->get('id_detail_keranjang');
        if($id === null){
            $krj = $this->M_halaman_keranjang->getdetail_keranjang();
        } else{
            $krj = $this->M_halaman_keranjang->getdetail_keranjang($id);
        }

        if($krj){
            $this->response([
                'status' => true,
                'data' => $krj
            ], REST_Controller::HTTP_OK); 
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND); 
        }
    }
    
    // GET PRODUK
    public function produk_get()
    {
        $id = $this->get('id_produk');
        if($id === null){
            $detail = $this->M_halaman_keranjang->getproduk();
        } else{
            $detail = $this->M_halaman_keranjang->getproduk($id);
        }

        if($detail){
            $this->response([
                'status' => true,
                'data' => $detail
            ], REST_Controller::HTTP_OK); 
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND); 
        }
    }
}