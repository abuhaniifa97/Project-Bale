
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
																<!-- User -->
																<?php foreach($join_user_alamat as $user): ?>
                                  <div class="col-md-12 mt-3">
                                    <i class="icon-head menu-icon"></i>
                                    <span style="margin:10px; font-weight: 600; font-size: large;"><?php echo $user->nama_lengkap ?></span>
                                  </div>
                                
                                  <div class="col-md-12 mt-5">
                                    <span>Nama Lengkap</span>
                                  </div>
                                  <div class="col-md-12 mt-2">
                                    <span style="color: #888;"><?php echo $user->nama_lengkap?></span>
                                  </div>
                                  <div class="col-md-12 mt-5">
                                    <span>No telepon</span>
																	</div>
																	<div class="col-md-12 mt-2">
                                    <span style="color: #888;"><?php echo $user->no_hp ?></span>
                                  </div>
																	<div class="col-md-12 mt-5">
                                    <span>Email</span>
                                  </div>
                                  <div class="col-md-12 mt-2">
                                    <span style="color: #888;"><?php echo $user->email?></span>
                                  </div>
                                  
                                  <div class="col-md-12 mt-5">
                                    <span>Alamat</span>
                                  </div>
                                  <div class="col-md-12 mt-2">
                                    <span style="color: #888;"><?php echo $user->alamat ?></span>
                                  </div>
                                  <div class="col-md-12 mt-4">
                                     <a href="<?php echo base_url('user/edit_profil')?>"><button style="width:130px;" class="btn btn-primary">Edit</button></a>
																	</div>
																	<?php endforeach ?>
																	<!-- Akhir User -->
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
 

