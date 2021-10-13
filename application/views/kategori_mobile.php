<body>
    <!-- head -->
    <?php $this->load->view('partial/head') ?>
    <!-- akhir head -->
    <!-- awal navbar -->
        <?php $this->load->view('partial/navbar') ?> 
    <!-- akhir navbar -->
    <!-- Section Slide -->
        <section class=""  >
                <div class="container" style="max-width: 1367px;">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="border-radius: 20px;">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <span class="responsive" ><img src="<?php echo base_url('assets/img/banner53.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="height:auto; border-radius:20px;"></span>
                            </div>
                            <div class="carousel-item">
                            <span class="responsive" ><img src="<?php echo base_url('assets/img/banner_slide.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="height:auto; border-radius:20px;"></span>
                            </div>
                            <div class="carousel-item">
                            <span class="responsive" ><img src="<?php echo base_url('assets/img/banner53.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="height:auto; border-radius:20px;"></span>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
        </section>
    <!-- Akhir Section slide -->
    <!-- awal section kategori -->
		<section>
			<div class="container" style="max-width: 1340px;">
				<div class="col-md-12 mt-5" style="padding-left:0px">
					<span style="font-size:25px;font-weight:bold">Kategori</span>
				</div>
				<div class="row no-gutters">
					<div class="col-4 col-md-2 p-1">
					    <img src="<?php echo base_url('assets/img/103.png') ?>"class="img-responsive " style="width: 100%; height: auto;" alt="">
						<div class="text">
                          <center><p>Sepatu Pria</p></center>
                        </div>
					</div>
					<div class="col-4 col-md-2 p-1">
					    <img src="<?php echo base_url('assets/img/92.png') ?>" class="img-responsive "  style="width: 100%; height: auto;" alt="">
						  <div class="text">
                            <center><p>Fasihon Wanita</p></center>
                          </div>
					</div>
					<div class="col-4 col-md-2 p-1">
					    <img src="<?php echo base_url('assets/img/93.png') ?>"class="img-responsive " style="width: 100%; height: auto;" alt="">
						 <div class="text"> 
                           <center><p>Baju Anak</p></center>
                         </div>
					</div>
					<div class="col-4 col-md-2 p-1">
					    <img src="<?php echo base_url('assets/img/94.png') ?>"class="img-responsive " style="width: 100%; height: auto;" alt="">
						<div class="text">
                          <center><p>Kaos Kaki</p></center>
                        </div>
					</div>
					<div class="col-4 col-md-2 p-1">
					    <img src="<?php echo base_url('assets/img/95.png') ?>"class="img-responsive " style="width: 100%; height: auto;" alt="">
						<div class="text">
                          <center><p>Busana Muslim</p></center>
                        </div>
					</div>
					<div class="col-4 col-md-2 p-1">
					    <img src="<?php echo base_url('assets/img/96.png') ?>"class="img-responsive " style="width: 100%; height: auto;" alt="">
						<div class="text">
                          <center><p>Pasmina</p></center>
                        </div>
					</div>
				</div>
			</div>
		</section>
	<!-- akhir section kategori -->
    <br>
    <!-- Paralax -->
		<section>
			<div class="container" style="max-width: 1340px;">
				<div class="paralax">
				</div>
			</div>
		</section>
	<!-- Akhir Paralax -->
    <!-- awal fotter -->
      <?php $this->load->view('partial/footer') ?> 
    <!-- akhir fotter -->
</body>