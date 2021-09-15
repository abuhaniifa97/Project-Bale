
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alamat extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		$this->load->helper(array('url','html'));
		$this->load->model('model_pembeli');
		$this->load->database();
	}

	// FUNCTION UNTUK MENAMPILKAN PROVINSI
	function index() {
		$data['berat'] = $this->model_keranjang->tampil_detail_pesanan()->result();
		$data['jml_qty'] = $this->model_keranjang->tampil_qty_pesanan()->result();
		$data['provinsi']=$this->model_pembeli->get_all_provinsi();
		// $data['buyer'] = $this->model_confirm->tampil_data_pembeli()->result();
		$data['editt'] = $this->model_confirm->tampil_data_pembeli()->result();	
		$data['path'] = base_url('assets');
		
		// $this->session->set_flashdata('success','Action Completed');
		// $this->load->view('edit_alamat', $data);
		$ip= $_SERVER['REMOTE_ADDR'];
		$this->db->select('ip');
		$this->db->where('ip',$ip);
		$query = $this->db->get('keranjang');
		$num = $query->num_rows();
		if($num < 1)
		{
			// $this->session->set_flashdata('success','Action Completed');
			// echo base_url('alamat');
			
			$this->session->set_flashdata('error','Action Completed');
			redirect('halaman_utama');
			
		}
		
		
		
		else{
				// $this->session->set_flashdata('success','Action Completed');
				// redirect('confirm_cart');
			echo "<script>console.log('Berhasil')</script>";
			$this->load->view('alamat',$data);
		}
		
	}

	// FUNCTION UNTUK MENAMPILKAN KABUPATEN	
	function add_ajax_kab($id_prov){
		$query = $this->db->get_where('wilayah_kabupaten',array('provinsi_id'=>$id_prov));
		$data = "<option value=''>- Pilih Kabupaten/Kota -</option>";
		foreach ($query->result() as $value) {
			$data .= "<option value='".$value->id."'>".$value->nama."</option>";
		}
		echo $data;
	}

	// FUNCTION UNTUK MENAMPILKAN KECAMATAN
	function add_ajax_kec($id_kab){
		$query = $this->db->get_where('wilayah_kecamatan',array('kabupaten_id'=>$id_kab));
		$data = "<option value=''> - Pilih Kecamatan - </option>";
		foreach ($query->result() as $value) {
			$data .= "<option value='".$value->id."'>".$value->nama."</option>";
		}
		echo $data;
	}

	// FUNCTION UNTUK MENAMPILKAN DESA
	function add_ajax_des($id_kec){
		$query = $this->db->get_where('wilayah_desa',array('kecamatan_id'=>$id_kec));
		$data = "<option value=''> - Pilih Desa - </option>";
		foreach ($query->result() as $value) {
			$data .= "<option value='".$value->id."'>".$value->nama."</option>";
		}
		echo $data;
	}
	

	// FUNCTION TAMBAH DATA
	public function tambah_aksi(){
		// Deklrasi Manual
		$destination = 'Kota Bandung';
		$berat = $this->input->post('total_berat');
		// Akhir Deklrasi Manual
		// Deklarasi Varible
		$ip_alamat = $this->input->post('ip_alamat');
		$id_pembeli = $this->input->post('id_pembeli');
		$no_telepon = $this->input->post('no_telepon');
		$nama_pembeli = $this->input->post('nama_pembeli');
		$alamat = $this->input->post('alamat');
		$provinsi = $this->input->post('provinsi');
		$kota = $this->input->post('kota');
		$kecamatan = $this->input->post('kecamatan');
		$kodepos = $this->input->post('kodepos');
		// Akhir Deklarasi
		
		//cek alamat IP
		$this->db->select('ip');
		$this->db->where('ip',$ip_alamat);
		$query = $this->db->get('pembeli');
		$num = $query->num_rows();
		if($num > 0)
		{
			$this->session->set_flashdata('error','Action not Completed');
			redirect('alamat');
			// echo "<script>console.log('Tidak berhasil upload akhir')</script>";
			
		}else{
			$data = array(
				'ip'         =>$ip_alamat,
				'id_pembeli' => $id_pembeli,
				'no_telepon' => $no_telepon,
				'nama_pembeli' => $nama_pembeli,
				'alamat' => $alamat,
				'id_provinsi' => $provinsi,
				'id_kota'=>$kota,
				'id_kecamatan'=>$kecamatan,
				'kodepos'=>$kodepos
				);
	
				// data provinsi
				$data2 = array(
					
					'id_provinsi' => $provinsi,
					'id_pembeli' => $id_pembeli
					
					);
	
					// data kabupaten
					$data3 = array(
						'id_pembeli' => $id_pembeli,
						'id_kota'=>$kota
						);
	
						// data kecamatan
						$data4 = array(
							'id_pembeli' => $id_pembeli,
							'id_kecamatan'=>$kecamatan,
							);
	
								$this->model_pembeli->input_data($data,'pembeli');
								$this->model_pembeli->input_data($data2,'tb_provinsi');
								$this->model_pembeli->input_data($data3,'tb_kota');
								$this->model_pembeli->input_data($data4,'tb_kecamatan');
								$this->session->set_flashdata('success','Action Completed');
								redirect('confirm_cart',$data);
			// echo "<script>console.log('Berhasil upload akhir')</script>";
		}
		//Akhir cek alamat IP
	}

	//function edit
	public function edit_data()
	{
		// $data['berat'] = $this->model_keranjang->tampil_detail_pesanan()->result();
		$data['jml_qty'] = $this->model_keranjang->tampil_qty_pesanan()->result();
		$data['show_detail'] = $this->model_confirm->show_detail()->result();
		$data['show_edit'] = $this->model_confirm->show_edit()->result();
		// $data['provinsi']=$this->model_pembeli->get_all_provinsi();
		// $data['buyer'] = $this->model_confirm->tampil_data_pembeli()->result();
		// $data['editt'] = $this->model_confirm->tampil_data_pembeli()->result();
		$this->load->view('edit_alamat',$data);

	}

	// FUNCTION UPDATE DATA
	public function update(){
		// Deklrasi Manual
		$destination = 'Kota Bandung';
		$berat = $this->input->post('total_berat');
		// Akhir Deklrasi Manual
		// Deklarasi Varible
		$ip_alamat = $this->input->post('ip_alamat');
		$id_pembeli = $this->input->post('id_pembeli');
		$no_telepon = $this->input->post('no_telepon');
		$nama_pembeli = $this->input->post('nama_pembeli');
		$alamat = $this->input->post('alamat');
		$provinsi = $this->input->post('provinsi');
		$kota = $this->input->post('kota');
		$kecamatan = $this->input->post('kecamatan');
		$kodepos = $this->input->post('kodepos');
		// Akhir Deklarasi
		
		
			$data = array(
				
				'no_telepon' => $no_telepon,
				'nama_pembeli' => $nama_pembeli,
				'alamat' => $alamat,
				'id_provinsi' => $provinsi,
				'id_kota'=>$kota,
				'id_kecamatan'=>$kecamatan,
				'kodepos'=>$kodepos
				);
	
				// data provinsi
				$data2 = array(
					
					'id_provinsi' => $provinsi,
					'id_pembeli' => $id_pembeli
					
					);
	
					// data kabupaten
					$data3 = array(
						'id_pembeli' => $id_pembeli,
						'id_kota'=>$kota
						);
	
						// data kecamatan
						$data4 = array(
							// 'id_pembeli' => $id_pembeli,
							'id_kecamatan'=>$kecamatan,
							);
	
								$this->model_pembeli->ubah_alamat($data,'pembeli');
								$this->model_pembeli->ubah_alamat($data2,'tb_provinsi');
								$this->model_pembeli->ubah_alamat($data3,'tb_kota');
								$this->model_pembeli->ubah_alamat($data4,'tb_kecamatan');
								$this->session->set_flashdata('error','Action Completed');
								redirect('confirm_cart');
		
								
			// echo "<script>console.log('Berhasil upload akhir')</script>";
		
		
		
		//Akhir cek alamat IP
	}

		

}

