
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
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
 

