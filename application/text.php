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
                    <nav class="navbar navbar-light bg-light justify-content-between">
                        <a class="navbar-brand"><b style=" left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 500; font-size: 25px; line-height: 37px; display: flex; align-items: center; color: #222222;">Tambah Produk</b></a>
                            <a href="" class="" data-toggle="modal" data-target="#tambah_baru">
                            <button class="btn btn-primary " style="width: 180px;">Tambah Baru</button></a>
                    </nav>
                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id" width="100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Produk</th>
                                                <th scope="col">Nama Produk</th>
                                                <th scope="col">Berat</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col" colspan="3">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; ?>
                                            <?Php foreach ($item as $brg) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><img src="<?php echo base_url(). '/assets/gambar_utama/'. $brg->foto_utama ?>" class="img-fluid" style="width: 100px; left: px; top: 454px" alt=""></td>
                                                <td><?php echo $brg->nama_produk ?></td>
                                                <td><?php echo $brg->berat ?></td>
                                                <td><?php echo $brg->harga ?></td>
                                                <td>
                                                <div class="row">
                                                    <div class="col-md-2" style="padding:5px;">
                                                        <a href="" data-toggle="modal" data-target="#edit_data">
                                                            <button type="submit" class="btn btn-small" style="background: #FFFFFF; box-shadow: 0px 23px 80px rgba(0, 0, 0, 0.12), 0px 9.60885px 33.4221px rgba(0, 0, 0, 0.0862625), 0px 5.13735px 17.869px rgba(0, 0, 0, 0.0715329), 0px 2.87996px 10.0172px rgba(0, 0, 0, 0.06), 0px 1.52952px 5.32008px rgba(0, 0, 0, 0.0484671), 0px 0.636469px 2.21381px rgba(0, 0, 0, 0.0337375);"><i class="fa fa-pencil-square-o" style="color:#FDD922;" aria-hidden="true"></i></button>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="col-md-2"></div>

                                                    <div class="col-md-2" style="padding:5px;">
                                                        <?php echo anchor('admin/tambah_produk/hapus/' .$brg->id_produk, 
                                                            '<button type="button" data="modal"  class="btn btn-small" style="background: #FFFFFF; box-shadow: 0px 23px 80px rgba(0, 0, 0, 0.12), 0px 9.60885px 33.4221px rgba(0, 0, 0, 0.0862625), 0px 5.13735px 17.869px rgba(0, 0, 0, 0.0715329), 0px 2.87996px 10.0172px rgba(0, 0, 0, 0.06), 0px 1.52952px 5.32008px rgba(0, 0, 0, 0.0484671), 0px 0.636469px 2.21381px rgba(0, 0, 0, 0.0337375);"><i class="fa fa-trash" style="color:#FC185A;" aria-hidden="true"></i></button>')?>
                                                    </div>
                                                </div>                           
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
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


                    <!-- Modal Card -->
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
                            <form action="<?php echo base_url(). 'admin/tambah_produk/tambah_aksi'?>" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label>Nama barang</label>
                                    <input type="text" name="nama_produk" class="form-control" required="harus di isi!">
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" required="harus di isi!"></textarea>
                                </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Harga</label>
                                                <input type="number" name="harga" class="form-control" required="harus di isi!">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Berat</label>
                                                <input type="text" name="berat" class="form-control" required="harus di isi!">
                                            </div>
                                        </div>
                                    </div>

                                    
                                <!-- Varian -->
                                <div class="form-group">
                                    <span>Untuk menambahkan Varian Klik button dibwah</span>
                                    <br>
                                    <button type="button" class="btn btn-dark" onclick="btn_tambah_varian()" id="tmb_varian">Tambah Varian</button>
                                </div>
                                <div class="form-group" style="display:block" id="tampil_var">
                                    <label for="">Varian</label>
                                    <select name="" class="form-control" id="">
                                        <option >Pilih Varian</option>
                                        <option value="Warna" >Warna</option>
                                        <option value="Ukuran">Ukuran</option>
                                    </select>
                                </div>
                                <!-- Ukuran -->
                                <div class="form-group" style="display:block">
                                    <label for="Ukuran">Ukuran</label>
                                    <select name="" class="form-control" id="">
                                        <option value="">Pilih Ukuran</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                    </select>
                                </div>
                                <!-- Warna -->
                                <div class="form-group" style="display:block">
                                    <label for="Warna">Warna</label>
                                    <select name="" class="form-control" id="">
                                        <option>Pilih Warna</option>
                                        <option value="Merah">Merah</option>
                                        <option value="Hitam"></option>
                                    </select>
                                </div>
                                <!-- Akhir Varian -->

                                <div class="form-group">
                                    <label>Gambar produk utama</label>
                                    <input type="file" name="foto_utama" class="form-control" required="harus di isi!">
                                </div>

                                 <div class="form-group">
                                    <label>Gambar produk samping</label>
                                    <input type="file" name="foto_samping" class="form-control" required="harus di isi!">
                                </div>   
                                
                                <div class="form-group">
                                    <label>Gambar Produk atas</label>
                                    <input type="file" name="foto_atas" class="form-control" value="<?php echo $brg->foto_atas ?>">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                        </form>
                        
                        </div>
                    </div>
                    </div>
                    <!-- akhir modal card -->
                        
                    <!-- Modal edit -->
                    <div class="modal fade" id="edit_data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <!-- <?php foreach ($barang as $brg) : ?> -->
                            <form action="<?php echo base_url(). 'admin/tambah_produk/update'?>" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label>Nama barang</label>
                                    <input type="text" name="nama_produk" class="form-control" value="<?php echo $brg->nama_produk ?>">
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"  value="<?php echo $brg->deskripsi ?>"></textarea>
                                </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Harga</label>
                                                <input type="number" name="harga" class="form-control"  value="<?php echo $brg->harga ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Berat</label>
                                                <input type="text" name="berat" class="form-control"  value="<?php echo $brg->berat ?>">
                                            </div>
                                        </div>
                                    </div>

                                    
                                <!-- Varian -->
                                <div class="form-group">
                                    <span>Untuk menambahkan Varian Klik button dibwah</span>
                                    <br>
                                    <button type="button" class="btn btn-dark" onclick="btn_tambah_varian()" id="tmb_varian">Tambah Varian</button>
                                </div>
                                <div class="form-group" style="display:block" id="tampil_var">
                                    <label for="">Varian</label>
                                    <select name="" class="form-control" id="">
                                        <option >Pilih Varian</option>
                                        <option value="Warna" >Warna</option>
                                        <option value="Ukuran">Ukuran</option>
                                    </select>
                                </div>
                                <!-- Ukuran -->
                                <div class="form-group" style="display:block">
                                    <label for="Ukuran">Ukuran</label>
                                    <select name="" class="form-control" id="">
                                        <option value="">Pilih Ukuran</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                    </select>
                                </div>
                                <!-- Warna -->
                                <div class="form-group" style="display:block">
                                    <label for="Warna">Warna</label>
                                    <select name="" class="form-control" id="">
                                        <option>Pilih Warna</option>
                                        <option value="Merah">Merah</option>
                                        <option value="Hitam"></option>
                                    </select>
                                </div>
                                <!-- Akhir Varian -->

                                <div class="form-group">
                                    <label>Gambar produk utama</label>
                                    <input type="file" name="foto_utama" class="form-control"  value="<?php echo $brg->foto_utama ?>">
                                </div>

                                 <div class="form-group">
                                    <label>Gambar produk samping</label>
                                    <input type="file" name="foto_samping" class="form-control"  value="<?php echo $brg->foto_samping ?>">
                                </div>    
                                
                                <div class="form-group">
                                    <label>Gambar Produk atas</label>
                                    <input type="file" name="foto_atas" class="form-control" value="<?php echo $brg->foto_atas ?>">
                                </div>
                                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                        </form>
                        <!-- <?php endforeach; ?> -->
                        
                        </div>
                    </div>
                    </div>
                    <!-- akhir modal edit -->

                    <!-- modal hapus -->
                    <div class="modal fade" id="modal_hapus<?php echo $brg->id_produk;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <h3 class="modal-title" id="myModalLabel">Hapus Barang</h3>
                        </div>
                        <?php foreach ($item as $brg) : ?>
                        <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/tambah_produk/hapus'?>">
                            <div class="modal-body">
                                <p>Anda yakin mau menghapus <b><?php echo $brg->nama_produk;?></b></p>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" value="<?php echo $brg->id_produk;?>">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                <button class="btn btn-danger">Hapus</button>
                            </div>
                        </form>
                        <?php endforeach ?>
                        </div>
                        </div>
                    </div>
                    <!-- akhir modal hapus -->

                    <!-- Bootstrap core JavaScript-->
                    
                    <script src="<?= base_url() ?>template_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    

                    <!--font awesome  -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                    <!-- Custom scripts for all pages-->
                    <script src="<?= base_url() ?>template_admin/js/sb-admin-2.min.js"></script>

                    <!-- function button varian -->
                    <script>
                        function btn_tambah_varian(){
                            document.getElementById('tampil_var').style.display='block';
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>

</body>
