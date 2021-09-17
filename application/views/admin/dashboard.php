<?php $this->load->view('admin/partial/head') ?>

<!-- CDN DATA TABLES -->


<!-- JS DATA TABLES -->


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('admin/partial/sidebar') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="position: relative;">

                <!-- Topbar -->

                <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow" style="background: #0049A8;  position: relative;">
                    <?php $this->load->view('admin/partial/topbar')  ?>
                </nav>


                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" style="position: absolute;">

				<div id="chartdiv"></div>

                    <!-- DataTales Example -->
                    
					
					<!-- Cooming Soon -->
						<section>
							<div class="container-fluid">
							<!-- Header -->
							<div class="container-fluid row">
								
									<div class="col-md-4 mt-3">
										<div class="card_dashboard" style="width: 100%;border-radius:20px;height:120px;background-color:#fff;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;position:relative">

												<div class="row container" style="position: absolute;top:30px">
													<div class="col-md-6">
														<table>
															<tr>
																<td><span style="font-family:poppins;font-size:30px;font-weight:bold">20</span></td>
															</tr>
															<tr>
																<td><span style="font-family: Poppins;font-size: 15px;font-weight: 600;">Produk</span></td>
															</tr>
															<tr>
																<td>
																
																</td>
															</tr>
														</table>
													</div>
													<div class="col-md-6">
														<div class="border_admin" style="width: 60px;height:60px;border-radius:50%;background: #FFF4D6;float:right">
															<i class="fa fa-shopping-bag" aria-hidden="true" style=" position: absolute;font-size: 30px;top: 15px;right: 28px;color: #FEBB39;"></i>
														</div>
													</div>
												</div>
										</div>
									</div>
								
								<div class="col-md-4 mt-3">
									<div class="card_dashboard" style="width: 100%;border-radius:20px;height:120px;background-color:#fff;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;position:relative">
										<div class="row container" style="position: absolute;top:30px">
											<div class="col-md-6">
												<table>
													<tr>
														<td><span style="font-family:poppins;font-size:30px;font-weight:bold">4</span></td>
													</tr>
													<tr>
														<td><span style="font-family: Poppins;font-size: 15px;font-weight: 600;">Kategori</span></td>
													</tr>
													<tr>
														<td>
														
														</td>
													</tr>
												</table>
											</div>
											<div class="col-md-6">
												<div class="border_admin" style="width: 60px;height:60px;border-radius:50%;background: #E7EDFF;float:right">
													<i class="fa fa-random" aria-hidden="true" style=" position: absolute;font-size: 30px;top: 15px;right: 28px;color: #3A69FE;"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 mt-3">
									<div class="card_dashboard" style="width: 100%;border-radius:20px;height:120px;background-color:#fff;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;position:relative">
										<div class="row container" style="position: absolute;top:30px">
											<div class="col-md-6">
												<table>
													<tr>
														<td><span style="font-family:poppins;font-size:30px;font-weight:bold">0</span></td>
													</tr>
													<tr>
														<td><span style="font-family: Poppins;font-size: 15px;font-weight: 600;">Blog</span></td>
													</tr>
												</table>	
											</div>
												<div class="col-md-6">
													<div class="border_admin" style="width: 60px;height:60px;border-radius:50%;background: #DCFAF9;float:right">
														<i class="fa fa-rss" aria-hidden="true" style=" position: absolute;font-size: 30px;top: 15px;right: 28px;color: #15DBCC;"></i>
													</div>
												</div>
										</div>
									</div>
								</div>
								
							</div>
							<!-- Akhir Header -->
							<!-- Body -->
							<div class="container-fluid row mt-5">
								<div class="col-md-12">
									<div class="col-md-12">
										<h5 style="font-family: Raleway;font-weight:600">Produk</h5>
									</div>
									<div style="margin-bottom: 15px; width: 100%;border-radius:20px;background-color:#fff;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;position:relative">
										<div class="table-responsive">
											<!-- Table -->
											<table class="table" style="width: 100%; max-width:100%; border-collapse:collapse;">
												<thead style="vertical-align: bottom;">
													<tr>
													<th scope="col">No</th>
													<th scope="col">Produk</th>
													<th scope="col">Nama</th>
													</tr>
													
												</thead>
												<tbody style="width: 1%; padding: .5rem; vertical-align: top;">

												<?php $no=1; ?>
                                            	<?php foreach ($prod as $brg) : ?>
													<tr>
														<td scope="row"><?php echo $no++ ?></th>
														<td><img style="width:70px;" class="img-fluid" src="<?php echo base_url(). '/assets/gambar_utama/'. $brg->foto_utama ?>"></td>
														<td><?php echo $brg->nama_produk ?></td>
													</tr>
													<!-- <tr>
														<th scope="row">2</th>
														<td><img style="width:70px;" class="img-fluid" src="<?php echo base_url('/assets/gambar_utama/pasmina1.jpg') ?>"></td>
														<td>Pashmina Babydoll / pashmina Ceruty baby doll - Black</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td><img style="width:70px;" class="img-fluid" src="<?php echo base_url('/assets/gambar_utama/sienna1.jpg') ?>"></td>
														<td>SiennaLuxury Voal / Voal Premium - Sand</td>
													</tr>
													<tr>
														<th scope="row">4</th>
														<td><img style="width:70px;" class="img-fluid" src="<?php echo base_url('/assets/gambar_utama/derby1.jpg') ?>"></td>
														<td>SEPATU PRIA DERBY SINTESIS - 40</td>
													</tr> -->
												<?php endforeach ?>  
												</tbody>
											</table>
											<!-- Akhir Table -->
										</div>	
									</div>
								</div>
								<!-- <div class="col-md-4">
									<div class="row">
										<div class="col-md-12 text-center">
											<h6 style="font-size: 25px;font-family:Raleway;font-weight:bold">SCAN NOW</h6>
										</div>
										<div style="width: 100%;border-radius:20px;height:320px;background-color:#fff;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;position:relative">
											<div class="row container">
												<div class="col-md-12 text-center">
													<img src="<?php echo base_url().'assets/img/qrcode.png' ?>" class="d-flex justify-content-center img-fluid text-center" style="position:absolute" alt="">
												</div>
											</div>
										</div>
									</div>
								</div> -->
							</div>
							<!-- Akhir Body -->
							</div>
						</section>
					<!-- Akhir Cooming Soon -->

                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="login.html">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>


                   

                    <!-- FUNCTION DATA TABLE -->
                   

                    <!-- CDN JQUERY DATA TABLES -->
                    

                    <!-- Bootstrap core JavaScript-->
                    
                    <script src="<?= base_url() ?>template_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    

                    <!--font awesome  -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                    <!-- Custom scripts for all pages-->
                    <script src="<?= base_url() ?>template_admin/js/sb-admin-2.min.js"></script>

                </div>
            </div>
        </div>
    </div>


	<!-- Chart code -->
<script>
var chart = AmCharts.makeChart("chartdiv", {
    "theme": "none",
    "type": "serial",
  "startDuration": 2,
    "dataProvider": [{
        "country": "USA",
        "visits": 4025,
        "color": "#FF0F00"
    }, {
        "country": "China",
        "visits": 1882,
        "color": "#FF6600"
    }, {
        "country": "Japan",
        "visits": 1809,
        "color": "#FF9E01"
    }, {
        "country": "Germany",
        "visits": 1322,
        "color": "#FCD202"
    }, {
        "country": "UK",
        "visits": 1122,
        "color": "#F8FF01"
    }, {
        "country": "France",
        "visits": 1114,
        "color": "#B0DE09"
    }, {
        "country": "India",
        "visits": 984,
        "color": "#04D215"
    }, {
        "country": "Spain",
        "visits": 711,
        "color": "#0D8ECF"
    }, {
        "country": "Netherlands",
        "visits": 665,
        "color": "#0D52D1"
    }, {
        "country": "Russia",
        "visits": 580,
        "color": "#2A0CD0"
    }, {
        "country": "South Korea",
        "visits": 443,
        "color": "#8A0CCF"
    }, {
        "country": "Canada",
        "visits": 441,
        "color": "#CD0D74"
    }, {
        "country": "Brazil",
        "visits": 395,
        "color": "#754DEB"
    }, {
        "country": "Italy",
        "visits": 386,
        "color": "#DDDDDD"
    }, {
        "country": "Australia",
        "visits": 384,
        "color": "#999999"
    }, {
        "country": "Taiwan",
        "visits": 338,
        "color": "#333333"
    }, {
        "country": "Poland",
        "visits": 328,
        "color": "#000000"
    }],
    "valueAxes": [{
        "position": "left",
        "title": "Visitors"
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillColorsField": "color",
        "fillAlphas": 1,
        "lineAlpha": 0.1,
        "type": "column",
        "valueField": "visits"
    }],
    "depth3D": 20,
  "angle": 30,
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
    },
    "categoryField": "country",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 90
    },
    "export": {
    	"enabled": true
     }

});
</script>

</body>
