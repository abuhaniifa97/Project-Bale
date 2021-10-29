  <!-- HEAD -->
  <?PHP 
    $this->load->view('user/partial/head');
  ?>

  <div class="container-scroller">

  <!-- NAVBAR -->
  <?PHP 
    $this->load->view('user/partial/navbar');
  ?>

  <!-- SIDEBAR -->
  <?PHP 
    $this->load->view('user/partial/sidebar');
  ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- konten edit profil -->
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                              <div class="container">
                                  <div class="col-md-12 mt-3">
                                    <i class="icon-head menu-icon"></i>
                                    <span style="margin:10px; font-weight: 600; font-size: large;">Ageng Subagja</span>
                                  </div>
                                  <div class="col-md-12 mt-5">
                                  <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama Lengkap</label>
                                        <input required type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">No telepon</label>
                                        <input required type="number" class="form-control" id="exampleInputPassword1" placeholder="Masukan nomor telepon">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Alamat</label>
                                        <textarea required class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Masukan Alamat Lengkap"></textarea> 
                                    </div>
                                    <button type="submit" style="width:130px;" class="btn btn-primary">Simpan</button>
                                    </form>
                                  </div>
                              </div>
                            </div>
                        </div> 
                </div>
            </div>
          <!-- akhir kontent edit profil -->
        </div>
        <!-- content-wrapper ends -->

        <!--FOOTER  -->
        <?PHP 
          $this->load->view('user/partial/footer');
        ?>

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- plugins:js -->
  <script src="<?php echo base_url('assets/user/vendors/js/vendor.bundle.base.js')?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo base_url('assets/user/vendors/chart.js/Chart.min.js')?>"></script>
  <script src="<?php echo base_url('assets/user/vendors/datatables.net/jquery.dataTables.js')?>"></script>
  <script src="<?php echo base_url('assets/user/vendors/datatables.net-bs4/dataTables.bootstrap4.js')?>"></script>
  <script src="<?php echo base_url('assets/user/js/dataTables.select.min.js')?>"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url('assets/user/js/off-canvas.js')?>"></script>
  <script src="<?php echo base_url('assets/user/js/hoverable-collapse.js')?>"></script>
  <script src="<?php echo base_url('assets/user/js/template.js')?>"></script>
  <script src="<?php echo base_url('assets/user/js/settings.js')?>"></script>
  <script src="<?php echo base_url('assets/user/js/todolist.js')?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url('assets/user/js/dashboard.js')?>"></script>
  <script src="<?php echo  base_url('assets/user/js/Chart.roundedBarCharts.js')?>"></script>
  <!-- End custom js for this page-->   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

