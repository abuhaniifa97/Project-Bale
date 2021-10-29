<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Halaman_utama extends REST_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('api/M_halaman_utama');
    }

    // GET KERANJANG
    public function index_get()
    {
        $id = $this->get('id_keranjang');
        if($id === null){
            $krj = $this->M_halaman_utama->getkeranjang();
        } else{
            $krj = $this->M_halaman_utama->getkeranjang($id);
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
            $pdk = $this->M_halaman_utama->getproduk();
        } else{
            $pdk = $this->M_halaman_utama->getproduk($id);
        }

        
        if($pdk){
            $this->response([
                'status' => true,
                'data' => $pdk
            ], REST_Controller::HTTP_OK); 
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND); 
        }
    }

    // GET KATEGORI
    public function kategori_get(){
        $id = $this->get('id_kategori');
        if($id === null){
            $ktr = $this->M_halaman_utama->getkategori();
        } else{
            $ktr = $this->M_halaman_utama->getkategori($id);
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
    
    // GET BRAND
    public function brand_get()
    {
        $id = $this->get('id_brand');
        if($id === null){
            $brand = $this->M_halaman_utama->getbrand();
        } else{
            $brand = $this->M_halaman_utama->getbrand($id);
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

    // GET DETAIL BRAND
    public function detail_brand_get()
    {
        $id = $this->get('id_detail_brand');
        if($id === null){
            $dbrand = $this->M_halaman_utama->getdetail_brand();
        } else{
            $dbrand = $this->M_halaman_utama->getdetail_brand($id);
        }

        
        if($dbrand){
            $this->response([
                'status' => true,
                'data' => $dbrand
            ], REST_Controller::HTTP_OK); 
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND); 
        }
    }

    public function detail_kategori_get()
    {
        $id = $this->get('id_detail_kategori');
        if($id === null){
            $detail = $this->M_halaman_utama->getdetail();
        } else{
            $detail = $this->M_halaman_utama->getdetail($id);
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

    // GET PROMO
    public function promo_get()
    {
        $id = $this->get('id_promo');
        if($id === null){
            $prom= $this->M_halaman_utama->getpromo();
        } else{
            $prom = $this->M_halaman_utama->getpromo($id);
        }

        
        if($prom){
            $this->response([
                'status' => true,
                'data' => $prom
            ], REST_Controller::HTTP_OK); 
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND); 
        }
    }
}