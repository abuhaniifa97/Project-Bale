<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class H_detail_produk extends REST_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('api/M_detail_produk');
    }

    // GET PRODUK
    public function index_get()
    {
        $id = $this->get('id_produk');
        if($id === null){
            $detail = $this->M_detail_produk->getproduk();
        } else{
            $detail = $this->M_detail_produk->getproduk($id);
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

    // GET DETAIL KATEGORI
    public function detail_kategori_get()
    {
        $id = $this->get('id_detail_kategori');
        if($id === null){
            $detail = $this->M_detail_produk->getdetail();
        } else{
            $detail = $this->M_detail_produk->getdetail($id);
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


    // GET DETAIL BRAND

    public function detail_brand_get()
    {
        $id = $this->get('id_detail_brand');
        if($id === null){
            $brd = $this->M_detail_produk->getdetail_brand();
        } else{
            $brd = $this->M_detail_produk->getdetail_brand($id);
        }

        if($brd){
            $this->response([
                'status' => true,
                'data' => $brd
            ], REST_Controller::HTTP_OK); 
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND); 
        }
    }

    // GET BRAND
    public function brand_get()
    {
        $id = $this->get('id_brand');
        if($id === null){
            $brand = $this->M_detail_produk->getbrand();
        } else{
            $brand = $this->M_detail_produk->getbrand($id);
        }

        
        if($brand){
            $this->response([
                'status' => true,
                'data' => $brand
            ], REST_Controller::HTTP_OK); 
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND); 
        }
    }
    
    // GET KATEGORI
    public function kategori_get()
    {
        $id = $this->get('id_kategori');
        if($id === null){
            $ktr = $this->M_detail_produk->getktr();
        } else{
            $ktr = $this->M_detail_produk->getktr($id);
        }

        
        if($ktr){
            $this->response([
                'status' => true,
                'data' => $ktr
            ], REST_Controller::HTTP_OK); 
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND); 
        }
    }
}