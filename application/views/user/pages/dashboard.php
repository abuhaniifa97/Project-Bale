
  <!-- HEAD -->
  <?php
    $this->load->view('user/partial/head');
  ?>


  <div class="container-scroller">
    <!-- NAVBAR -->
    <?php
			$this->load->view('user/partial/navbar');
		?>

    <!-- SIDEBAR -->
    <?php
			$this->load->view('user/partial/sidebar');
		?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
									<?php foreach($show_user as $user) :?>
									<h3 class="font-weight-bold">Welcome <?php echo $user->nama_lengkap ?></h3>
									<?php endforeach ?>
                </div>
                <div class="col-12 col-xl-4">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="<?php echo base_url('assets/user/images/dashboard/people.svg')?>" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <!-- <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2> -->
                      </div>
                      <div class="ml-2">
                        <!-- <h4 class="location font-weight-normal">Bangalore</h4> -->
                        <!-- <h6 class="font-weight-normal">India</h6> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Belum Di Bayar</p>
                      <p class="fs-30 mb-2">1</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Di Proses</p>
                      <p class="fs-30 mb-2">0</p>
                      <p></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Selesai</p>
                      <p class="fs-30 mb-2">0</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Rating</p>
                      <p class="fs-30 mb-2">2</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- FOOTER -->
        <?php
			    $this->load->view('user/partial/footer');
		    ?>

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

