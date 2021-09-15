	<div class="container" style="max-width: 1340px; font-size:15px">
		<footer class="text-center text-lg-start bg-primary" style="background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
			<!-- Section: Links  -->
			<section class="pt-3" style="background: #015EB6;">
				
				<div class="container text-left text-White;" style="max-width: 1340px;">
				<!-- Grid row -->
				<div class="row mt-3" style="color: #fff;">

					<!-- Grid column -->
					<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
						<!-- Content -->
						<h6 class="text-white fw-bold" style="font-weight: bold;"><i class="fas fa-gem me-3"></i>TENTANG KAMI</h6>
						<hr class="mb-4" style="width:60px">
						<p class="text-white" style="color: #f7f7f9e0!important; letter-spacing: 1px;">
							Balesupply merupakan toko online yang sudah berdiri sejak 2020,
							visi utama kami adalah memudahkan konsumen dengan Transaksi
							yang sederhana dan tidak menyulitkan bagi pembeli.
						</p>
					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4">
						<!-- Links -->
						<h6 class="text-White" style="font-weight: bold;">KONTAK </h6>
						<hr class="mb-4" style="width:60px">
						<table>
							<tr>
								<td><i class="fa fa-map-marker mr-1" aria-hidden="true" style="transform: translateY(-1px);"></i></td>
								<td></td>
								<td> <span style="color: #f7f7f9e0!important; letter-spacing: 1px;">Jl.Kihiur No.10,Bandung Jawa Barat</span></td>
							</tr>
						</table>
						<a href="https://api.whatsapp.com/send?phone=62895354997040&text=hallo%20%0Akami%20membutuhkan%20bantuan%20dari%20kaka%20admin%20terkait%20pembelian%20dan%20sebagai%20nya" class="btn btn-warning" style="border-radius: 20px;font-weight:600">Costomer Service</a>
					</div>
					<!-- Grid column -->

					<!-- Grid column Toko -->
					<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
					<!-- Links -->
					<h6 class="text-White fw-bold" style="font-weight: bold;">
						TOKO	
					</h6>
					<hr class="mb-4" style="width:60px;">
					
						<table>
							<tr>
								<td><img src=<?php echo base_url('assets/img/tokopedia.png') ?>  style="width:20px"></td>
								<td><a href="https://www.tokopedia.com/balesupply" style="font-style: normal;line-height: 27px; display: flex; align-items: center; color: #f7f7f9e0!important; letter-spacing: 1px;"> Tokopedia</a></td>
							</tr>
							<tr>
								<td><img src=<?php echo base_url('assets/img/shoppe.png')?>  style="width:20px"></td>
								<td><a href="https://shopee.co.id/balesocks" style="font-style: normal; line-height: 27px; display: flex; align-items: center; color: #f7f7f9e0!important; letter-spacing: 1px;"> Shoppe</a></td>
							</tr>  
							<tr>
								<td><img src=<?php echo base_url('assets/img/lazada.png') ?>  style="width:20px"></td>
								<td><a href="https://www.lazada.co.id/" style="font-style: normal; line-height: 27px; display: flex; align-items: center; color: #f7f7f9e0!important; letter-spacing: 1px;"> Lazada</a></td>
							</tr>                            
						</table>
					</div>
					<!-- Grid column  Toko-->
					<!-- Grid column Pengiriman-->
					<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
					<!-- Links -->
					<h6 class="text-White fw-bold" style="font-weight: bold;">
						SUPPORT PENGIRIMAN
					</h6>
					<hr class="mb-4" style="width:60px; ">
					<div class="row">
					<div class="col-md-10">
							<table>
								<tr>
									<td>
										<img class="responsive" style=" width: 60px;" src="<?php echo base_url('assets/img/JNE.png') ?>" style="width:10px">
									</td>
								</tr>
							</table>
						
						<!-- <table>
								<tr>
									<td></td>
									 <td><img src="<?php echo base_url('assets/img/Sicepat.png') ?>"  style="width:100px"></td> -->
								<!-- </tr> -->
						<!-- </table> -->
					<!-- <img src="assets/img/img_jne.png" alt="">   -->
						<!-- <a href="#!" class="text-reset">JNE</a> -->
					</div>
					</div>
					</div>
				</div>
					<!-- Grid column pengiriman -->
				</div>
				<!-- Grid row -->
				</div>
			</section>
			<!-- Section: Links  -->
			<!-- Copyright -->
			<div class="container" style="max-width: 1340px;">
				<div class="text-white text-center p-4" style="background-color:#0049A8; font-size:15px; font-style: normal; ">
					© 2021 Copyright:
					<a class="text-white" href="#" style="font-weight: 600;">BALESUPPLY</a>
				</div>
			</div>
			<!-- Copyright -->
			<!-- not found -->

			<!-- AOS js scroll gambar -->
			<script>   
				AOS.init();
			</script>
			<!-- Akhir AOS js scroll gambar -->


			<!-- JS Select Wilayah -->
			<script>
				$(document).ready(function(){
					$("#provinsi").change(function (){
						var url = "<?php echo site_url('alamat/add_ajax_kab');?>/"+$(this).val();
						$('#kota').load(url);
						return false;
					})
					
					$("#kota").change(function (){
						var url = "<?php echo site_url('alamat/add_ajax_kec');?>/"+$(this).val();
						$('#kecamatan').load(url);
						return false;
					})
					
					$("#kecamatan").change(function (){
						var url = "<?php echo site_url('alamat/add_ajax_des');?>/"+$(this).val();
						$('#desa').load(url);
						return false;
					})
				});
			</script>
    		<!-- Select Wilayah -->
			
			
			</script>
			</footer>
	</div>
</body>
</html>
