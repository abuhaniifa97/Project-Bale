	
		<!-- NAVBAR BARU -->
        	<nav class="nav2">
				<div class="navbar">
					<div class="toko">
						<a href="<?= base_url() ?>halaman_utama" style="color:#fff; font-weight: bold;">BALESUPPLY</a>
						<a href="#!" style="color:#fff;"></a>
						<div class="dropdown">
							<span style="font-size:15px; margin-left:15px;">kategori</span>
								<div class="dropdown-content">
									<a href="#">Link 1</a>
									<a href="#">Link 2</a>
									<a href="#">Link 3</a>
								</div>
						</div>
				
					</div>
					

					<!-- item -->
					<div class="item1">
						
							<a href="#!" class="nav-item1">
								<img class="img-responsive" src="assets/iconnav/home.png" style="width: 20px;height: 20px;" alt="">
							</a>
						
						
							<a href="#!" class="nav-item2">
								<img class="img-responsive" src="assets/iconnav/kategori.png" style="width: 20px;height: 20px;" alt="">
							</a>
						
						
							<a href="#!" class="nav-item3">
								<img class="img-responsive" src="assets/iconnav/brand.png" style="width: 20px;height: 20px;" alt="">
							</a>
						
							
							<a class="nav-item4" href="<?php echo base_url('detail_keranjang'); ?>">
								<img class="img-responsive" src="assets/iconnav/cart.png" style="width: 20px;height: 20px;" alt="">
								<span class="badge badge-pill badge-danger" style="transform: translate(-13px, -13px);">0</span>	
							</a>
							
						
							<a href="<?php echo base_url('auth'); ?>" class="nav-item5">
								<img class="img-responsive" src="assets/iconnav/user.png" style="width: 20px;height: 20px;" alt="">
							</a>

					</div>

					<!-- content navbar bawah keranjang -->
					<div class="item2">
						<div class="col-md-12 ">
							<!-- Content -->
							<div>
								<table>
									<tr>
										<td>
											<div class="row">
												<div class="col-md-12">
													<span style="font-weight:bold;font-size:14px;">Total Pesanan</span>
												</div>
												<div class="col-md-12">
													<span style="font-size:13px;">Rp.10.000</span>
												</div>
											</div>
										</td>
										<td>
											<button class="btn btn-primary" style="width:170px; border-radius: 8px; background-color: #0049A8;">Beli Sekarang</button>
										</td>
									</tr>
								</table>
							</div>
							<!-- Akhir Content -->
						</div>	
					</div>
					<!-- content navbar bawah keranjang -->
				</div>
			</nav>
		<!-- NAVBAR BARU AKHIR -->