<?php $this->load->view('partial/head'); ?>


<!-- loading -->
<div id="my_order">Loading...</div>

  <!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>



<body>
    <!-- Section My Order-->
	<section class="mt-5">
		<div class="container" style="max-width: 1340px;">
			<div class="row">
				<div class="col-md-12 mb-3">
					<h3>My Order</h3>
				</div>
				<div class="col-md-12">
					<div class="card_order" style="padding:10px;border-radius:10px;width: 100%;height:230px;background-color:#fff;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;">
						<div class="col-md-12 mb-4">
							<span class="mb-2">Header</span>
							
							<hr style=" border-top: 1px solid #eae4e4;">
						</div>
						<div class="row">
							<div class="col-md-6">
								<table>
									<tr>
										<td style="width:170px"><img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Baby.gnu-black-800x800.png" class="img-fluid" alt="" style="width:140px;height:auto"></td>
										<td style="margin-top: 15px;position:absolute">
											<span style="font-size:20px">Nama Produk Dipesan</span>
											<br>
											<p style="margin-top:5px;color:#888">Varian Warna</p>
											<br>
											
											<p style="color:#888">Qty</p>
										</td>
									</tr>
								</table>
							</div>
							<div class="col-md-3 text-left">
								<span style="color:#888">Status Pesanan</span>
								<br>
								<span class="badge badge-primary">Panding</span>
							</div>
							<div class="col-md-3 text-left">
								<span style="color:#888">Tanggal Pesan</span>
								<br>
								<span style="font-weight: bold;font-size:18px">24 Agustus 2021</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Akhir Section Order -->
      

    <!-- Paralax -->
	<section>
		<div class="container mt-4" style="max-width: 1340px;">
			<div class="paralax">

			</div>
		</div>
	</section>
	<!-- Akhir Paralax -->
      
     
        <?php $this->load->view('partial/footer') ?>
 

        <!-- sweetalert -->
    
        

       <!-- load JS -->
       <script>
          $(document).ready(function(){
            $("#my_order").fadeOut(2000);
          });
        </script>

</body>

