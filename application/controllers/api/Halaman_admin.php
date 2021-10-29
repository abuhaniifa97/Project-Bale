<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Halaman_admin extends REST_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('api/M_halaman_admin');
    }

    // GET USER
    public function index_get()
    {
        $id = $this->get('id_user');
        if($id === null){
            $user = $this->M_halaman_admin->getuser();
        } else{
            $user = $this->M_halaman_admin->getuser($id);
        }

        
        if($user){
            $this->response([
                'status' => true,
                'data' => $user
            ], REST_Controller::HTTP_OK); 
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND); 
        }
    }

    // GET KERANJANG
    public function keranjang_get()
    {
        $id = $this->get('id_keranjang');
        if($id === null){
            $krj = $this->M_halaman_admin->getkeranjang();
        } else{
            $krj = $this->M_halaman_admin->getkeranjang($id);
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

    // GET PAYMENT
    public function payment_get()
    {
        $id = $this->get('order_id');
        if($id === null){
            $pay= $this->M_halaman_admin->getpayment();
        } else{
            $pay = $this->M_halaman_admin->getpayment($id);
        }

        
        if($pay){
            $this->response([
                'status' => true,
                'data' => $pay
            ], REST_Controller::HTTP_OK); 
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND); 
        }
    }

    // GET COST
    public function cost_get()
    {
        $id = $this->get('id_cost');
        if($id === null){
            $cost= $this->M_halaman_admin->getcost();
        } else{
            $cost = $this->M_halaman_admin->getcost($id);
        }

        
        if($cost){
            $this->response([
                'status' => true,
                'data' => $cost
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
            $detail = $this->M_halaman_admin->getproduk();
        } else{
            $detail = $this->M_halaman_admin->getproduk($id);
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

    // GET ALAMAT
    public function alamat_get()
    {
        $id = $this->get('id_alamat');
        if($id === null){
            $addres= $this->M_halaman_admin->getalamat();
        } else{
            $addres = $this->M_halaman_admin->getalamat($id);
        }

        
        if($addres){
            $this->response([
                'status' => true,
                'data' => $addres
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
            $detail = $this->M_halaman_admin->getdetail();
        } else{
            $detail = $this->M_halaman_admin->getdetail($id);
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
            $prom= $this->M_halaman_admin->getpromo();
        } else{
            $prom = $this->M_halaman_admin->getpromo($id);
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

    // GET DETAIL BRAND

    public function detail_brand_get()
    {
        $id = $this->get('id_detail_brand');
        if($id === null){
            $brd = $this->M_halaman_admin->getdetail_brand();
        } else{
            $brd = $this->M_halaman_admin->getdetail_brand($id);
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
            $brand = $this->M_halaman_admin->getbrand();
        } else{
            $brand = $this->M_halaman_admin->getbrand($id);
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
    public function kategori_get(){
        $id = $this->get('id_kategori');
        if($id === null){
            $ktr = $this->M_halaman_admin->getkategori();
        } else{
            $ktr = $this->M_halaman_admin->getkategori($id);
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

    // GET DETAIL KERANJANG
    public function detail_keranjang_get()
    {
        $id = $this->get('id_detail_keranjang');
        if($id === null){
            $krj = $this->M_halaman_admin->getdetail_keranjang();
        } else{
            $krj = $this->M_halaman_admin->getdetail_keranjang($id);
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
    
}