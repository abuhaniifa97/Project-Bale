<?php $this->load->view('admin/partial/head') ?>

<!-- CDN DATA TABLES -->


<!-- JS DATA TABLES -->

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php $this->load->view('admin/partial/sidebar') ?>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content" style="position: relative;">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow" style="background: #0049A8; position: relative;">
                    <?php $this->load->view('admin/partial/topbar')  ?>
                </nav>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" style="position: absolute;">

                    <!-- DataTales Example -->
                    <nav class="navbar navbar-light bg-light justify-content-between">
                        <a class="navbar-brand"><b style=" left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 500; font-size: 25px; line-height: 37px; display: flex; align-items: center; color: #222222;">Tambah Produk</b></a>
                            <a href="" class="" data-toggle="modal" data-target="#tambah_baru">
                            <button class="btn btn-primary " style="width: 180px;">Tambah Baru</button></a>
                    </nav>
                    <div class="" style="box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;padding:15px;border-radius:10px">
                        <div class="cardq">
						<?php echo $this->session->flashdata('pesan'); ?> 
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id" width="100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Produk</th>
                                                <th scope="col">Nama Produk</th>
                                                <th scope="col">Berat</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; ?>
                                           
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td> 2</td>
                                                <td>2</td>
                                                <td>2</td>
                                                <td>Rp.></td>
                                                <td>
                                                <div class="row">
                                                    <div class="col-md-2" style="padding:5px;">
                                                            <button data-toggle="modal" data-target="#edit_data" class="btn btn-small" style="background: #FFFFFF; box-shadow: 0px 23px 80px rgba(0, 0, 0, 0.12), 0px 9.60885px 33.4221px rgba(0, 0, 0, 0.0862625), 0px 5.13735px 17.869px rgba(0, 0, 0, 0.0715329), 0px 2.87996px 10.0172px rgba(0, 0, 0, 0.06), 0px 1.52952px 5.32008px rgba(0, 0, 0, 0.0484671), 0px 0.636469px 2.21381px rgba(0, 0, 0, 0.0337375);"><i class="fa fa-pencil-square-o" style="color:#FDD922;" aria-hidden="true"></i></button>
                                                    </div>
                                                    
                                                    <div class="col-md-2"></div>

                                                    <div class="col-md-2" style="padding:5px;">
														<a href="" onclick="return confirm('Yakin akan menghapus data?')"><button type="button" data="modal"  class="btn btn-small" style="background: #FFFFFF; box-shadow: 0px 23px 80px rgba(0, 0, 0, 0.12), 0px 9.60885px 33.4221px rgba(0, 0, 0, 0.0862625), 0px 5.13735px 17.869px rgba(0, 0, 0, 0.0715329), 0px 2.87996px 10.0172px rgba(0, 0, 0, 0.06), 0px 1.52952px 5.32008px rgba(0, 0, 0, 0.0484671), 0px 0.636469px 2.21381px rgba(0, 0, 0, 0.0337375);"><i class="fa fa-trash" style="color:#FC185A;" aria-hidden="true"></i></button></a>
                                                    </div>
                                                </div>                           
												</td>
												<!-- Modal Edit -->
												<div class="modal fade" id="edit_data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Ubah Data Produk</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
																
																<form  action="<?php  echo base_url('admin/tambah_produk/ubah_data_produk');?>"  method="post" enctype="multipart/form-data">
																<!-- String ID PRODUK-->
																<!-- Akhir  STRING ID PRODUK -->
																<div class="form-group">
																	<label>Nama barang</label>
																	<input type="hidden" name="id_produk_edit">
																	<input type="text" name="nama_produk_edit" class="form-control" >
																</div>

																<div class="form-group">
																	<label>Deskripsi</label>
																	<textarea name="deskripsi_edit" id="" cols="30" rows="10" class="form-control"></textarea>
																</div>
																	<div class="row">
																		<div class="col-md-6">
																			<div class="form-group">
																				<label>Harga</label>
																				<input type="number" name="harga_edit" class="form-control" >
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label>Berat (Gram)</label>
																				<input type="number" name="berat_edit"  class="form-control">
																			</div>
																		</div>
																	</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
															<button type="submit" class="btn btn-primary" name="btn_add">Ubah</button>
														</div>

																</form>
														
														</div>
													</div>
												</div>
												<!-- Akhir Modal -->
                                            </tr>
                                         
                                        </tbody>
                                </table>
                                        
                                <script type="text/javascript">
                                    $(document).ready( function () {
                                        $('#table_id').DataTable();
                                    } );
                                </script>
                            </div>
                            <!-- End of Main Content -->

                            <!-- Footer -->
                            <?php $this->load->view('admin/partial/footer') ?>
                            <!-- End of Footer -->

                        </div>
                        <!-- End of Content Wrapper -->

                    </div>
                    <!-- End of Page Wrapper -->

                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>

                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="login.html">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal Card Tambah Baru -->
                    <div class="modal fade" id="tambah_baru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Input Produk</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
									
									<form  action="<?php echo base_url('admin/tambah_produk/campur');?>"  method="post" enctype="multipart/form-data">
									<!-- String ID PRODUK-->
									<?php
											function varian($length = 7, $chars = '1234567890abcdefghijklmnopqrstuvwxyz')
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
											function produk($length = 8, $chars = '1234567890abcdefghijklmnopqrstuvwxyz')
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
										<!-- Foto -->
										<div class="form-group">
											<div class="row">
												<div class="col-md-4">
													<div class="upload_box">
														<label for="foto_utama" class="row">
														<div class="col-md-12 text-center">
															<h6><h4>Icon</h4></h6>
														</div>
														<div class="col-md-12 text-center">
															<h5 class="iconimg btn btn-warning">Pilih File</h5>
														</div>
														</label>
														<input type="file" name="foto_upload" id="foto_utama" style="display:none">
														<div class="dimg text-center">
														<img src="<?php echo base_url().'assets/img/icon_brand.jpg'?>" style="width: 300px;height:300px;padding:20px" id="src_foto_utama" class="img-fluid" />
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="upload_box">
														<label for="foto_samping" class="row">
														<div class="col-md-12 text-center">
															<h6><h4>Icon</h4></h6>
														</div>
														<div class="col-md-12 text-center">
															<h5 class="iconimg btn btn-warning">Pilih File</h5>
														</div>
														</label>
														<input type="file" name="foto_uploaddua" id="foto_samping" style="display:none">
														<div class="dimg text-center">
														<img src="<?php echo base_url().'assets/img/icon_brand.jpg'?>" style="width: 300px;height:300px;padding:20px" id="src_foto_samping" class="img-fluid" />
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="upload_box">
														<label for="foto_atas" class="row">
														<div class="col-md-12 text-center">
															<h6><h4>Icon</h4></h6>
														</div>
														<div class="col-md-12 text-center">
															<h5 class="iconimg btn btn-warning">Pilih File</h5>
														</div>
														</label>
														<input type="file" name="foto_uploadtiga" id="foto_atas" style="display:none">
														<div class="dimg text-center">
														<img src="<?php echo base_url().'assets/img/icon_brand.jpg'?>" style="width: 300px;height:300px;padding:20px" id="src_foto_atas" class="img-fluid" />
														</div>
													</div>
												</div>
											</div>
											
										</div> 
									<!-- Akhir Foto -->
									<div class="form-group">
										<label>Nama barang</label>
										<input type="hidden" name="id_varian" value="<?php echo varian()?>">
										<input type="hidden" name="id_produk" value="<?php echo produk()?>">
										<input type="hidden" name="status" value="Aktif">
										<input type="text" name="nama_produk" class="form-control" >
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-6">
												<label for="Kategori">Brand</label>
												<select name="list_brand" id="list_kategori" class="form-control">
													<option>Pilih Brand</option>
														<?php foreach($d_brand as $brand) : ?>
														<option value="<?php echo $brand->id_brand?>"><?php echo $brand->nama_brand?></option>
														<?php endforeach?>
												</select>
											</div>
											<div class="col-md-6">
												<label for="Kategori">Kategori</label>
												<select name="list_kategori" id="list_kategori" class="form-control">
													<option>Pilih Kategori</option>
														<?php foreach($d_kategori as $kat): ?>
														<option value="<?php echo $kat->id_kategori?>"><?php echo $kat->nama_kategori?></option>
														<?php endforeach?>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Deskripsi</label>
										<textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
									</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Harga</label>
													<input type="number" name="harga" class="form-control" placeholder="Rp.">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Berat (Gram)</label>
													<input type="number" name="berat" class="form-control" placeholder="gr" required>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="Stok">Stok</label>
													<input type="number" name="stok" class="form-control" placeholder="1" required>
												</div>
											</div>
										</div>
									<!-- Varian -->
									<div class="form-group" id="tmb_varian">
										<span>Untuk menambahkan Varian Klik button dibawah</span>
										<br>
										<button type="button" id="btn_variansatu" class="btn btn-dark" onclick="btn_tambah_varian()" >Tambah Varian</button>
									</div>
									<div class="form-group" style="display:none" id="tampil_var">
										<label for="">Varian</label>
										<select name="nama_varian" class="form-control" id="id_var" onchange="show_ukuran()">
											<option value="">Pilih Varian</option>
											<option value="Warna" >Warna</option>
											<option value="Ukuran" >Ukuran</option>
										</select>
									</div>
									<!-- Ukuran -->
									<div class="form-group" style="display:none" id="sect_ukuran">
										<label for="Ukuran">Ukuran</label>
										<textarea name="isi_varian" id="" cols="5" class="form-control" rows="5" placeholder="30,33,S,M,L,XL"></textarea>
									</div>
									<!-- Warna -->
									<div class="form-group"  id="sect_warna" style="display:none">
										<label for="Warna">Warna</label>
										<textarea name="isi_varian" id="" cols="5" class="form-control" placeholder="maroon,hitam,hijau" rows="5"></textarea>
									</div>
									<!-- Varian 2 -->
									<div id="tmb_varian_dua" style="display: none;">
										<span>Untuk menambahkan Varian Klik button dibwah</span>
										<br>
										<button type="button" class="btn btn-dark" onclick="btn_tambah_varian_dua()">Tambah Varian</button>
									</div>
									<div class="form-group" style="display:none" id="tampil_var_dua">
										<label for="">Varian</label>
										<select name="nama_varian_dua" class="form-control" id="id_var_dua" onchange="show_variandua()">
											<option value="">Pilih Varian</option>
											<option value="Warna" >Warna</option>
											<option value="Ukuran" >Ukuran</option>
										</select>
									</div>
									<div class="itemdua">
										<!-- Ukuran -->
										<div class="form-group" style="display:none" id="sect_ukuran_dua">
											<label for="Ukuran">Ukuran</label>
											<textarea name="isi_varian_dua" id="" cols="5" class="form-control" rows="5" placeholder="30,33,S,M,L,XL"></textarea>
										</div>
										<!-- Warna -->
										<div class="form-group"  id="sect_warna_dua" style="display:none">
											<label for="Warna">Warna</label>
											<textarea name="isi_varian_dua" id="" cols="5" class="form-control" placeholder="maroon,hitam,hijau" rows="5"></textarea>
										</div>
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" name="btn_add">Simpan</button>
							</div>

									</form>
							
							</div>
						</div>
                    </div>
                    <!-- akhir modal card Tambah Baru -->


                    <!-- FUNCTION DATA TABLE -->
                   

                    <!-- CDN JQUERY DATA TABLES -->
                    

                    <!-- Bootstrap core JavaScript-->
                    
                    <script src="<?= base_url() ?>template_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    

                    <!--font awesome  -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                    <!-- Custom scripts for all pages-->
                    <script src="<?= base_url() ?>template_admin/js/sb-admin-2.min.js"></script>

                </div>
            </div>
        </div>
	</div>
	<!-- Validasi Varian -->
	<!-- Alert -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
	<script>
		function btn_tambah_varian(){
			document.getElementById("tampil_var").style.display = "block";
			document.getElementById("btn_variansatu").style.display = "none";
		}
		
		function btn_tambah_varian_dua(){
			document.getElementById("tampil_var_dua").style.display = "block";
			
		}
		function show_ukuran(){
			
			var x = document.getElementById("id_var").value;
			
  			if(x == "Ukuran"){
				
				document.getElementById("sect_ukuran").style.display = "block";
				// Remove
				var warna = document.getElementById("sect_warna");
				warna.parentNode.removeChild(warna);
				// Akhir Remove
				document.getElementById("tmb_varian_dua").style.display = "block";
				document.getElementById("sect_warna_dua").style.display = "none";
				document.getElementById("sect_ukuran_dua").style.display = "none";
			  }else if(x == "Warna"){
				
				// Akhir Remove
				document.getElementById("sect_warna").style.display = "block";
				// Remove
				var ukuran = document.getElementById("sect_ukuran");
				ukuran.parentNode.removeChild(ukuran);
				// Akhir Remove
				document.getElementById("tmb_varian_dua").style.display = "block";
				document.getElementById("sect_warna_dua").style.display = "none";
				document.getElementById("sect_ukuran_dua").style.display = "none";
			  }
			
		}
		function show_variandua(){
			
			var y = document.getElementById("id_var_dua").value

			if(y == "Ukuran"){
				
				document.getElementById("sect_ukuran_dua").style.display = "block";
				// Remove
				var warna_dua =	document.getElementById("sect_warna_dua");
				warna_dua.parentNode.removeChild(warna_dua);
				// Akhir Remove
				document.getElementById("tmb_varian_dua").style.display = "none";
			}else if( y = "Warna"){
				
				document.getElementById("sect_warna_dua").style.display = "block";
				// Remove
				var ukuran_dua = document.getElementById("sect_ukuran_dua");
				ukuran_dua.parentNode.removeChild(ukuran_dua);
				// Akhir Remove
				document.getElementById("tmb_varian_dua").style.display = "none";
			}
		}
	</script>                
	<!-- Akhir Validasi -->
	<!-- Preview Foto -->
	<script>
		function foto_utama(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$('#src_foto_utama').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#foto_utama").change(function(){
			foto_utama(this);
		});
		// Foto Samping
		function foto_samping(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$('#src_foto_samping').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#foto_samping").change(function(){
			foto_samping(this);
		});
		// Foto Atas
		function foto_atas(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$('#src_foto_atas').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#foto_atas").change(function(){
			foto_atas(this);
		});
	</script>
	<!-- Akhir Preview Foto -->
	<!-- sweetalert -->
	<?php if ($this->session->flashdata('success')): ?>
		<script>
			swal("Data terhapus", "Data berhasil di hapus!", "success");
		</script>
	<?php endif; ?>
	<!--akhir sweetalert -->
	

</body>
