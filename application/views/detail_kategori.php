<body> 
    <!-- head -->
        <?php $this->load->view('partial/head') ?>
    <!-- akhir head -->
    <!-- awal navbar -->
        <?php $this->load->view('partial/navbar') ?>
    <br>
    <br>     
    <!-- akhir navbar -->
    <!-- section serch -->
	<?php foreach($joinkategoriproduk as $joinkategori): ?>
            <section>
                <div class="container" style="max-width: 1340px;">
                    <div class="row">
                        <div class="col-md-9 mt-3">
                            <span style="font-size:20px;font-weight:bold"><?php echo $joinkategori->nama_kategori ?></span>
                        </div>
                        <div class="col-md-3 text-right mt-3">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 281px; height: 50px; top: 1933px; background: #FAFAFA; border: 1px solid #777777; box-sizing: border-box; border-radius: 50px;">
                                <div style="width:80px;height:80px;border-radius:100%;color:blue;"></div>
                            </input>
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
                                                    <img src="<?php echo base_url().'assets/gambar_utama/'. $joinkategori->foto_utama?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
                                                </div>
                                                <div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
                                                    <span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px"><?php echo $joinkategori->nama_produk ?></span>
                                                    <br>
                                                    <h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size: 15px;color:#000">Rp.<?php echo number_format($joinkategori->harga) ?></h5>
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
		<?php endforeach ?>
    <!-- akhir section produk kategori -->
    <!-- awal section kategori -->
		<section>
			<div class="container" style="max-width: 1340px;">
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <span style="font-size:20px;font-weight:bold">Kategori Lainya</span>
                    </div>
                    <div class="col-md-6 mt-5 text-right">
                       <a href=" <?php echo base_url('all_kategori'); ?>" style="color:black; text-decoration: none;"><span style="font-size:20px;">Lihat Semua</span></a> 
                    </div>
                </div>
                <br>
				<div class="row no-gutters">
				<?php foreach($show_all_kategori as $show_all): ?>
					<div class="col-4 col-md-2 p-1">
						<a href="<?php echo base_url('detail_kategori'); ?>" style="color:black; text-decoration: none;">
							<img src="<?php echo base_url().'assets/img_kategori/'. $show_all->img_sampul?>"class="img-responsive " style="width: 100%; height: auto;" alt="">
							<div class="text">
							  <center><p><?php echo $show_all->nama_kategori ?></p></center>
							</div>
						</a>
					</div>
				<?php endforeach?>
				</div>
			</div>
		</section>
	<!-- akhir section kategori -->    

    <br>
    <br>
    <!-- awal fotter -->
         <?php $this->load->view('partial/footer') ?> 
    <!-- akhir fotter -->
</body>
