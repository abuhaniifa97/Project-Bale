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
                <H4 style="color: #222222;">Invoice pembelian produk</H4>
                
                <div class="card shadow mb-4">
                    <div class="card-body">
                    <?php foreach ($campur as $buy) :?>
                        <div class="card-header">
                            <p><?php echo $buy->transaction_time ?></p>
                        </div>
                        <div class="col-md-12">
							<div class="row">
                           
								<div class="col-md-4">
									
									<div class="row">
										<div class="col-md-12">
											<span style="font-weight: bold;">Pembeli</span>
											<br>
                                            <span style="font-weight: bold;"><?php echo $buy->ip?></span>
                                            <br>
											<span style="font-weight: bold;"><?php echo $buy->nama_pembeli?></span>
										</div>
										<div class="col-md-12">
											<span><?php echo $buy->no_telepon?></span>
										</div>
										<div class="col-md-12">
											<p><?php echo $buy->alamat?></p>
										</div>
									</div>
									
								</div>
								<div class="col-md-4">
									<div class="row">
										<div class="col-md-12">
											<span style="font-weight: bold;">Detail Order</span>
                                            <br>
											<span style="font-weight: bold;"></span>
											<br>
											<span style="font-weight: bold;"><?php echo $buy->nama_produk?></span>
                                            <br>
											<span style="font-weight: bold;">qty <?php echo $buy->qty?></span>
										</div>
										<div class="col-md-12">
											<span><?php echo $buy->harga?></span>
										</div>
										<div class="col-md-12">
											<p><?php echo $buy->total_harga?></p>
										</div>
									</div>
								</div>
                                <div class="col-md-4">
									<div class="row">
										<div class="col-md-12">
											<span style="font-weight: bold;">Transaksi</span>
                                            <br>
											<span style="font-weight: bold;"></span>
											<br>
											<span style="font-weight: bold;">Metode pembayaran : <?php echo $buy->bank?></span>
                                            <br>
											<span style="font-weight: bold;"></span>
										</div>
										<div class="col-md-12">
											<span></span>
										</div>
										<div class="col-md-12">
											<p></p>
										</div>
									</div>
								</div>
							</div>
                            <?php endforeach?>
							<hr style="width: 100%;">
						</div>
                        <div class="col-md-12 text-right">
                            <a href="cetak"><button class="btn btn-dark mt-3" data-target="_BLANK" style="width: 180px;"><span style="color:ffff;">Print</span></button></a>
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
