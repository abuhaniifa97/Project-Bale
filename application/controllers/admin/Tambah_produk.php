<?php
ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
defined('BASEPATH') OR exit('No direct script access allowed');


class Tambah_produk extends CI_Controller {
	
	public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
				if ($this->session->userdata('status') != "login") {
					redirect(base_url('auth'));
				}
        }

	public function index()
	{
		$data['item'] = $this->model_produk->tampil_data()->result();
		$data['join_produk'] = $this->model_produk->join_show_produk()->result();
		$data['d_kategori'] = $this->model_barang->tampil_data_kategori()->result();
		$this->load->view('admin/partial/head',$data);
		$this->load->view('admin/tambah_produk',$data);

	}


	function upload()
    {
        $nama_produk       = $this->input->post('nama_produk');
        $deskripsi         = $this->input->post('deskripsi');
        // $kategori       = $this->input->post('kategori');
        $harga             = $this->input->post('harga');
        $berat             = $this->input->post('berat');
        $foto_utamaa        = $_FILES['foto_utama']['name'];
        $foto_samping      = $_FILES['foto_samping']['name'];
        // $Gambar_atas      = $_files[gambar_atas] ['name'];
       

        
       
        if ($foto_utamaa =''){}else{
            $config ['upload_path'] = '../../assets/gambar_utama/';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar_utama')){
				// echo "Gambar gagal di upload";
				echo "<script>console.log('gagal upload')</script>";
            }else{

                // Utama
				echo "<script>console.log('berhasil upload')</script>";
                $foto_utamaa=$this->upload->data('file_nama');
                        
            }
        }
        if ($foto_samping =''){}else{
            $configs ['upload_path'] = './assets/gambar_samping';
            $configs ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $configs);
            if(!$this->upload->do_upload('gambar_samping')){
				// echo "Gambar gagal di upload";
				echo "<script>console.log('Gagal berhasil upload')</script>";
            }else{

                 // Samping
				 echo "<script>console.log('berhasil upload')</script>";
                $foto_samping=$this->upload->data('file_namaa');
                 
            }
        }
        
         $dataa = array(
             'nama_produk'      => $nama_produk,
             'deskripsi'        => $deskripsi,
            //  'kategori'      => $kategori,
             'harga'            => $harga,
             'berat'            => $berat,
             'foto_utama'       => $foto_utamaa,
             'foto_samping'     => $foto_samping,
            //  'gambar_atas'   => $gambar_atas,

         );

         $this->model_barang->input_data($dataa, 'produk');
		//  redirect('tambah_produk');
		echo "<script>console.log('berhasil upload akhir')</script>";
         
        //  akhir tambah aksi
    }
	
		// function hapus
		public function hapuss($brg){
            $this->model_barang->hapus_produk($brg); 
			// script sweetalert menmapilkan modal pemberitahuan
			$this->session->set_flashdata('success','Action Completed');
            redirect('admin/tambah_produk');
        }

	// Tes Github
	// Ubah Produk
	function ubah_data_produk(){
		$id_produk_edit = $this->input->post('id_produk_edit');
		$edit_nama_produk = $this->input->post('nama_produk_edit');
		$edit_deskripsi_produk = $this->input->post('deskripsi_edit');
		$edit_harga_produk = $this->input->post('harga_edit');
		$edit_berat_produk = $this->input->post('berat_edit');

		$array_edit = array(
            'nama_produk'  => $edit_nama_produk,
            'deskripsi' => $edit_deskripsi_produk,
			'harga' => $edit_harga_produk,
			'berat' => $edit_berat_produk
		);
		$this->model_barang->ubah_produk($array_edit,$id_produk_edit);
		$this->session->set_flashdata('success','Action Completed');
		echo "<script>
						alert('Data Berhasil Di Input');
					</script>";
	    redirect('admin/tambah_produk');

	}
	// Akhir Ubah Produk
	public function campur(){
		if (isset($_POST['btn_add'])) {
			$nama_produk = $this->input->post('nama_produk');
			$deskripsi = $this->input->post('deskripsi');
			$harga = $this->input->post('harga');
			$berat = $this->input->post('berat');
			$stok = $this->input->post('stok');
			// Varian
			$id_varian = $this->input->post('id_varian');
			$id_produk = $this->input->post('id_produk');
			$nama_varian = $this->input->post('nama_varian');
			$isi_varian =$this->input->post('isi_varian');
			// Varian 2
			$nama_varian_dua = $this->input->post('nama_varian_dua');
			$isi_varian_dua = $this->input->post('isi_varian_dua');
			// Kategori
			$id_kategori = $this->input->post('list_kategori');

			
			// Foto 1
			$foto_satu = $_FILES['foto_upload']['name'];
			$foto_satu_tmp = $_FILES['foto_upload']['tmp_name'];
			// Foto Kedua
			$foto_dua = $_FILES['foto_uploaddua']['name'];
			$foto_dua_tmp = $_FILES['foto_uploaddua']['tmp_name'];
			// Foto Ketiga
			$foto_tiga = $_FILES['foto_uploadtiga']['name'];
			$foto_tiga_tmp = $_FILES['foto_uploadtiga']['tmp_name'];

			 // cek ekstensi foto
			 $ekstensiGambarValid = ['jpg','jpeg','png','webp','PNG','JPG'];
			 $ekstensiGambar = explode('.',$foto_satu);
			 $ekstensiGambar = strtolower(end($ekstensiGambar));
			  // cek ekstensi foto
			 //   $ekstensiGambarValid = ['jpg','jpeg','png','webp','PNG','JPG'];
			 
			  //   $ekstensiGambarValid = ['jpg','jpeg','png','webp','PNG','JPG'];
			  
			
			//  if( !in_array($ekstensiGambar,$ekstensiGambarValid)){
			//  echo"<script>
			//  alert('Salah Ekstensi');
			//  </script>";
			//  return false;
			//  }
			  // // GENERAT NAME PHOTO 1\
			  $encrypted = base64_encode($foto_satu);
			  $encrypted .= '.';
			  $encrypted .= $ekstensiGambar;
			  // // GENERAT NAME PHOTO 1\
			  $encrypteddua = base64_encode($foto_dua);
			  $encrypteddua .= '.';
			  $encrypteddua .= $ekstensiGambar;
			  // // GENERAT NAME PHOTO 1\
			  $encryptetiga = base64_encode($foto_tiga);
			  $encryptetiga .= '.';
			  $encryptetiga .= $ekstensiGambar;
			
			move_uploaded_file($foto_satu_tmp,'./assets/gambar_utama/'.$encrypted);
			move_uploaded_file($foto_dua_tmp,'./assets/gambar_samping/'.$encrypteddua);
			move_uploaded_file($foto_tiga_tmp,'./assets/gambar_atas/'.$encryptetiga);
			echo "<script>console.log('Berhasil')</script>";

			$data = array(
						'id_produk' => $id_produk,
						'nama_produk' => $nama_produk,
						'deskripsi' => $deskripsi,
						'harga' => $harga,
						'berat'=> $berat,
						'stok' => $stok,
						'foto_utama'=> $encrypted,
						'foto_samping' => $encrypteddua,
						'foto_atas' => $encryptetiga,
						'id_varian' => $id_varian
			);
			// Array Varian
			$data_varian = array(
				'id_varian' 		    => $id_varian,
				'nama_varian' 			=> $nama_varian,
				'isi_varian'  			=> $isi_varian,
				'nama_varian_dua'       => $nama_varian_dua,
				'isi_varian_dua'        => $isi_varian_dua,
				'id_produk'  		    => $id_produk,
			);
			// Kategori
			$data_kategori = array(
				'id_produk'             => $id_produk,
				'id_kategori'           => $id_kategori
			);
					
					$this->model_barang->input_data($data,'produk');
					// Insert Varian
					$this->model_barang->input_data($data_varian,'varian');
					// Insert Kategori
					$this->model_barang->input_data($data_kategori,'detail_kategori');
					$this->session->set_flashdata('success','Action Completed');
					$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">
		             Data berhasil di input
	               </div>');
					redirect('admin/tambah_produk');
					// echo "<script>console.log('Berhasil')</script>";


		}else{

		}


	}
	// Akhir Tes

	public function tester(){
		$nama_produk = $this->input->post('nama_produk');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$berat = $this->input->post('berat');
		// Samping
		$config['upload_path']          = './assets/gambar_samping';
		$configs['upload_path']          = './assets/gambar_utama';
		$config['allowed_types']        = 'png|jpg|gif';
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya
		$this->upload->initialize($config);
		$this->load->library('upload', $configs);
	
		if ($this->upload->do_upload('foto_upload')){
			$upload_data = $this->upload->data();
			//get the uploaded file name
			$dataa['foto_upload'] = $upload_data['file_name'];
			echo "<script>console.log('Berhasil')</script>";
			
			
				var_dump($dataa);
				// $this->model_barang->input_data($data,'produk');
				// 	echo "<script>console.log('berhasil simpan gambar') </script>";
					// redirect('admin/tambah_produk');
			
		}elseif ($this->upload->do_upload('foto_uploaddua')) {
			$upload_datadua = $this->upload->data();
			//get the uploaded file name
			$datadua['foto_upload'] = $upload_datadua['file_name'];
			echo "<script>console.log('Berhasil')</script>";
			
			
				var_dump($datadua);
		}else{
			echo "<script>console.log('Gagal')</script>";
		}
		
		

	}
    public function do_upload(){
					// Iniliasasi
					
					// $gambar_utama = $_FILES['foto_utama']['name'];
					// $foto_samping = $_FILES['foto_sampingg']['name'];

					// Config Foto
					$config['upload_path'] = './assets/foto_utama';
					// $config['max_size'] = '2048';  //2MB max
					// $config['max_width'] = '4480'; // pixel
					// $config['max_height'] = '4480'; // pixel
					$config['file_name'] = $_FILES['foto_sampingg']['name'];
					$this->upload->initialize($config);
					// Akhir
				if (!empty($_FILES['foto_sampingg']['name'])) {
							$foto = $this->upload->data($config);
							
							   //  'gambar_atas'   => $gambar_atas,
							   var_dump($foto);
							
				   
					// $foto_atas = $_FILES['foto_atas']['name'];
					
					
					
		   

					
				}else{
					echo "<script>console.log('Gagal Masuk')</script>";
				}
	} 


	public function tambah_aksi(){
		$nama_produk = $this->input->post('nama_produk');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$berat = $this->input->post('berat');
        // $foto_utama = $_FILES['foto_utama']['name'];
        // $foto_samping = $_FILES['foto_samping']['name'];
		// $foto_atas = $_FILES['foto_atas']['name'];

		
		
		$config['upload_path']          = '././assets/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto_utama'))
		{
				$error = array('error' => $this->upload->display_errors());

				
		}
		else
		{
				$data = array('upload_data' => $this->upload->data());

				$this->load->view('upload_success', $data);
		
			
			// if($this->upload->do_upload('foto_utama')) {
			// 	echo "<script>console.log('Gagal Upload')</script>";
				
			// }else{
			// 	$foto_utama=$this->upload->data('file_name');
			// 	echo "<script>console.log('berhasil upload Upload')</script>";
			// 	$data = array(
			// 		'nama_produk' => $nama_produk,
			// 		'deskripsi' => $deskripsi,
			// 		'harga' => $harga,
			// 		'berat'=> $berat,
			// 		'foto_utama'=> $foto_utama,
			// 		'foto_samping' => $foto_samping,
			// 		'foto_atas' => $foto_atas
					
			// 	);
			// 	$this->model_barang->input_data($data,'produk');
			// 	echo "<script>console.log('berhasil simpan gambar') </script>";
			// 	redirect('admin/tambah_produk');
			// }
		}
        echo "<script>console.log('Gagal Upload bersih')</script>";
		
        
		

        
		
	}


        // FUNCTION HAPUS
        public function hapus ($brg)
        {
            $where = array('id_produk' => $brg);
            $this->model_barang->hapus_data($where, 'produk');
            redirect('admin/tambah_produk');
        }




    // function hapus(){
    //     $this->model_barang->hapus_produk($brg); 
    //     redirect('admin/tambah_produk');
    // }











    // FUNCTION UPDATE
    public function edit ($brg)
	{
		$where = array('id_produk' =>$brg);
		$data['barang'] = $this->model_barang->edit_barang($where, 'produk')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_barang', $data);
		$this->load->view('templates_admin/footer');
	}

    // FUNCTION UPDATE
	public function update(){
		$id = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$berat = $this->input->post('berat');
        $foto_utama = $_FILES['foto_utama']['name'];
        $foto_samping = $_FILES['foto_samping']['name'];

        // Definisi Gambar
        $data = array(
			'id_produk' => $id,
			'nama_produk' => $nama_produk,
			'deskripsi' => $deskripsi,
			'harga' => $harga,
			'berat'=> $berat,
            'foto_utama'=> $foto_utama,
            'foto_samping' => $foto_samping  
		);

		$where = array(
			'id_produk' => $id
		);

		$this->model_barang->update_data($where,$data, 'produk');
		redirect('admin/tambah_produk');
	}
}
