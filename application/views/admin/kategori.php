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
            <div id="content">

                <!-- Topbar -->

                <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow" style="background: #0049A8;">
                    <?php $this->load->view('admin/partial/topbar')  ?>
                </nav>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- End of Page Wrapper -->
					<!-- Card -->
					<div class="row">
						<div class="col-md-6 p-2">
							<span>Kategori</span>
						</div>
						<div class="col-md-6 p-2 text-right">
							<button class="btn btn-primary" data-toggle="modal" data-target="#tambah_baru_ketegori">Tambah Data</button>
						</div>
						<div class="col-md-12 mt-2">
							<div class="card_kategori" style="padding: 10px;border-radius:7px;width:100%;height:500px;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;">
								<div class="table-responsive mt-3" style="overflow-x: auto;">
								<table class="table table-striped">
									<thead>
										<tr>
											<th style="width:200px" scope="col">No</th>
											<th style="width:200px" scope="col">Foto</th>
											<th style="width:200px" scope="col">Nama Kategori</th>
											<th style="width:200px" scope="col"><i class="fas fa-cog"></i></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($show_kategori as $show) : ?>
										<tr>
											<th style="width:200px" scope="row">1</th>
											<td style="width: 200px;"><img src="<?php echo base_url().'assets/img_kategori/'. $show->img_sampul?>" alt="sampul kategori" class="img-fluid" style="object-fit: cover;width:150px;height:150px"></td>
											<td style="width:200px"><?php echo $show->nama_kategori ?></td>
											<td style="width:200px">
											    <button  style="width:80px" class="btn-sm btn btn-outline-dark"><i class="far fa-image"></i></button>&nbsp<button  style="width:80px" class="btn-sm btn btn-outline-dark"><i class="far fa-edit"></i></button>&nbsp<button  style="width:80px" class="btn-sm btn btn-outline-dark"><i style="color:red" class="fas fa-trash"></i></button>
											</td>
										</tr>
										<?php  endforeach?>
									</tbody>
								</table>
								</div>
							</div>
						</div>
					</div>
					<!-- Akhir Card -->
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


                    <!-- Modal Card -->
                    <div class="modal fade" id="tambah_baru_ketegori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Baru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url(). 'admin/kategori/add'?>" method="post" enctype="multipart/form-data">
								<?php 
									function kategori($length = 9, $chars = '1234567890abcdefghijklmnopqrstuvwxyz')
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
                                <div class="form-group">
                                    <label>Nama Kategori</label>
									<input type="text" name="nama_kategori" class="form-control" placeholder="Masukan Nama Kategori" required>
									<input type="hidden" name="id_kategori" value="<?php echo kategori() ?>" class="form-control">
								</div>
								<div class="form-group">
									<label for=""><span class="badge badge-pill badge-danger">!</span>Sampul Kategori (500 x 500 )</label>
									<label class=newbtn style=" cursor: pointer;width:100%">
										<img id="blah" src="http://placehold.it/120x120" style="width:100%;margin-top:20px;">
										<input id="pic" name="img_sampul" class='pis' onchange="readURL(this);" type="file" style=" display: none;">
									</label>
								</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" name="btn_add_kategori" class="btn btn-primary">Simpan</button>
                        </div>

                        </form>
                        
                        </div>
                    </div>
                    </div>
                    <!-- akhir modal card -->

                    <!-- FUNCTION DATA TABLE -->
                   

                    <!-- CDN JQUERY DATA TABLES -->
                    

                    <!-- Bootstrap core JavaScript-->
                    
                    <script src="<?= base_url() ?>template_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    

                    <!--font awesome  -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                    <!-- Custom scripts for all pages-->
					<script src="<?= base_url() ?>template_admin/js/sb-admin-2.min.js"></script>
					<script>
						 $('.newbtn').bind("click" , function () {
									$('#pic').click();
							});
							
							function readURL(input) {
										if (input.files && input.files[0]) {
											var reader = new FileReader();

											reader.onload = function (e) {
												$('#blah')
													.attr('src', e.target.result);
											};

											reader.readAsDataURL(input.files[0]);
										}
									}
					</script>

                </div>
            </div>
        </div>
    </div>

</body>
