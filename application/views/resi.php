<?php $this->load->view('partial/head') ?>


<body>
      <!-- navbar -->
      <?php $this->load->view('partial/navbar') ?>

	  <!-- Content Resi -->
	  <section>
		  <div class="container" style="max-width: 1340px;">
			  <div class="row">
				  <div class="col-md-5">
					  <div class="row">
						  <div class="col-md-12">
							  <h2>CEK RESI</h2>
							  <br>
							  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam doloribus esse quis exercitationem sed ratione nostrum! Saepe animi libero amet eveniet</p>
							  <br>
							  <form action="#">
								  <div class="form-group">
									  <label for="Pilih Tipe Expedisi">Tipe Ekspedisi</label>
									  <select name="" id="" class="form-control">
											<option selected>pilih tipe Ekspedisi</option>
											<option value="">JNE</option>
											<option value="">SICEPAT</option>
									  </select>
								  </div>
								  <div class="form-grup">
									  <label for="no resi">No Resi</label>
									  <input type="text" class="form-control" placeholder="Masukan No Resi">
								  </div>
								  <div class="form-group mt-3" >
								  	<button type="button" class="btn btn-outline-primary btn-lg btn-block">Cek Status</button>
								  </div>
							  </form>
						  </div>
					  </div>
				  </div>
				  <div class="col-md-7">
					  <img src="https://lh3.googleusercontent.com/proxy/WGJdZBV4RYELhSdPi_gZPADCEYlUQjz6rQk8SPHI16A1Tn2ewx2pWs1DlTqhOYpyqEbkK2N_GoTYZmIkD4WABhpdLAz6L-DYxfumXsmcsQCD-WapgqGdmETJhM4U2xd_tbVT" class="img-fluid" alt="">
				  </div>
			  </div>
		  </div>
	  </section>
	  <!-- Akhir Content Resi -->
	  
	 
	  
      <div class="mt-5">
        <?php $this->load->view('partial/footer') ?>
      </div>
</body>


