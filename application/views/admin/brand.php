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

                    <!-- DataTales Example -->
                    
					<!-- Card -->
					<div class="row">
						<div class="col-md-6 p-2">
							<span>Brand</span>
						</div>
						<div class="col-md-6 p-2 text-right">
							<button class="btn btn-primary" data-toggle="modal" data-target="#add_brand">Tambah Data</button>
						</div>
						<div class="col-md-5 p-2">
							<div class="card_brand" style="padding:7px;border-radius:10px;width: 100%;height:auto;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr style="width: 100%;">
											<th scope="col">No</th>
											<th scope="col" style="width: 400px;">Nama Brand</th>
											<th scope="col" style="width: 600px;">Tanggal</th>
											<th scope="col"><i class="fas fa-cog"></i></th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$no_list = 1;
											?>
											<?php foreach ($show_brand as $show ) : ?>
											<tr>
												<th scope="row"><?php  echo $no_list++?></th>
												<td style="width: 400px;"><?php echo $show->nama_brand ?></td>
												<td style="width: 600px;"><?php echo date($show->tanggal)?></td>
												<td style="width: 500px;"><button type="button" class="btn btn-outline-primary btn-sm"><i class="far fa-edit"></i></button>
												<button type="button" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
												</td>
											</tr>
											<?php endforeach ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="col-md-7 p-2">
							<div class="card_brand" style="padding:7px;border-radius:10px;width: 100%;height:auto;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
											<th scope="col">No</th>
											<th scope="col"><i class="fas fa-cog"></i></th>
											<th scope="col">Icon</th>
											<th scope="col">Sampul</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$no_banner = 1;
											?>
											<?php foreach ($show_brand as $show ) : ?>
											<tr>
												<th scope="row"><?php echo $no_banner++ ?></th>
												<td><button type="button" class="btn btn-outline-primary btn-sm"><i class="far fa-eye"></i></button></td>
												<td><img src="<?php echo base_url().'assets/img_brand/icon/'. $show->icon_brand?>" class="img-fluid" style="width:150px" alt="gambar brand"></td>
												<td><img src="<?php echo base_url().'assets/img_brand/banner/'. $show->banner?>" class="img-fluid" style="width:150px" alt="gambar brand"></td>
											</tr>
											<?php endforeach ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- Akhir Card -->
                    <!-- End of Page Wrapper -->

                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>
					<!-- Modal Tambah Brand -->
					<div class="modal fade" id="add_brand" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="staticBackdropLabel">Data Baru Brand</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="<?php echo base_url(). 'admin/brand/add'?>" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<?php 
										function brand($length = 5, $chars = '1234567890abcdefghijklmnopqrstuvwxyz')
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
										<label for="nama_brand">Nama Brand</label>
										<input type="text" name="nama_brand" class="form-control" placeholder="Masukan Nama Brand">
										<input type="hidden" name="id_brand" value="<?php echo brand() ?>">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-5">
												<div class="upload_box">
													<label for="icon_bran" class="row">
													<div class="col-md-12 text-center">
														<h6><h4>Icon</h4></h6>
													</div>
													<div class="col-md-12 text-center">
														<h5 class="iconimg btn btn-warning">Pilih File</h5>
													</div>
													</label>
													<input type="file" name="icon" id="icon_bran" style="display:none">
													<div class="dimg text-center">
													<img src="<?php echo base_url().'assets/img/icon_brand.jpg'?>" style="width: 300px;height:300px;padding:20px" id="src_icon" class="img-fluid" />
													</div>
												</div>
											</div>
											<div class="col-md-7">
												<div class="upload_box">
													<label for="banner_bran" class="row">
													<div class="col-md-12 text-center">
														<h6><h4>Banner</h4></h6>
													</div>
													<div class="col-md-12 text-center">
														<h5 class="iconimg btn btn-warning">Pilih File</h5>
													</div>
													</label>
													<input type="file" name="banner" id="banner_bran" style="display:none">
													<div class="dimg text-center">
													<img src="<?php echo base_url().'assets/img/banner_brand.jpg' ?>" style="width: 601px;height:200px;padding:20px" id="src_sampul" class="img-fluid" />
													</div>
												</div>
											</div>
										</div>
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
								<button type="submit" name="add_brand" class="btn btn-primary">Simpan</button>
							</div>
							</form>
							</div>
						</div>
					</div>
					<!-- Akhir Tambah Brand -->
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
<!-- Js -->
<script>
	function icon_brand(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            $('#src_icon').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
 $("#icon_bran").change(function(){
    icon_brand(this);
});
function sampul_brand(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            $('#src_sampul').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
 $("#banner_bran").change(function(){
    sampul_brand(this);
});
</script>
<!-- Akhir Js -->
</body>
