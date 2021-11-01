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
				<div id="=carouselExampleControls" class="carousel slide" data-ride="carousel" style="border-radius: 20px;">
					<div class="carousel-inner">
						<div class="carousel-item active">
						<span class="responsive" ><img src="<?php echo base_url('assets/buatan/banner1.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="width: 100%; height:auto; border-radius: 20px;"></span>
						</div>
						<div class="carousel-item">
						  <span class="responsive" ><img src="<?php echo base_url('assets/buatan/banner2.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="width: 100%; height:auto; border-radius: 20px;"></span>
						</div>
						<div class="carousel-item">
						 <span class="responsive" ><img src="<?php echo base_url('assets/buatan/banner3.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="width: 100%; height:auto; border radius: 20px; border-radius: 20px;"></span>
						</div>
						<div class="carousel-item">
						 <span class="responsive" ><img src="<?php echo base_url('assets/buatan/banner4.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="width: 100%; height:auto; border radius: 20px; border-radius: 20px;"></span>
						</div>
						<div class="carousel-item">
						 <span class="responsive" ><img src="<?php echo base_url('assets/buatan/banner5.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="width: 100%; height:auto; border radius: 20px; border-radius: 20px;"></span>
						</div>
						<div class="carousel-item">
						 <span class="responsive" ><img src="<?php echo base_url('assets/buatan/banner6.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="width: 100%; height:auto; border radius: 20px; border-radius: 20px;"></span>
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
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <span style="font-size:20px;font-weight:bold">Kategori Lainya</span>
                    </div>
                    <div class="col-md-6 mt-5 text-right">
                        <span style="font-size:20px;">Lihat Semua</span>
                    </div>
                </div>
                <br>
				<div class="row no-gutters">
					<?php foreach($show_all_kategori as $show_all) :?>
					<div class="col-4 col-md-2 p-1">
						<a href="<?php echo base_url('detail_kategori'); ?>" style="color:black; text-decoration: none;">
							<img src="<?php echo base_url().'assets/img_kategori/'. $show_all->img_sampul?>"class="img-responsive " style="width: 100%; height: auto;" alt="">
							<div class="text">
							  <center><p><?php echo $show_all->nama_kategori ?></p></center>
							</div>
						</a>
					</div>
					<?php endforeach ?>
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
