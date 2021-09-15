
<?php $this->load->view('partial/head'); ?>
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
                       
                        <form action="<?php echo base_url('alamat/update'); ?>" method="POST">
                        <?php foreach ($show_edit as $edit) :?>
							<!-- String ID PRODUK-->

							<!-- Akhir  STRING ID PRODUK -->
                            <div class="form-group">
                            
                                <label for="inputAddress">Kontak</label>
                                <input type="hidden" name="ip_alamat" value="<?php echo $edit->ip ?>">
                                <input type="hidden" name="id_pembeli" value="<?php echo $edit->id_pembeli ?>"> 
                                <input type="number" name="no_telepon" class="form-control" value="<?php echo $edit->no_telepon?>" id="telepon" placeholder="Masukan no.telepon" required>
                            
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Nama Lengkap</label>
                                <input type="text" name="nama_pembeli" class="form-control" id="nama" value="<?php echo $edit->nama_pembeli ?>" placeholder="Masukan nama lengkap" required>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Provinsi</label>
                                <select id="provinsi" name="provinsi" class="form-control">
                                    <option value="">Pilih Provinsi</option>

                                    <?php foreach($provinsi as $prov){
                                        echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
                                    } ?>
                                    
                                </select>
                                </div>

                                <div class="form-group col-md-6">
                                <label for="inputState">Kota</label>
                                <select id="kota" name="kota" class="form-control">
                                    <option value="">Pilih kota/kabupaten</option>
                                </select>
                                </div>  
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                <label for="inputCity">Kecamatan</label>
                                <select id="kecamatan" name="kecamatan" class="form-control">
                                    <option selected>Pilih Kecamatan</option>
                                </select>
                                </div>
                                
                                <div class="form-group col-md-6">
                                <label for="inputState">Kode Pos</label>
                                <input type="text" name="kodepos" id="kodepos" value="<?php echo $edit->kodepos ?>" class="form-control" id="kodepos" placeholder="Kode Pos">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Alamat</label>
                                
                                <textarea  name="alamat" id="alamat" cols="30" rows="10" placeholder="Masukan alamat lengkap (Jln,Kelurahan,RT/RW, Kecamatan, kota, provinsi, dan kodepos )" class="form-control"><?php echo $edit->alamat ?></textarea>
                            </div>
                            <div>
                                <!-- validasi IP -->
                                
                                <!-- Akhir Validasi IP -->
								<button type="submit" name="tambah" class="btn btn-dark" value="tambah">Confirm Alamat</button>
								<a href="<?php echo base_url('halaman_utama'); ?>" class="btn btn-outline-dark">Kembali Belanja</a>
                            </div>
                            <?php endforeach ?>
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
      
      <div class="">
        <?php $this->load->view('partial/footer') ?>
      </div>

    <!-- sweetalert -->
        
        <!-- <?php if ($this->session->flashdata('success')): ?>
            <script>
                swal({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success",
                button: "Aww yiss!",
                });
            </script>
        <?php endif; ?> -->
      
       <!-- akhir sweetalert -->

</body>

