<?php $this->load->view('partial/head'); ?>
<!-- loading -->
<div id="load_cart">Loading...</div>
<?php $this->load->view('partial/navbar'); ?>

<body> 
    <!-- dekrlerasi -->
	<section class="content">
		<div class="container" style="max-width: 1370px;">
			<h4 class="text-center" style="font-weight: bold; font-size:30px;">Konfirmasi Pembayaran</h4>
			<div class="row flex-column-reverse flex-lg-row mt-5">
				<div class="col-md-7">
					<div class="container">
						<?php foreach ($show_detail as $list) :?>
						<div class="row">
							<div class="col-md-12 text-center">
								<!-- gambar img tokopedia -->
								<!-- <img src="https://seeklogo.com/images/T/tokopedia-logo-5340B636F6-seeklogo.com.png" class="img-fluid text-center" style="width:100px" alt=""> -->
								<hr style="width: 100%;">
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										
										<div class="row">
											<div class="col-md-12">
												<span style="font-size:12px;font-weight:bold">Penerima</span>
												<br>
												<span style="font-weight: bold;"><?php echo $list->nama_pembeli?></span>
											</div>
											<div class="col-md-12">
												<span><?php echo $list->no_telepon?></span>
											</div>
											<div class="col-md-12">
												<span><?php echo $list->alamat?></span>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-12">
												<a href="<?php echo base_url('alamat/edit_data') ?>"><p class="font-italic" style="color:#FC185A; ">Edit Alamat</p></a>
											</div>	
										</div>
										
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-12">
												<span style="font-size:12px;font-weight:bold">Pengirim</span>
												<br>
												<span style="font-weight: bold;">BALESUPPLY</span>
											</div>
											<div class="col-md-12">
												<span>083824966900</span>
											</div>
											<div class="col-md-12">
												<p>Cihapit,Bandung Wertan, Bandung Wetan,Jawa Barat 40114</p>
											</div>
										</div>
									</div>
								</div>
								<hr style="width: 100%;">
							</div>
							<div class="col-md-12">
								<br>
								<table style="margin-top: 1px;">
									<thead>
										<tr>
											<th style="width:400px">Produk</th>
											<th style="width:200px">Varian</th>
											<th style="width:200px">Jumlah</th>
										</tr>
									</thead>
										<?php foreach ($query as $prd) :?>
										<tr>
											<td style="width:400px"><?php echo $prd->nama_produk ?></td>
											<td style="width:200px">
												<span><?php echo $prd->isi_varian_satu?></span>
												<br>
												<span><?php echo $prd->isi_varian_dua?></span>
											</td>
											<td style="width:200px"><?php echo $prd->qty?></td>
										</tr>
										<?php endforeach ?>
								</table>
								<hr style="width:100%">
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12">
										<span>Ongkir :</span>
										<br>
										<span>JNE Rp.50.000</span>
									</div>
								</div>
								<hr style="width:100%">
							</div>
							<div class="col-md-12">
								<form id="payment-form" method="post" action="<?=site_url()?>confirm_cart/finish">
								<input type="hidden" name="result_type" id="result-type" value="">
									<input type="hidden" name="result_data" id="result-data" value="">
										<!-- Pembeli -->
										<input type="hidden" name="penerima_detail" id="penerima_detail" value="<?php echo $list->nama_pembeli ?>">
										<input type="hidden" value="<?php echo $list->no_telepon?>" name="no_detail" id="no_detail">
										<input type="hidden" value="<?php echo $list->alamat?>" name="alamat_detail" id="alamat_detail">
										<!-- Akhir Pembeli -->
										<!-- Keranjang -->
										<?php foreach ($query as $prod) :?>
										<input type="hidden" value="<?php echo $prod->nama_produk ?>" name="produk_detail" id="produk_detail">
										<input type="hidden" value="<?php echo $prod->qty?>" name="qty_detail" id="qty_detail">
										<input type="hidden" value="<?php echo $prod->harga?>" name="harga_detail" id="harga_detail">
										<?php endforeach?>
										<!-- Akhir Keranjang -->
										<!-- Detail Keranjang -->
										<input type="hidden" value="<?php echo $list->total_harga ?>" name="total_detail" id="total_detail">
										<!-- Detail Keranjang -->
									<br>
										<button class="btn btn-dark mt-2 mr-2" id="pay-button" style="width:210px;margin-bottom:10px">Lanjut Ke Pembayaran</button>
										<a href="<?php echo base_url('alamat'); ?>" style="width: 208px;" class="btn btn-outline-dark">Kembali Ke Alamat</a>
									<br>
									</form>
							</div>
							
							</div>
							
						</div>
						<?php endforeach?>
					</div>
					<div class="col-md-5 text-center">
					<span class="responsive"><img src="<?php echo base_url('assets/gambar/payment.jpg') ?>" class="img-fluid"  width="330px"></span>
					<p style="font-size:27px;"><b>Periksa Dulu Ya Sebelum Lanjut<b></p>
					</div>
				</div>
				</div>
				
				
					
				</form>
			</div>
		</div>
	</section>
	<section>
		<div class="container mt-4" style="max-width: 1340px;">
			<div class="paralax">

			</div>
		</div>
	</section>
    <!-- footer -->
<?php $this->load->view('partial/footer') ?>   
  <!-- Checkout -->
  <script type="text/javascript">
  
  $('#pay-button').click(function (event) {
	  event.preventDefault();
	  $(this).attr("disabled", "disabled");

	//   Definis Data
	var penerima_detail 	= $("#penerima_detail").val();
	var no_detail 		    = $("#no_detail").val();
	var alamat_detail 		= $("#alamat_detail").val();
	var produk_detail 		= $("#produk_detail").val();
	var qty_detail 			= $("#qty_detail").val();
	var total_detail 		= $("#total_detail").val();
	var harga_detail 		= $("#harga_detail").val();


  
  $.ajax({
	  type : 'POST',
	  url: '<?=site_url()?>confirm_cart/token',
	  data : {
		penerima_detail : penerima_detail,
		no_detail 		: no_detail,
		alamat_detail 	: alamat_detail,
		produk_detail 	: produk_detail,
		qty_detail 		: qty_detail,
		harga_detail 	: harga_detail,
		total_detail 	: total_detail
	  },
	  cache: false,

	  success: function(data) {
		  //location = data;

		  console.log('token = '+data);
		  
		  var resultType = document.getElementById('result-type');
		  var resultData = document.getElementById('result-data');

		  function changeResult(type,data){
			  $("#result-type").val(type);
			  $("#result-data").val(JSON.stringify(data));
			  //resultType.innerHTML = type;
			  //resultData.innerHTML = JSON.stringify(data);
		  }

		  snap.pay(data, {
			  
			  onSuccess: function(result){
				  changeResult('success', result);
				  console.log(result.status_message);
				  console.log(result);
				  $("#payment-form").submit();
			  },
			  onPending: function(result){
				  changeResult('pending', result);
				  console.log(result.status_message);
				  $("#payment-form").submit();
			  },
			  onError: function(result){
				  changeResult('error', result);
				  console.log(result.status_message);
				  $("#payment-form").submit();
			  }
		  });
	  }
  });
});

</script>
  <!-- Akhir Checkout -->

  <!-- sweetalert -->
  	<?php if ($this->session->flashdata('success')): ?>
		<script>
			Swal.fire(
			'Di tambahkan',
			'Berhasil di tambahkan',
			'success'
			)           
		</script>
	<?php endif; ?>

	<!-- load js -->
	<!-- load JS -->
		<script>
          $(document).ready(function(){
            $("#load_cart").fadeOut(3000);

          });
        </script>

</body>
