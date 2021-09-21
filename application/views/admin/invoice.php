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
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Belum Dibayar</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Perlu Dikirim</a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent" >
									<div class="container">
										<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
											<div class="row">
												<div class="col-md-12 mt-2">
													<table>
														<tr>
															<td style="width: 400px;">
																<div class="card_panding" style="padding:10px;background-color:#fff;border-radius:10px;width:100%;height:150px;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;">
																	<table>
																		<td><img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/Baby.tux.sit-black-800x800.png" style="width: 100px;" class="img-fluid" alt=""></td>
																		<td style="width: 10px;"></td>
																		<td>
																			<div class="row">
																				<div class="col-md-12"><h6 style="font-size: 19px;">Sepatu</h6></div>
																				<div class="col-md-12"><p style="color:#999;font-size:13px">Varian</p></div>
																				<div class="col-md-12"><p>x</p></div>
																			</div>
																		</td>
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
										<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
									</div>
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
