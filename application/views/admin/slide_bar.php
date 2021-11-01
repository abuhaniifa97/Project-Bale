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
                                     <?php
											function id_banner($length = 10, $chars = '1234567890abcdefghijklmnopqrstuvwxyz')
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <nav class="navbar navbar-light bg-light justify-content-between">
                        <a class="navbar-brand"><b style=" left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 500; font-size: 25px; line-height: 37px; display: flex; align-items: center; color: #222222;">Tambah Banner Baru</b></a>
                            <a href="" class="" data-toggle="modal" data-target="#tambah_baru">
                            <button class="btn btn-primary " style="width: 180px;">Tambah banner</button></a>
                    </nav>
                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id" width="100%">
                                        <thead>
                                            <tr>
                                                <th scope="col"  style="width: 20px;">No</th>
                                                <th scope="col " style="width: 200px;">Nama Promo </th>
                                                <th scope="col"  style="width: 200px;">Banner</th>
                                                <th scope="col"  style="width: 50px;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $no=1; ?>
											<?php foreach ($show_promo as $promo) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td>2</td>
                                                <td><img src="" class="img-fluid" style="width: 200px; left: px; top: 454px" alt=""></td>
                                                <td>   
                                                <div class="row"> 
                                                    <div class="col-md-6" style="padding:5px; margin-right: 30px;">
                                                        <a href="" onclick="return confirm('Yakin akan menghapus data?')"><button type="button" data="modal"  class="btn btn-small" style="background: #FFFFFF; box-shadow: 0px 23px 80px rgba(0, 0, 0, 0.12), 0px 9.60885px 33.4221px rgba(0, 0, 0, 0.0862625), 0px 5.13735px 17.869px rgba(0, 0, 0, 0.0715329), 0px 2.87996px 10.0172px rgba(0, 0, 0, 0.06), 0px 1.52952px 5.32008px rgba(0, 0, 0, 0.0484671), 0px 0.636469px 2.21381px rgba(0, 0, 0, 0.0337375);"><i class="fa fa-trash" style="color:#FC185A;" aria-hidden="true"></i></button></a>
                                                    <div class="col-md-6 text-center" >
                                                    	<a href="" onclick="return confirm('Yakin akan menghapus data?')"><button type="button" data="modal"  class="btn btn-small" style="background: #FFFFFF; box-shadow: 0px 23px 80px rgba(0, 0, 0, 0.12), 0px 9.60885px 33.4221px rgba(0, 0, 0, 0.0862625), 0px 5.13735px 17.869px rgba(0, 0, 0, 0.0715329), 0px 2.87996px 10.0172px rgba(0, 0, 0, 0.06), 0px 1.52952px 5.32008px rgba(0, 0, 0, 0.0484671), 0px 0.636469px 2.21381px rgba(0, 0, 0, 0.0337375);"><i class="fa fa-trash" style="color:#FC185A;" aria-hidden="true"></i></button></a>	
                                                    </div>
                                                </div>  
                                                </td>
											</tr>       
											<?php endforeach?>
                                        </tbody>
                                </table>
                            </div>
                            <!-- End of Main Content -->
                            <div class="modal fade" id="tambah_baru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Banner Baru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="<?php echo base_url().'admin/slide_bar/tambah_banner'?>" method="post" enctype="multipart/form-data">
                               <input type="hidden" name="id_banner" value="<?php echo id_banner()?>">
                                    <label>Nama banner</label>
                                      <input type="text" name="nama_banner" class="form-control">
                                       <div class="form-group">
                                        <label>Gambar Banner</label>
                                        <input type="file" id="imgInp"name="gambar_banner" class="form-control">
                                        <br>
                                        <img id="blah" src="<?php echo base_url().'assets/img/contoh.jpg'?>" alt="your image" style="width: 100%;"/>
                                       </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="btn_banner" class="btn btn-primary">Simpan</button>
                                </div>
                                </form>
                                </div>
                            </div>
                            </div>
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


                    <!-- Modal Card -->
                    <!-- <div class="modal fade" id="tambah_baru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Baru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        
                               <h5>varian</h5>
                
                                    <div class="form-group">
                                       <label>Nama Varian</label>
                                       <input type="text" name="nama_varian" class="form-control">
                                     </div>
                                    
                                    <label>isi varian</label>
								      <select class="form-control" name="isi_varian">
                                       
                                      </select>
                                   
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                        </form>
                        
                        </div>
                    </div>
                    </div>
                    -->
                    
                    
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
                    <!-- sc image preview -->
                                          <script>
                                                function readURL(input) {
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();
                                                    
                                                    reader.onload = function (e) {
                                                        $('#blah').attr('src', e.target.result);
                                                    }
                                                    
                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                                            
                                            $("#imgInp").change(function(){
                                                readURL(this);
                                            });
                                        </script>
	                                  <!-- akhir -->
                    <!-- data tabale -->
                    <script type="text/javascript">
                         $(document).ready( function () {
                         $('#table_id').DataTable();
                         } );
                     </script>
                </div>
            </div>
        </div>
    </div>

</body>
