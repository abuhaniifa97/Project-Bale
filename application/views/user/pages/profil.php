
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
    
      <!-- Panel -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- kontent profil -->
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
                                    <span>Username</span>
                                  </div>
                                  <div class="col-md-12 mt-2">
                                    <span style="color: #888;">Ageng</span>
                                  </div>
                                  <div class="col-md-12 mt-5">
                                    <span>Nama Lengkap</span>
                                  </div>
                                  <div class="col-md-12 mt-2">
                                    <span style="color: #888;">Ageng Subagja</span>
                                  </div>
                                  <div class="col-md-12 mt-5">
                                    <span>No telepon</span>
                                  </div>
                                  <div class="col-md-12 mt-2">
                                    <span style="color: #888;">081220321456</span>
                                  </div>
                                  <div class="col-md-12 mt-5">
                                    <span>Alamat</span>
                                  </div>
                                  <div class="col-md-12 mt-2">
                                    <span style="color: #888;">Desa tugu Rt 003 Rw 002 kecamatan lelea kabupaten indramayu kodepos 45261 jawa barat</span>
                                  </div>
                                  <div class="col-md-12 mt-4">
                                     <a href="<?php echo base_url('user/edit_profil')?>"><button style="width:130px;" class="btn btn-primary">Edit</button></a>
                                  </div>
                              </div>
                            </div>
                        </div> 
                </div>
            </div>
            <!-- Akhir kontent profil -->
        </div>
        <!-- content-wrapper ends -->

         <!-- FOOTER -->
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
 

