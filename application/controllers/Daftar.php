<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
	public function __construct() { 
		parent::__construct(); 
		
		// require APPPATH.'libraries/PHPMailer/Exception.php';
		// require APPPATH.'libraries/PHPMailer/PHPMailer.php';
		// require APPPATH.'libraries/PHPMailer/SMTP.php';
		require APPPATH.'libraries/PHPMailer/PHPMailerAutoload.php';
		 
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
		$this->load->view('daftar');
		
	}

	public function insert_manual()
	{
		$type_akun = "MANUAL";
        $role = "2";
		
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $id_user = substr(str_shuffle($permitted_chars), 0, 8);
		$no_hp = $this->input->post('no_hp');

		$data = array(
			'id_user' => $id_user,
			'type_akun' => $type_akun,
			'role'    => $role,
			'no_hp'   => $no_hp
		);

		$this->model_auth->insert_manual1($data,'users');
		redirect('halaman_utama');
	}
	public function insetbyemail(){
		//Post Data
		$EMAIL = $this->input->post('emailbymanual');
		$id_users = substr(str_shuffle('abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789'),0,5);

		// STMP
		$mail = new PHPMailer;
		// Konfigurasi SMTP
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'haniifa.id@gmail.com';
		$mail->Password = 'abuhaniifa097';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;


		// Menambahkan penerima
		$mail->addAddress($EMAIL);

		// Menambahkan cc atau bcc 


		// Subjek email
		$mail->Subject = 'Balesupply Verifikasi';

		// Mengatur format email ke HTML
		$mail->isHTML(true);

		// random
		$random = rand();

		// Konten/isi email
		$mailContent = "<h1>Selamat Datang Di Toko Balesupply</h1>
		<p>Ini adalah kode verifikasi anda.</p>
		<br>
		<span style='font-weight:bold'>$random</span></p><br>
		Masukin Kode Ini untuk Mengaktifkan Akun Anda
		";
		$mail->Body = $mailContent;

		// Kirim email
		if(!$mail->send()){
			echo 'Pesan tidak dapat dikirim.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}else{
			// Insert DB
			$dataa = array(
				'email'      => $EMAIL,
				'status' =>'Tidak Aktif',
				'role'   =>'2',
				'type'   =>'Manual',
				'kode'   =>$random,
				'id_user' =>$id_users,

   
			);
			$this->M_users->input_data($dataa, 'users');
			redirect('verifikasi');
			echo 'Pesan terkirim';
		}
	}
}
