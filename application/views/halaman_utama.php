<?php $this->load->view('partial/head') ?>

<?php $this->load->view('partial/navbar') ?> 
<!-- Carousel Brand -->
			
<!-- Akhir Carousel Brand -->

<body>
	
		<!-- Section Slide -->
		<!-- <div>
			<h5><a href="' . base_url() . 'google_login/logout">Logout</h5>
		</div> -->
		<!-- Hero -->
		<section class="mt-3">
			<div class="container" style="max-width: 1367px;">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="border-radius: 20px;">
					<div class="carousel-inner">
						<div class="carousel-item active">
						<span class="responsive" ><img src="<?php echo base_url('assets/buatan/banner1.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="width: 100%; height:100%; border-radius: 20px;"></span>
						</div>
						<div class="carousel-item">
						  <span class="responsive" ><img src="<?php echo base_url('assets/buatan/banner2.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="width: 100%; height:100%; border-radius: 20px;"></span>
						</div>
						<div class="carousel-item">
						 <span class="responsive" ><img src="<?php echo base_url('assets/buatan/banner3.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="width: 100%; height:100%; border radius: 20px; border-radius: 20px;"></span>
						</div>
						<div class="carousel-item">
						 <span class="responsive" ><img src="<?php echo base_url('assets/buatan/banner4.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="width: 100%; height:100%; border radius: 20px; border-radius: 20px;"></span>
						</div>
						<div class="carousel-item">
						 <span class="responsive" ><img src="<?php echo base_url('assets/buatan/banner5.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="width: 100%; height:100%; border radius: 20px; border-radius: 20px;"></span>
						</div>
						<div class="carousel-item">
						 <span class="responsive" ><img src="<?php echo base_url('assets/buatan/banner6.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="width: 100%; height:100%; border radius: 20px; border-radius: 20px;"></span>
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
		<!-- Akhir Hero -->
    <!-- Akhir Section slide -->
	<!-- awal section kategori -->
		<section>
			<div class="container" style="max-width: 1340px;">
				<div class="col-md-12 mt-5">
					<a href="<?php echo base_url('all_kategori'); ?>" style="color:black; text-decoration: none;"><span style="font-size:25px;font-weight:bold">Kategori</span></a>	
				</div>
				<div class="row no-gutters">
					<?php foreach($show_kategori_all as $kat_all) : ?>
					<div class="col-4 col-md-2 p-1">
						<a href="<?php echo base_url('detail_kategori'); ?>" style="color:black; text-decoration: none;">
							<img src="<?php echo base_url().'assets/img_kategori/'. $kat_all->img_sampul?>"class="img-responsive " style="width: 100%; height: auto;" alt="">
							<div class="text">
							  <center><p><?php echo $kat_all->nama_kategori?></p></center>
							</div>
						</a>
					</div>
					<?php endforeach ?>
				</div>
			</div>
		</section>
	<!-- akhir section kategori -->
	<!-- awal section speasil brand -->
	<section class=""  >
			   <div class="container" style="max-width: 1340px;">
			   <div class="col-md-12 mt-5">
					<span style="font-size:25px;font-weight:bold">Spesial Brand</span>
				</div>
			   </div>
				<div class="container" style="max-width: 1355px;">
					<div class="row">
						
						<div class="col-md-12">
						<!-- Carousel -->
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <div class="cards-wrapper">
                                <div class="card1">
                                    <img src="<?php echo base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="...">
                                    
                                </div>
                                <div class="card1 d-none d-md-block">
                                    <img src="<?php echo base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="...">
                                    
                                </div>
                                <div class="card1 d-none d-md-block">
                                    <img src="<?php echo base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="...">
                                    
                                </div>
                                </div>
                                </div>
                                <div class="carousel-item">
                                <div class="cards-wrapper">
                                    <div class="card1">
                                    <img src="<?php echo base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="...">
                                   
                                    </div>
                                    <div class="card1 d-none d-md-block">
                                    <img src="<?php echo base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="...">
                                    
                                    </div>
                                    <div class="card1 d-none d-md-block">
                                    <img src="<?php echo base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="...">
                                    
                                    </div>
                                </div>
                                </div>
                                <div class="carousel-item">
                                <div class="cards-wrapper">
                                    <div class="card1">
                                    <img src="<?php echo base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="...">
                                    
                                    </div>
                                    <div class="card1 d-none d-md-block">
                                    <img src="<?php echo base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="...">
                                    
                                    </div>
                                    <div class="card1 d-none d-md-block">
                                    <img src="<?php echo base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="...">
                                    
                                    </div>
                                </div>
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
						<!-- Akhir Carousel -->
						</div>
					</div>
				</div>
		</section>
	<!-- akhir section spesial brand -->
	<!-- awal section edisi brand -->
		<section>
			<div class="container" style="max-width: 1340px;">
				<div class="col-md-12 mt-5">
				<a href="<?php echo base_url('all_brand'); ?>" style="color:black; text-decoration: none;"><span style="font-size:25px;font-weight:bold">Edisi Brand</span></a>	
				</div>
				<br>
					<div class="row">
						<div class="col-md-12">
							<div class="wow" style="border-radius: 30px; box-shadow: 0 5px 10px rgb(73 84 100 / 5%); border-color: transparent; height: auto">
								<div class="row">
									<?php foreach ($show_brand as $s_brand) :?>
									<div class ="col-4 col-md-2 mt-2">
										<img src="assets/img_brand/icon/<?php echo $s_brand->icon_brand?>"class="card-img-top img-responsive " style="width: 100%; height: auto;" alt="">
									</div>
									<?php endforeach ?>
									<div class ="col-4 col-md-2 mt-2">
										<a href="<?php echo base_url('detail_brand'); ?>"><img src="<?php echo base_url('assets/img/Erigo 2.png') ?>"class="card-img-top img-responsive " style="width: 100%; height: auto;" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>	
			</div>
		</section>
		<!-- Akhir Brand -->
	<!-- akhir section edisi brand -->
	<br>
	<!-- awal banner pembatas -->
		<section>
			<div class="container" style="max-width: 1340px;">
				<img src="<?php echo base_url('assets/img/banner23.jpg') ?>" class="img-fluid"  height="230px" width="100%" style="object-fit: cover;" loading="lazy" alt="">
			</div>  
		</section>
	<!-- akhir banner pembatas -->
	<br>
	<!-- section serch -->
	     <section>
			 <div class="container" style="max-width: 1340px;">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-light bg-light justify-content-between">
							<a class="navbar-brand">Semua Produk</a>
							<form class="form-inline mt-5">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 281px; height: 50px; left: 1110px; top: 1933px; background: #FAFAFA; border: 1px solid #777777; box-sizing: border-box; border-radius: 50px;">
									<div style="width:80px;height:80px;border-radius:100%;color:blue;"></div>
								</input>
							</form>
						</nav>
					</div>
				</div>
			 </div>
		 </section>
	<br>
	<!-- akhir section search -->
	<!-- awal section card produk -->
		<section>
			<div class="container" style="max-width: 1340px;">
					<div class="row">
						<?php foreach($show_produk as $produkall):?>
							<div class="col-6 col-md-2 mt-3">
										<a href="<?php echo base_url('detail_produk'); ?>">
										   <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px"><?php echo $produkall->nama_produk ?></span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>
							</div>
						<?php endforeach?>
					</div>
			</div>
		</section>
	<!-- akhir card produk -->
	<!-- awal section brand hal -->
		<section>
			<?php foreach($joinbrandproduk as $join_brand):?>
			<div class="container" style="max-width: 1340px;">
				<div class="row">
				 <div class="col-md-12 mt-5">
				     <span style="font-size:25px;font-weight:bold"><?php echo $join_brand->nama_brand?></span>
				 </div>	
                  <div class="col-md-5">
					<div class="row">
                      <div class="col-md-12 mt-5">
							<img style="width: 100%; height: 230px; background: #EBEBEB; border-radius: 10px; " src="<?php echo base_url().'assets/img_brand/banner/'. $join_brand->banner?>" alt="">						  
					  </div>
					</div>
				  </div>
				 
				  <div class="col-md-7">
					<div class="row no-gutters">
						<div class="col-md-12 text-right  mt-2">
								<a href="<?php echo base_url('detail_brand'); ?>" style="color:black;  text-decoration: none;"><span style="font-size:22px">Lihat Semua</span></a>
						</div>	
						<div class="col-6 col-md-3 p-1">
									<a href="<?php echo base_url('detail_produk'); ?>">
										   <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/'. $join_brand->foto_utama?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px"><?php echo $produkall->nama_produk ?></span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp.<?php echo number_format($join_brand->harga) ?></h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
								    </a>	
						</div>
					</div>
				  </div>
				</div>
			</div>
			<?php endforeach ?>
			<div class="container" style="max-width: 1340px;">
				<div class="row">
				 <!--awal brand 1  -->
					<div class="col-md-12 mt-5">
						<span style="font-size:25px;font-weight:bold">Brand Eiger</span>
					</div>	
					<div class="col-md-5">
						<div class="row">
						<div class="col-md-12 mt-5">
								<img  class="card-img-top img-responsive "  src="<?php echo base_url('assets/buatan/brandeiger.webp') ?>" alt="" style="width: 100%; height: 230px; background: #EBEBEB; border-radius: 10px;">		
						</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="row no-gutters">
							<div class="col-md-12 text-right  mt-2">
									<a href="<?php echo base_url('detail_brand'); ?>" style="color:black;  text-decoration: none;"><span style="font-size:22px">Lihat Semua</span></a>
							</div>	
							<div class="col-6 col-md-3 p-1">
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>
							</div>
							<div class="col-6 col-md-3 p-1" >
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>
							</div>
							<div class="col-6 col-md-3 p-1">
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>	
							</div>
							<div class="col-6 col-md-3 p-1">
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>
							</div>
						</div>
					</div>
				  <!-- akhir brand 1  -->
				  <!-- awal brand 2 -->
					<div class="col-md-12 mt-5">
						<span style="font-size:25px;font-weight:bold">Brand Ardiles</span>
					</div>
					<div class="col-md-5">
						<div class="row">
						<div class="col-md-12 mt-5">
						  <img  class="card-img-top img-responsive "  src="<?php echo base_url('assets/buatan/brand ardiles.webp') ?>" alt="" style="width: 100%; height: 230px; background: #EBEBEB; border-radius: 10px;">							  
						</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="row no-gutters">
							<div class="col-md-12 text-right  mt-2">
									<a href="<?php echo base_url('detail_brand'); ?>" style="color:black;  text-decoration: none;"><span style="font-size:22px">Lihat Semua</span></a>
							</div>	
							<div class="col-6 col-md-3 p-1">
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>
							</div>
							<div class="col-6 col-md-3 p-1" >
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>
							</div>
							<div class="col-6 col-md-3 p-1">
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>	
							</div>
							<div class="col-6 col-md-3 p-1">
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>
							</div>
						</div>
					</div>
				  <!--akhir brand 2 -->
				  <!-- awal brand 3 -->
					<div class="col-md-12 mt-5">
						<span style="font-size:25px;font-weight:bold">Brand Acer</span>
					</div>
					<div class="col-md-5">
						<div class="row">
						<div class="col-md-12 mt-5">
						  <img  class="card-img-top img-responsive "  src="<?php echo base_url('assets/buatan/brandacer.webp') ?>" alt="" style="width: 100%; height: 230px; background: #EBEBEB; border-radius: 10px;">							  					  
						</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="row no-gutters">
							<div class="col-md-12 text-right  mt-2">
									<a href="<?php echo base_url('detail_brand'); ?>" style="color:black;  text-decoration: none;"><span style="font-size:22px">Lihat Semua</span></a>
							</div>	
							<div class="col-6 col-md-3 p-1">
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>
							</div>
							<div class="col-6 col-md-3 p-1" >
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>
							</div>
							<div class="col-6 col-md-3 p-1">
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>	
							</div>
							<div class="col-6 col-md-3 p-1">
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>
							</div>
						</div>
					</div>
				  <!-- akhir brand 3 -->
				  <!-- awal brand 4 -->
					<div class="col-md-12 mt-5">
						<span style="font-size:25px;font-weight:bold">Brand ADHDC</span>
					</div>
					<div class="col-md-5">
						<div class="row">
						<div class="col-md-12 mt-5">
						  <img  class="card-img-top img-responsive "  src="<?php echo base_url('assets/buatan/brandahdcaparal.webp') ?>" alt="" style="width: 100%; height: 230px; background: #EBEBEB; border-radius: 10px;">							  					  						  
						</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="row no-gutters">
							<div class="col-md-12 text-right  mt-2">
									<a href="<?php echo base_url('detail_brand'); ?>" style="color:black;  text-decoration: none;"><span style="font-size:22px">Lihat Semua</span></a>
							</div>	
							<div class="col-6 col-md-3 p-1">
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>
							</div>
							<div class="col-6 col-md-3 p-1" >
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>
							</div>
							<div class="col-6 col-md-3 p-1">
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>	
							</div>
							<div class="col-6 col-md-3 p-1">
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>
							</div>
						</div>
					</div>
				  <!-- akhir brand 4 -->
				  <!-- awal brand 5 -->
					<div class="col-md-12 mt-5">
						<span style="font-size:25px;font-weight:bold">Brand Arei</span>
					</div>
					<div class="col-md-5">
						<div class="row">
						<div class="col-md-12 mt-5">
							<img  class="card-img-top img-responsive "  src="<?php echo base_url('assets/buatan/brandarai.webp') ?>" alt="" style="width: 100%; height: 230px; background: #EBEBEB; border-radius: 10px;">							  					  						  				  
						</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="row no-gutters">
							<div class="col-md-12 text-right  mt-2">
									<a href="<?php echo base_url('detail_brand'); ?>" style="color:black;  text-decoration: none;"><span style="font-size:22px">Lihat Semua</span></a>
							</div>	
							<div class="col-6 col-md-3 p-1">
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>
							</div>
							<div class="col-6 col-md-3 p-1" >
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>
							</div>
							<div class="col-6 col-md-3 p-1">
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>	
							</div>
							<div class="col-6 col-md-3 p-1">
							        <a href="<?php echo base_url('detail_produk'); ?>">
										 <div class="card_home">
												<div class="row">
													<div class="col-md-12">
														<img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
													</div>
													<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
														<span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab Merah Muda</span>
														<br>
														<h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp. 150000</h5>
													</div>
													<div class="col-md-11 text-right pb-1" style="color: #f1c40f">
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star" style="font-size:90%;"></i>
														<i class="fa fa-star-half-o" style="font-size:90%;"></i>
													</div>
												</div>     
											</div>
										</a>
							</div>
						</div>
					</div>
				  <!--akhir brand 5 -->
			</div>
		</section>
	<!-- akhir section brand hal -->
	<br>
	<br>
	<br>
	<!-- section belanja  -->
	<section class="mb-5 mt-5">
		<div class="container text-center" style="max-width: 1340px;">
		<!-- Cara Berbelanja -->
			<div class="row">
				<div class="col-md-12 text-center">
					<h6 style="left: 53px; top: 3583px; font-family: Poppins; font-style: normal; font-weight: 600; font-size: 30px; line-height: 45px; align-items: center; text-align: center; color: #000000; text-shadow: 0px 99px 280px rgba(253, 217, 34, 0.17), 0px 41.3598px 116.977px rgba(253, 217, 34, 0.122205), 0px 22.1129px 62.5417px rgba(253, 217, 34, 0.101338), 0px 12.3963px 35.0603px rgba(253, 217, 34, 0.085), 0px 6.5836px 18.6203px rgba(253, 217, 34, 0.0686618), 0px 2.73958px 7.74832px rgba(253, 217, 34, 0.0477948);">Cara Berbelanja</h6>
					<!-- <hr style="width: 80px;"> -->
				</div>
				<div class=" col-md-6" data-aos="fade-up" data-aos-duration="3000">
					<img class="img-fluid d-flex justify-content-center" src="<?php echo base_url('assets/img/cara_belanja.png') ?>" style="width:600px"  alt="...">
				</div>
				<div class="col-md-6">
					<div style="margin-top:15%;margin-bottom:5%">
						<h5 style="color:#015EB6; font-width:600px;" class="text-left">Beginilah Cara Belanja Dengan Mudah</h5>
						<br>
						<table>
							<tr style="transform:translateY(10px);">
								<td>
                                   <div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.0), 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px rgba(0, 0, 0, 0.0655718), 0px 1.20603px 0px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">1</div>
								</td>
								<td></td>
								<td style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 18px; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Pilih produk</td>
							</tr>
							<tr style="transform:translateY(20px);">
								<td>
                                   <div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.0), 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px rgba(0, 0, 0, 0.0655718), 0px 1.20603px 0px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">2</div>
								</td>
								<td></td>
								<td style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 18px; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Baca deskripsi</td>
							</tr>
							<tr style="transform:translateY(30px);">
								<td>
                                   <div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.0), 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px rgba(0, 0, 0, 0.0655718), 0px 1.20603px 0px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">3</div>
								</td>
								<td></td>
								<td style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 18px; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Tentukan Jumlah QTY</td>
							</tr>

						</table>
					</div>
				</div>
				<div class="col-md-12" style="margin-top:5%">
					<P style="left: 53px; top: 3583px; font-family: Poppins; font-style: normal; font-weight: 600; font-size: 30px; line-height: 45px; align-items: center; text-align: center; color: #000000; text-shadow: 0px 99px 280px rgba(253, 217, 34, 0.17), 0px 41.3598px 116.977px rgba(253, 217, 34, 0.122205), 0px 22.1129px 62.5417px rgba(253, 217, 34, 0.101338), 0px 12.3963px 35.0603px rgba(253, 217, 34, 0.085), 0px 6.5836px 18.6203px rgba(253, 217, 34, 0.0686618), 0px 2.73958px 7.74832px rgba(253, 217, 34, 0.0477948);">Cara Bertransaksi</p>
					<!-- <hr style="width: 70px;"> -->
				</div>
			</div>
			<!-- Transaksi -->
			<div class="row flex-column-reverse flex-sm-row">
              <div class="col-md-1"></div>
				<div class="col-md-5 ">
						<div style="margin-top:20%;margin-bottom:5%">
							<h5 style="color:#015EB6;font-width:600px;" class="text-left">Beginilah Cara Bertransaksi Dengan Aman</h5>
							<table > 
								<tr style="transform:translateY(10px);">
									<td>
										<div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.0), 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px rgba(0, 0, 0, 0.0655718), 0px 1.20603px 0px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">1</div>
									</td>
									<td></td>
									<td style="font-family: Poppins; font-style: normal; font-weight: 300; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Tentukan lokasi penerima</td>
								</tr>
								<tr style="transform:translateY(20px);">
									<td>
                                       <div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.0), 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px rgba(0, 0, 0, 0.0655718), 0px 1.20603px 0px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">2</div>
									</td>
									<td></td>
                                    <td style="font-family: Poppins; font-style: normal; font-weight: 300; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Tentukan Metode Pembayaran</td>
								</tr>
								<tr style="transform:translateY(30px);">
									<td>
                                       <div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.0), 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px rgba(0, 0, 0, 0.0655718), 0px 1.20603px 0px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">3</div>
									</td>
									<td></td>
									<td style="font-family: Poppins; font-style: normal; font-weight: 300; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Pembeli akan menerima resi</td>
								</tr>
							</table>
						</div>
				</div>
				<div class=" col-md-6" data-aos="fade-down" data-aos-duration="1500">  
					<img src="<?php echo base_url('assets/img/cara_transaksi.png') ?>" style="width:600px" class="img-fluid d-flex justify-content-center"  alt="">
				</div>
			</div>
        </div>
    </section>
	<!-- akhir section belanja  -->
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



	<!-- css carusol brand -->

	<!-- akhir css brand -->
	<!-- script brand -->
	
    <!--Start of Tawk.to Script-->
            
    <!-- <script type="text/javascript">
                    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                    (function(){
                    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                    s1.async=true;
                    s1.src='https://embed.tawk.to/612c9ca9d6e7610a49b2ab1a/1feb47u9v';
                    s1.charset='UTF-8';
                    s1.setAttribute('crossorigin','*');
                    s0.parentNode.insertBefore(s1,s0);
                    })();
    </script> -->
        <!--End of Tawk.to Script-->
	<!-- akhir script brand -->
</body>