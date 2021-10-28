<?php $this->load->view('partial/head') ?>
 <!-- navbar -->
 <?php $this->load->view('partial/navbar') ?>
<br>
<br>
 
 <body>
 
	 <!-- Content -->
	 <section>
		 <!-- Produk Detail -->
		 <?php 
		 foreach($show_produk as $show):
		 ?>
		 <div class="container">
			 <div class="row">
				 <div class="col-md-12 text-center" >
					 <!-- Brand Name -->
					 <span>Name Brand</span>
				 </div>
				 <div class="col-md-3"></div>
				 <div class="col-md-6 text-center"><h5 class="text-uppercase"><?php echo $show->nama_produk?></h5></div>
				 <div class="col-md-3"></div>
				 <!-- Foto Produk -->
				 <div class="col-md-12">
				    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
							<img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/Baby.tux.sit-black-800x800.png" style="width:100%;height:500px" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
							<img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/Baby.tux.sit-black-800x800.png" style="width:100%;height:500px" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
							<img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/Baby.tux.sit-black-800x800.png" style="width:100%;height:500px" class="d-block w-100" alt="...">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				 </div>
				 <!-- Akhir Foto Produk -->
				 <!-- Deksripsi -->
				 <div class="col-md-12">
					 <div class="row">
						 <div class="col-md-7">
							 <p style="white-space: pre-wrap;color: rgba(0,0,0,.8);font-size: .875rem;overflow: hidden;text-overflow: ellipsis;line-height: 1.875rem;"><?php echo $show->deskripsi?></p>
						 </div>
						 <div class="col-md-5">
							 <div class="card p-4">
								<div class="isi">
									<form action="">
										<div class="form-group">
											<label for="">Harga</label>
											<h6>Rp.<?php echo number_format($show->harga)?></h6>
										</div>
										<!-- Qty -->
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<label for="Qty">Qty</label>
													<select name="" id="" class="form-control">
														<option selected>Pilih qty</option>
														<option value="1">1</option>
														<option value="1">2</option>
														<option value="1">3</option>
														<option value="1">4</option>
														<option value="1">5</option>
													</select>
												</div>
												<div class="col-md-6">
													<label for="Stok">Stok</label>
													<span><?php echo number_format($show->stok)?></span>
												</div>
											</div>
										</div>
										<!-- Varian -->
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<label for="<?php echo $show->nama_varian_satu ?>"><?php echo $show->nama_varian_satu ?></label>
													<select name="" id="" class="form-control">
														<option selected>Pilih</option>
														<?php
														$varsatu = array($show->isi_varian_satu);
														var_dump ($varsatu);
														foreach($varsatu as $showvar){
															echo '<option value="' . strtolower($showvar) . '">' . $showvar . '</option>';
														}
														?>
													</select>
												</div>
												<div class="col-md-6">
													<label for="<?php echo $show->nama_varian_dua ?>"><?php echo $show->nama_varian_dua ?></label>
													<select name="" id="" class="form-control">
														<option selected>Pilih</option>
														<option value="<?php echo $show->isi_varian_dua ?>"><?php echo $show->isi_varian_dua ?></option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<button class="btn btn-outline-primary btn-block">+Tambah Pesanan</button>
										</div>
									</form>
								</div>
							 </div>
						 </div>
					 </div>
				 </div>
				 <!-- Akhir Deskripsi -->
			 </div>
		 </div>
		 <?php endforeach ?>
	 </section>
	 <!-- Akhir Content -->
     <!-- footer  -->
      <?php $this->load->view('partial/footer') ?>
    <!-- akhir footer -->
 </body>
     

    


