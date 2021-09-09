<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confirm_cart extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-cmeALzQSk7koEq7SWF-wdBtG', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');	
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// Ongkir 
		$data['ongkir'] = '';
		$data['query'] = $this->model_keranjang->tampil_data()->result();
		$data['buyer'] = $this->model_confirm->tampil_data_pembeli()->result();
		$data['detail_keranjang'] = $this->model_confirm->tampil_data_detail_keranjang()->result();
		$data['jml_qty'] = $this->model_keranjang->tampil_qty_pesanan()->result();
		// $data['query'] = $this->model_barang->tampil_data()->result();
		$data['show_query'] = $this->model_confirm->tampil_detail()->result();
		$this->load->view('confirm_cart',$data);
	}
	public function provinsi(){

		
	}
	public function token()
    {
		// Definsi Data
		$nama_pembeli  = $this->input->post('penerima_detail');
		$no_detail     = $this->input->post('no_detail');
		// $alamat_detail = $this->input->post('alamat_detail');
		$produk_detail = $this->input->post('produk_detail');
		// $harga_detail = $this->filter_input->post('harga_detail');
		$qty_detail    = $this->input->post('qty_detail');
		$total_detail  = $this->input->post('total_detail');
		// var_dump($nama_pembeli);
		// Required
		$transaction_details = array(
		  'order_id' => rand(),
		  'gross_amount' => $total_detail, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
		  'id'	 	 => 'a1',
		  'price' 	 => $total_detail,
		  'quantity' => $qty_detail,
		  'name'	 => $produk_detail
		);

		// Optional
		$item_details = array ($item1_details);

		// Optional
		// $billing_address = array(
		//   'first_name'    => "Andri",
		//   'last_name'     => "Litani",
		//   'address'       => "Mangga 20",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16602",
		//   'phone'         => "081122334455",
		//   'country_code'  => 'IDN'
		// );

		// // Optional
		// $shipping_address = array(
		//   'first_name'    => "Obet",
		//   'last_name'     => "Supriadi",
		//   'address'       => "Manggis 90",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16601",
		//   'phone'         => "08113366345",
		//   'country_code'  => 'IDN'
		// );

		// Optional
		$customer_details = array(
			'first_name'    => $nama_pembeli,
			'phone'         => $no_detail,
			// 'alamat'         => $alamat_detail,
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'minute', 
            'duration'  => 2
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }

    public function finish()
    {
    	$result = json_decode($this->input->post('result_data'),true);
		$ip = $_SERVER['REMOTE_ADDR'];
    	$data = [
			'order_id' => $result['order_id'],
			'gross_amount' => $result['gross_amount'],
			'payment_type' => $result['payment_type'],
			'transaction_time'  => $result['transaction_time'],
			'bank'            => $result['va_numbers'][0]['bank'],
			'va_number'     => $result['va_numbers'][0]['va_number'],
			'pdf_url'       => $result['pdf_url'],
			'status_code'   => $result['status_code'],
			'ip'            =>  $ip

		];

		$this->model_pembeli->input_data($data,'payment');
		echo "<script>alert('Succes')</script>";
		redirect('halaman_utama');

    }
}
