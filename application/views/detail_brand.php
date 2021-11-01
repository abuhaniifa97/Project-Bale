<body> 
    <!-- head -->
        <?php $this->load->view('partial/head') ?>
    <!-- akhir head -->
    <!-- awal navbar -->
        <?php $this->load->view('partial/navbar') ?>
     <br>

    <!-- akhir navbar -->
	<?php foreach($joinbrandproduk as $joinbrand): ?>
    <!-- section serch -->
            <section>
                <div class="container" style="max-width: 1340px;">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <span style="font-size:25px;font-weight:bold"><?php echo $joinbrand->nama_brand ?></span>
                        </div>
                        <div class="col-md-12">
                           <img src="<?php echo base_url().'assets/img_brand/banner/'. $joinbrand->banner?>" class="img-responsive " style="width: 100%; height: auto;" alt="">
                        </div>
                    </div>
                </div>
            </section>

    <!-- akhir section search -->
    <!-- awal section produk kategori -->
        <section>
                <div class="container" style="max-width: 1340px;">
                        <div class="row">
                                <div class="col-6 col-md-2 mt-3">
                                    <a href="<?php echo base_url('detail_produk'); ?>">
                                        <div class="card_home">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="<?php echo base_url().'assets/gambar_utama/'. $joinbrand->foto_utama?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
                                                </div>
                                                <div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
                                                    <span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px"><?php echo $joinbrand->nama_produk ?></span>
                                                    <br>
                                                    <h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000"><?php echo $joinbrand->harga?></h5>
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
        </section>
		
    <!-- akhir section produk kategori -->
    <!-- awal section brand -->
        <section>
			<div class="container" style="max-width: 1340px;">
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <span style="font-size:20px;font-weight:bold">Brand Lainya</span>
                    </div>
                    <div class="col-md-6 mt-5 text-right">
                        <a href="  <?php echo base_url('all_brand'); ?>" style="color:black; text-decoration: none;"><span style="font-size:20px;">Lihat Semua</span></a> 
                    </div>
                </div>
				<br>
                <div class="row">
						<div class="col-md-12">
							<div class="wow" style="border-radius: 30px; box-shadow: 0 5px 10px rgb(73 84 100 / 5%); border-color: transparent; height: auto">
								<div class="row">
								   <div class ="col-4 col-md-2 mt-2">
										<a href="<?php echo base_url('detail_brand'); ?>"><img src="<?php echo base_url().'assets/img_brand/icon/'. $joinbrand->icon_brand?>"class="card-img-top img-responsive " style="width: 100%; height: auto;" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>		
			</div>
		</section>
		<?php endforeach ?>
	<!-- akhir section brand -->    
    <br>
    <br>
    <!-- awal fotter -->
         <?php $this->load->view('partial/footer') ?> 
    <!-- akhir fotter -->
</body>
