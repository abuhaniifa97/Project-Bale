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
				<div class="container-fluid" style="position: absolute;">
					<div class="row">
						<div class="col-md-12">
							<h6>Daftar Pesanan</h6>
						</div>
						<div class="col-md-12">
							<div class="card_penjualan" style="width:100%;height:250px;background-color: #F5F6F8;border-radius:10px;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;">
								<!-- Tab Bootstarp -->
								<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Belum Dibayar</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Di Proses</a>
									</li>
								</ul>
								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
											<div class="row">
												<div class="col-md-12 mt-2">
													<table>
														<tr>
															<td style="width: 400px;">
																<div class="card_panding" style="padding:10px;background-color:#fff;border-radius:10px;width:100%;height:auto;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;">
																	<table>
																		<!-- List Produk -->
																		<?php foreach ($tbl_order as $order) :?>																		<tr>
																			<td><img src="<?php echo base_url().'assets/gambar_utama/'. $order->foto_utama?>" style="width: 100px;" class="img-fluid" alt=""></td>
																			<td style="width: 10px;"></td>
																			<td>
																				<div class="row">
																					<div class="col-md-12"><h6 style="font-size: 19px;font-variant: all-petite-caps;"><?php echo $order->nama_produk ?></h6></div>
																					<div class="col-md-12">
																						<div class="row">
																							<div class="col-md-2"><p style="color:#999;font-size:13px"><?php echo $order->isi_varian_satu ?></p></div>
																							<div class="col-md-3"><p style="color:#999;font-size:13px"><?php echo $order->isi_varian_dua ?></p></div>
																						</div>	
																					</div>
																					<div class="col-md-12">
																						<table>
																							<tr>
																								<td><p><?php echo $order->qty ?>x</p></td>
																								<td><p style="font-weight: bold;font-size:13px;font-style:italic">| Rp.<?php echo $order->harga ?></p></td>
																							</tr>
																						</table>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<?php endforeach ?>
																		<!-- Akhir Produk -->
																	</table>
																</div>
															</td>
															<td style="width: 50px;"></td>
															<td style="width: 400pxs;">
																<div class="row">
																	<div class="col-md-12 p-1">
																		<button type="button" class="btn btn-primary btn-lg" style="width: 200px;">Terima Pesanan</button>
																	</div>
																	<div class="col-md-12 p-1">
																		<button type="button" class="btn btn-lg btn-outline-primary" style="width: 200px;">Tolak Pesanan</button>
																	</div>
																</div>
															</td>
														</tr>
														
													</table>
													<hr>
												</div>
											</div>
									</div>
									<!-- Diproses -->
									<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
											<div class="row">
												<div class="col-md-12 mt-2">
													<table>
														<tr>
															<td style="width: 400px;">
																<div class="card_panding" style="padding:10px;background-color:#fff;border-radius:10px;width:100%;height:auto;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;">
																	<table>
																		<!-- List Produk -->
																		<?php foreach ($order_bayar as $order) :?>																		<tr>
																			<td><img src="<?php echo base_url().'assets/gambar_utama/'. $order->foto_utama?>" style="width: 100px;" class="img-fluid" alt=""></td>
																			<td style="width: 10px;"></td>
																			<td>
																				<div class="row">
																					<div class="col-md-12"><h6 style="font-size: 19px;font-variant: all-petite-caps;"><?php echo $order->nama_produk ?></h6></div>
																					<div class="col-md-12">
																						<div class="row">
																							<div class="col-md-2"><p style="color:#999;font-size:13px"><?php echo $order->isi_varian_satu ?></p></div>
																							<div class="col-md-3"><p style="color:#999;font-size:13px"><?php echo $order->isi_varian_dua ?></p></div>
																						</div>	
																					</div>
																					<div class="col-md-12">
																						<table>
																							<tr>
																								<td><p><?php echo $order->qty ?>x</p></td>
																								<td><p style="font-weight: bold;font-size:13px;font-style:italic">| Rp.<?php echo $order->harga ?></p></td>
																							</tr>
																						</table>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<?php endforeach ?>
																		<!-- Akhir Produk -->
																	</table>
																</div>
															</td>
															<td style="width: 50px;"></td>
															<td style="width: 400pxs;">
																<div class="row">
																	<div class="col-md-12 p-1">
																		<button type="button" class="btn btn-primary btn-lg" style="width: 200px;">Cetak Pesanan</button>
																	</div>
																</div>
															</td>
														</tr>
														
													</table>
													<hr>
												</div>
											</div>
									</div>
								</div>
								<!-- Akhir Update -->
								
								</div>
								<!-- Akhir Bootstrap -->
							</div>
						</div>
					</div>
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

                <!-- Begin Page Content -->
                

                    <!-- DataTales Example -->
                    
                    

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
	<!-- Validasi Varian -->

    <!-- Print -->
    <!-- <script>
		window.print();
	</script> -->
    
    <!-- akhir print -->

	<!-- Alert -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
	<!-- Akhir Validasi -->

</body>
