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

                <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow" style="background: #0049A8;  position: relative;">
                    <?php $this->load->view('admin/partial/topbar')  ?>
                </nav>


                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" style="position: absolute;">

                    <!-- DataTales Example -->
                    
					
					<!-- Cooming Soon -->
						<section>
							<div class="container-fluid">
							<!-- Header -->
							<div class="container-fluid row">
								
									<div class="col-md-4 mt-3">
										<div class="card_dashboard" style="width: 100%;border-radius:20px;height:120px;background-color:#fff;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;position:relative">

												<div class="row container" style="position: absolute;top:30px">
													<div class="col-md-6">
														<table>
															<tr>
																<td><span style="font-family:poppins;font-size:30px;font-weight:bold">20</span></td>
															</tr>
															<tr>
																<td><span style="font-family: Poppins;font-size: 15px;font-weight: 600;">Produk</span></td>
															</tr>
															<tr>
																<td>
																
																</td>
															</tr>
														</table>
													</div>
													<div class="col-md-6">
														<div class="border_admin" style="width: 60px;height:60px;border-radius:50%;background: #FFF4D6;float:right">
															<i class="fa fa-shopping-bag" aria-hidden="true" style=" position: absolute;font-size: 30px;top: 15px;right: 28px;color: #FEBB39;"></i>
														</div>
													</div>
												</div>
										</div>
									</div>
								
								<div class="col-md-4 mt-3">
									<div class="card_dashboard" style="width: 100%;border-radius:20px;height:120px;background-color:#fff;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;position:relative">
										<div class="row container" style="position: absolute;top:30px">
											<div class="col-md-6">
												<table>
													<tr>
														<td><span style="font-family:poppins;font-size:30px;font-weight:bold">4</span></td>
													</tr>
													<tr>
														<td><span style="font-family: Poppins;font-size: 15px;font-weight: 600;">Kategori</span></td>
													</tr>
													<tr>
														<td>
														
														</td>
													</tr>
												</table>
											</div>
											<div class="col-md-6">
												<div class="border_admin" style="width: 60px;height:60px;border-radius:50%;background: #E7EDFF;float:right">
													<i class="fa fa-random" aria-hidden="true" style=" position: absolute;font-size: 30px;top: 15px;right: 28px;color: #3A69FE;"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 mt-3">
									<div class="card_dashboard" style="width: 100%;border-radius:20px;height:120px;background-color:#fff;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;position:relative">
										<div class="row container" style="position: absolute;top:30px">
											<div class="col-md-6">
												<table>
													<tr>
														<td><span style="font-family:poppins;font-size:30px;font-weight:bold">0</span></td>
													</tr>
													<tr>
														<td><span style="font-family: Poppins;font-size: 15px;font-weight: 600;">Blog</span></td>
													</tr>
												</table>	
											</div>
												<div class="col-md-6">
													<div class="border_admin" style="width: 60px;height:60px;border-radius:50%;background: #DCFAF9;float:right">
														<i class="fa fa-rss" aria-hidden="true" style=" position: absolute;font-size: 30px;top: 15px;right: 28px;color: #15DBCC;"></i>
													</div>
												</div>
										</div>
									</div>
								</div>
								
							</div>
							<!-- Akhir Header -->
							<!-- Body -->
							<div class="container-fluid row mt-5">
								<div class="col-md-12">
									<div class="col-md-12">
										<h5 style="font-family: Raleway;font-weight:600">Produk</h5>
									</div>
									<div style="margin-bottom: 15px; width: 100%;border-radius:20px;background-color:#fff;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;position:relative">
										<div class="table-responsive">
											<!-- Table -->
											<table class="table" style="width: 100%; max-width:100%; border-collapse:collapse;">
												<thead style="vertical-align: bottom;">
													<tr>
													<th scope="col">No</th>
													<th scope="col">Produk</th>
													<th scope="col">Nama</th>
													</tr>
												</thead>
												<tbody style="width: 1%; padding: .5rem; vertical-align: top;">

												<?php $no=1; ?>
                                            	<?php foreach ($prod as $brg) : ?>
													<tr>
														<td scope="row"><?php echo $no++ ?></th>
														<td><img style="width:70px;" class="img-fluid" src="<?php echo base_url(). '/assets/gambar_utama/'. $brg->foto_utama ?>"></td>
														<td><?php echo $brg->nama_produk ?></td>
													</tr>
													<!-- <tr>
														<th scope="row">2</th>
														<td><img style="width:70px;" class="img-fluid" src="<?php echo base_url('/assets/gambar_utama/pasmina1.jpg') ?>"></td>
														<td>Pashmina Babydoll / pashmina Ceruty baby doll - Black</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td><img style="width:70px;" class="img-fluid" src="<?php echo base_url('/assets/gambar_utama/sienna1.jpg') ?>"></td>
														<td>SiennaLuxury Voal / Voal Premium - Sand</td>
													</tr>
													<tr>
														<th scope="row">4</th>
														<td><img style="width:70px;" class="img-fluid" src="<?php echo base_url('/assets/gambar_utama/derby1.jpg') ?>"></td>
														<td>SEPATU PRIA DERBY SINTESIS - 40</td>
													</tr> -->
												<?php endforeach ?>  
												</tbody>
											</table>
											<!-- Akhir Table -->
										</div>	
									</div>
								</div>
								<!-- <div class="col-md-4">
									<div class="row">
										<div class="col-md-12 text-center">
											<h6 style="font-size: 25px;font-family:Raleway;font-weight:bold">SCAN NOW</h6>
										</div>
										<div style="width: 100%;border-radius:20px;height:320px;background-color:#fff;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;position:relative">
											<div class="row container">
												<div class="col-md-12 text-center">
													<img src="<?php echo base_url().'assets/img/qrcode.png' ?>" class="d-flex justify-content-center img-fluid text-center" style="position:absolute" alt="">
												</div>
											</div>
										</div>
									</div>
								</div> -->
							</div>
							<!-- Akhir Body -->
							</div>
						</section>
					<!-- Akhir Cooming Soon -->

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

</body>
