
<?php $this->load->view('partial/head') ?>
<!-- Provinsi -->
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: 489a7ec53f6372dc09e2d1e0821e0598"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $d_provinsi = json_decode($response,true);
  
}
?>
<!-- Akhir Provinsi -->
<<<<<<< HEAD

<?php $this->load->view('partial/head'); ?>
=======
>>>>>>> 64cf96730254345462beaa5bdf3b9cd23b41c0db

<!-- loading -->
<div id="load_keranjang">Loading...</div>

  <!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>



<body>
      <!-- section alamat -->
      <section>
          <div class="container" style="max-width: 1340px;"> 
              <h3 class="text-center">Lengkapi Alamat</h3>
                <div class="row flex-column-reverse flex-lg-row">
                    <div class="col-md-6">

                        <!-- FORM UNTUK MENAMBAHKAN DATA -->

                        <form action="<?php echo base_url('alamat/tambah_aksi'); ?>" id="result" method="POST">
							<!-- String ID PRODUK-->
							<?php foreach($berat as $weight) :?>
								<input type="hidden" name="total_berat" value="<?php echo $weight->total_berat ?>">
							<?php endforeach?>
									<?php
											function id_pembeli($length = 9, $chars = '1234567890abcdefghijklmnopqrstuvwxyz')
											{
												if($length > 0)
												{
													$len_chars = (strlen($chars) - 1);
													$the_chars = $chars{rand(0, $len_chars)};
													for ($i = 1; $i < $length; $i = strlen($the_chars))
													{
														$r = $chars{rand(0, $len_chars)};
														if ($r != $the_chars{$i - 1}) $the_chars .=  $r;
													}

													return $the_chars;
												}
											}
									?>
							<!-- Akhir  STRING ID PRODUK -->
                            <div class="form-group">
                                <label for="inputAddress">Kontak</label>
								<input type="hidden" name="ip_alamat" value="<?php echo $_SERVER['REMOTE_ADDR'];?>">
                                <input type="hidden" name="id_pembeli" value="<?php echo id_pembeli()?>">
                                <input type="number" name="no_telepon" class="form-control" id="telepon" placeholder="Masukan no.telepon" required>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Nama Lengkap</label>
                                <input type="text" name="nama_pembeli" class="form-control" id="nama" placeholder="Masukan nama lengkap" required>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="">Provinsi</label>
                                <select id="provinsi" name="provinsi" class="form-control" required>
									<option value="">Pilih Provinsi</option>
									<?php 
									if ($d_provinsi['rajaongkir']['status']['code'] == '200'){
										foreach($d_provinsi['rajaongkir']['results'] as $pv){
											echo "<option value='$pv[province_id]'>$pv[province]</option>";
										}
									}
									?>
                                </select>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="">Kota</label>
                                <select id="kota" name="kota" class="form-control" required>
                                    <option value="">Pilih kota/kabupaten</option>
                                </select>
                                </div>  
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                <label for="inputCity">Kecamatan</label>
                                <input type="text" name="kecamatan" placeholder="Kecamatan" class="form-control">
                                </div>
                                
                                <div class="form-group col-md-6">
                                <label for="inputState">Kode Pos</label>
                                <input type="text" name="kodepos" id="kodepos" class="form-control" id="kodepos" placeholder="Kode Pos">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Alamat</label>
                                <textarea value="alamat" name="alamat" id="alamat" cols="30" rows="10" placeholder="Masukan alamat lengkap (Jln,Kelurahan,RT/RW, Kecamatan, kota, provinsi, dan kodepos )" class="form-control"></textarea>
                            </div>
                            <div>
                                <!-- validasi IP -->
                                
                                <!-- Akhir Validasi IP -->
								<button type="submit" name="tambah" class="btn btn-dark" value="tambah">Confirm Alamat</button>
								<a href="<?php echo base_url('halaman_utama'); ?>" class="btn btn-outline-dark">Kembali Belanja</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-center">
                         <span class="responsive"><img src="<?php echo base_url('assets/gambar/maps.jpg') ?>" class="rounded" width="330px"></span>
                         <p style="font-size:27px;"><b>Yuk Isi Alamat Dulu <b></p>
                         <p>Mohon lengkapi alamat anda sebelum bertransaksi agar lebih memudahkan dalam pengiriman</p>
                    </div>
                </div>
            </div>
      </section>

    <!-- Paralax -->
	<section>
		<div class="container mt-4" style="max-width: 1340px;">
			<div class="paralax">

			</div>
		</div>
	</section>
	<!-- Akhir Paralax -->
      
     
        <?php $this->load->view('partial/footer') ?>
 

        <!-- sweetalert -->
       
        <?php if ($this->session->flashdata('success')): ?>
<<<<<<< HEAD
        <script>
           
=======
            <script>
                Swal.fire(
                'Di tambahkan',
                'Berhasil di tambahkan',
                'success'
                )           
            </script>
        <?php endif; ?>
<<<<<<< HEAD
        
        
      <script>
		  document.getElementById('provinsi').addEventListener('change',function(){
			  fetch("<?php echo base_url('alamat/kota/') ?>"+this.value,{
				  method:'GET',
			  })
			  .then((response)=>response.text())
			  .then((data)=>{
				  console.log(data)
				  document.getElementById('kota').innerHTML= data
			  })
		  })
	  </script>
=======

        <!-- <script>
            $('#form_button_submit').click(function(){
>>>>>>> 75439ab5c1789c399203313bf02121039ca7f4d3

                swal({
                    title:"", 
                    text:"Loading...",
                    type:"success",
                    buttons: false,      
                    closeOnClickOutside: True,
                    timer: 3000,
                    //icon: "success"
                });


<<<<<<< HEAD
=======
                });
        </script> -->
>>>>>>> e16141ee0a2fa309ef4bf53a97e65717d0bd8699
       <!-- akhir sweetalert -->

        <!-- sweetalert 2 -->
        <script>
            $('#form_button_submit').click(function(){
                swal({
                title: "Berhasil!",
                text: "Alamat berhasil di simpan",
                type: "success",
                timer: 3000,
                showConfirmButton: true
                }, function(){
                     
                    window.location.href = "<?php echo base_url('Confirm_cart'); ?>";
                });
            });
>>>>>>> 75439ab5c1789c399203313bf02121039ca7f4d3
        </script>
         <?php endif; ?>
       <!-- akhir sweetalert -->

        <!-- sweetalert data sudah ada -->
        <?php if ($this->session->flashdata('error')): ?>
            <script>
                
                    swal({
                    title: "Alamat Sudah Ada !",
                    text: "Alamat sebelum nya sudah ada",
                    type: "error",
                    timer: 3000,
                    showConfirmButton: true
                    }, function(){
                        
                        window.location.href = "<?php echo base_url('Confirm_cart'); ?>";
                    });
                
            </script>
         <?php endif; ?>

       <!-- load JS -->
       <script>
          $(document).ready(function(){
            $("#load_keranjang").fadeOut(2000);
          });
        </script>

</body>

