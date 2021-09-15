<!DOCTYPE html>
<html lang="en">

<head>

    <!-- icon gambar -->
	<link rel="shortcut icon" href="<?php echo base_url('favicon.ico'); ?>"  sizes="16x16" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BALESUPPLY-ADMIN</title>

    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>template_admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- CSS JS, CDN DATATABLES -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css"> 
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>template_admin/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	
	<!-- sweetalert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Akhir Sweet Alert -->  

	<!-- Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<!-- Raleway -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">

	<!-- Resources -->
	<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
	<script src="https://www.amcharts.com/lib/3/serial.js"></script>
	<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

	<!-- Upload Gambar -->
	<script>
		function gambar_utama(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
			
				reader.onload = function (e) {
					$('#choosefileimg_utama').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#img_utama_upload").change(function(){
			gambar_utama(this);
		});
		function gambar_samping(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
			
				reader.onload = function (e) {
					$('#choosefileimg_samping').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#img_samping_upload").change(function(){
			gambar_utama(this);
		});
		// Sama Tiga
		function samatiga(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$('#samatigaimg').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#samatigaupload").change(function(){
			samatiga(this);
		})
	</script>
	<!-- Akhir Upload -->


	<!-- Styles -->
		<style>
		#chartdiv {
		width: 100%;
		height: 500px;
		}										
		</style>
</head>



