<!doctype html>
<html lang="en">
  <head>
    <!-- sc swict alert -->
    <!-- <script src="<?= base_url(); ?>assets/jsa/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>assets/jsa/myscript.js"></script> -->
    <!-- akhir sc swict alert -->

	
	<!-- lazy load -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.7/jquery.lazyload.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
	
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.7/jquery.lazyload.js"></script> -->

    <!-- icon gambar -->
	<link rel="shortcut icon" href="favicon.ico"  sizes="16x16" />
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- AOS gambar -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<!-- Pay -->
	<script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-a9PQJKTR3yqXNlJ5"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<!-- loading -->
	<!-- <link rel="stylesheet" href="https://js.arcgis.com/4.10/esri/css/main.css"> -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
	<!-- <script src="https://js.arcgis.com/4.10/"></script> -->
	<!-- akhir loading -->


	<!--sweet alert -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script> -->
    <!-- akhir sweet alert -->

	<!-- sweetalert -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
	<!-- akhir sweet alert -->

	<!-- sweetalert -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  -->
    <!-- Akhir Sweet Alert -->

	<!-- sweetalert 22 -->
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

	<!-- sweetalert -->
	<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
	<!-- akhir sweetalert -->

	<!-- lazy load -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.7/jquery.lazyload.js"></script> -->
    
    <!-- AJAX SEARCH -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

    <!-- font raleway -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<!-- Font -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Raleway:wght@200&display=swap" rel="stylesheet">
		<title>BaleSupply</title>
		<style>
			body {
				/* Font Raleway */
				font-family: 'Raleway', sans-serif;
			}
			.paralax{
				background-image: url("<?php echo base_url('assets/img/banner1.jpg') ?>");
				min-height: 500px; 
				width: 100%;
				background-attachment: fixed;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				/* horizontal-align: middle; */
			}
			.card_produk{
				width: 100%;
				height: 230px;
				background-color: #fff;
				border-radius: 10px;
				box-shadow: 0 5px 10px rgb(73 84 100 / 5%);
				border-color: transparent;
				z-index: 20px;
			}

            /* css/hover */
			  .card_home:hover{
				  width: 100%;
				  height: auto;
				  background-color: rgb(221 217 217 / 10%);
				  border-radius: 10px;
				  transition: all 0.50s ease;
			  }
			/* akhir css/hover */
			/* css/hover rekomendasi*/
				.card_hom:hover{
					width: 100%;
					height: 260px;
					background-color: rgb(221 217 217 / 15%);
					border-radius:0px 0px 80px 80px;
					transition: all 0.50s ease;
					position:initial;
				}
			/* akhir css/hover rekomendasi */
			/* awal btn */
					.social-buttons {
							display: flex;
							flex-wrap: wrap;
							justify-content: center;
							margin-top: -10px;
					}
					.social-buttons__button {
							margin: 10px 5px 0;
					}
					.social-button {
						position: relative;
						display: flex;
						justify-content: center;
						align-items: center;
						outline: none;
						width: 70px;
						height: 70px;
						text-decoration: none;
						border-radius: 100%;
						background: #fff;
						text-align: center;
					}
					.social-button::after {
						content: '';
						position: absolute;
						top: -1px;
						left: 50%;
						display: block;
						width: 0;
						height: 0;
						border-radius: 100%;
						transition: 0.3s;
					}
					.social-button:focus, .social-button:hover {
						color: #fff;
					}
					.social-button:focus::after, .social-button:hover::after {
						width: calc(100% + 2px);
						height: calc(100% + 2px);
						margin-left: calc(-50% - 1px);
					}
					.social-button i, .social-button svg {
						position: relative;
						z-index: 1;
						transition: 0.3s;
					}
					.social-button i {
						font-size: 28px;
					}
					.social-button svg {
						height: 30%;
						width: 30%;
					}
					.social-button--snapchat {
						color: #FDD922;
					}
					.social-button--snapchat::after {
						background: #FDD922;
					}
					#cart:hover{
						opacity: 1;
					}
					#cart{
						opacity: 0;
					}

			/* akhir btn */
		
			/* not found */


			/* CSS font All Class */

			*
			{
			font-family: 'PT Sans Caption', sans-serif, 'arial', 'Times New Roman';
			}

			/*Akhir CSS font All Class */

			/*--------------------------------------------Framework --------------------------------*/

			.overlay { position: relative; z-index: 20; } /*done*/
				.ground-color { background: white; }  /*done*/
				.item-bg-color { background: #EAEAEA } /*done*/
				
				/* Padding Section*/
					.padding-top { padding-top: 10px; } /*done*/
					.padding-bottom { padding-bottom: 10px; }   /*done*/
					.padding-vertical { padding-top: 10px; padding-bottom: 10px; }
					.padding-horizontal { padding-left: 10px; padding-right: 10px; }
					.padding-all { padding: 10px; }   /*done*/

					.no-padding-left { padding-left: 0px; }    /*done*/
					.no-padding-right { padding-right: 0px; }   /*done*/
					.no-vertical-padding { padding-top: 0px; padding-bottom: 0px; }
					.no-horizontal-padding { padding-left: 0px; padding-right: 0px; }
					.no-padding { padding: 0px; }   /*done*/
				/* Padding Section*/

				/* Margin section */
					.margin-top { margin-top: 10px; }   /*done*/
					.margin-bottom { margin-bottom: 10px; } /*done*/
					.margin-right { margin-right: 10px; } /*done*/
					.margin-left { margin-left: 10px; } /*done*/
					.margin-horizontal { margin-left: 10px; margin-right: 10px; } /*done*/
					.margin-vertical { margin-top: 10px; margin-bottom: 10px; } /*done*/
					.margin-all { margin: 10px; }   /*done*/
					.no-margin { margin: 0px; }   /*done*/

					.no-vertical-margin { margin-top: 0px; margin-bottom: 0px; }
					.no-horizontal-margin { margin-left: 0px; margin-right: 0px; }

					.inside-col-shrink { margin: 0px 20px; }    /*done - For the inside sections that has also Title section*/ 
				/* Margin section */

				hr
				{ margin: 0px; padding: 0px; border-top: 1px dashed #999; border-style: solid;}
			/*--------------------------------------------FrameWork------------------------*/

			/* 'Scroll gambar */
			/* * {
				box-sizing: border-box;
				}

				.item {
				width: 200px;
				height: 200px;
				margin: 50px auto;
				padding-top: 75px;
				background: rgba(255,85,0, .7);
				text-align: center;
				color: #4E4C48;
				font-size: 1.5em;
				} */

				/* Load */
				#load,#load_cart,#load_keranjang {
					width: 100%;
					height: 100%;
					position: fixed;
					text-indent: 100%;
					background: #e0e0e0 url('./assets/img/loading.gif') no-repeat center;
					z-index: 1;
					opacity: 0.6;
					background-size: 8%;
				}

				#load_edit {
					width: 100%;
					height: 100%;
					position: fixed;
					text-indent: 100%;
					background: #e0e0e0 url('../assets/img/loading.gif') no-repeat center;
					z-index: 1;
					opacity: 0.6;
					background-size: 8%;
				}
				/* Akhir Load */

				/* CSS NAVBAR */
						/* penggunaan media query pada default tablet layout */
						@media only screen and (min-width: 800px) and (max-width: 991px) {
						.nav1 {
							position:fixed;
							background: #0049A8;
							width:100%;
							bottom:0;
							height:60px;
							padding:10px;
							z-index: 20;
							}
						.item{
							
							margin: auto;
						
						}
						.item a{
							padding: 60px;
							margin: auto;
							position: relative;
							position:relative;
							right: 0;
							left:0;
						}
						a:hover{
							background-color:#999;
						}
						.toko{
							display:none;
							
						}
					}
					/* RESOLUSI 768 PX SAMPAI 799 */
					@media only screen and (min-width: 768px) and (max-width: 799px) {
						.nav1 {
							position:fixed;
							background: #0049A8;
							width:100%;
							bottom:0;
							height:60px;
							padding:10px;
							z-index: 20;
							}
						.item{
							
							margin: auto;
						
						}
						.item a{
							padding: 57px;
							margin: auto;
							position: relative;
							position:relative;
							right: 0;
							left:0;
						}
						
						.toko{
							display:none;
							
						}
					}

					/* penggunaan media query pada mobile layout */
					@media only screen and (min-width: 360px) and (max-width: 379px) {

						.nav1 {
							position:fixed;
							background: #0049A8;
							width:100%;
							bottom:0;
							height:60px;
							padding:10px;
							z-index: 20;
							}
						.item{
							margin: auto;
						
						}
						.item a{
							padding:16px;
							margin:0;
							position:relative;
							right: 0;
							left:0;
						}

						.toko{
							display:none;
							
						}
						
						
					
					}

					/* RESOLUSI 360 px sampai 375 px */
					@media only screen and (min-width: 380px) and (max-width: 767px) {

						.nav1 {
							position:fixed;
							background: #0049A8;
							width:100%;
							bottom:0;
							height:60px;
							padding:10px;
							z-index: 20;
							}
						.item{
							margin: auto;

						}
						.item a{
							padding:19px;
							margin:0;
							position:relative;
							right: 0;
							left:0;
						}
						
						.toko{
							display:none;
							
						}



					}

					/* RESOLUSI 320 PX SAMPAI 350 PX */
					@media only screen and (min-width: 320px) and (max-width: 350px) {

						.nav1 {
							position:fixed;
							background: #0049A8;
							width:100%;
							bottom:0;
							height:60px;
							padding:10px;
							z-index: 20;
							}
						.item{
							margin: auto;
							

						}
						.item a{
							padding:12.3px;
							margin:0;
							position:relative;
							right: 0;
							left:0;
						}

						
						.toko{
							display:none;
							
						}



					}


					/* penggunaan media query pada default monitor layout */
					@media only screen and (min-width: 992px) {
						.nav1 {
							background: #0049A8;
							position:fixed;
							z-index: 20;
							width: 100%;
							}
						.toko{
							display:block;
							color:#fff;
						}

						.item{
							padding:10px;
						}

						.nav-item5{
							padding:15px;
						}

						.nav-item4{
							padding:0;
						}

						.nav-item1{
							display:none;
						}

						.nav-item2{
							display:none;
						}
						.nav-item3{
							display:none;
						}

						.nav-item6{
							display:none;
						}
					
					}

					
					/* AKHIR CSS NAVBAR */



					/*CSS KATEGORI DROPDOWN */
					.dropbtn {
					background-color: #000;
					color: white;
					padding: 16px;
					font-size: 16px;
					border: none;
					border-radius: 10px;
					}

					.dropdown {
					position: relative;
					display: inline-block;
					}

					.dropdown-content {
					display: none;
					position: absolute;
					background-color: #f1f1f1;
					min-width: 160px;
					box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
					z-index: 1;
					border-radius: 10px;
					}

					.dropdown-content a {
					color: black;
					padding: 12px 16px;
					text-decoration: none;
					display: block;
					border-radius: 10px;
					}

					.dropdown-content a:hover {background-color: #ddd;}

					.dropdown:hover .dropdown-content {display: block;}

					.dropdown:hover .dropbtn {background-color: #000;}

					/* AKHIR CSS KATEGORI */

				/* CSS NAVBAR AKHIR*/

				/* CSS NAVBAR 2*/
					/* penggunaan media query pada default monitor layout */
					@media only screen and (min-width: 992px) {
						.nav2 {
							background: #0049A8;
							position:fixed;
							z-index: 20;
							width: 100%;
							}
						.toko{
							display:block;
							color:#fff;
						}

						.item{
							padding:10px;
						}

						.nav-item5{
							padding:15px;
						}

						.nav-item4{
							padding:0;
						}

						.nav-item1{
							display:none;
						}

						.nav-item2{
							display:none;
						}
						.nav-item3{
							display:none;
						}

						.nav-item6{
							display:none;
						}
					
					}

					/* penggunaan media query pada mobile layout */
					@media only screen and (min-width: 360px) and (max-width: 379px) {

						.nav2 {
							position:fixed;
							background: #fff;
							width:100%;
							bottom:0;
							height:60px;
							padding:10px;
							z-index: 20;
							box-shadow: 0px 0px 5px;
							}
						p{
							display:none;
						}
						th{
							display:none;
						}
						td{
							display:none;
						}

						span{
							display:none;
						}
						.cos{
							display:none;
						}
						.coss{
							display:none;
						}

						.cosss{
							display:none;
						}
						.item{
							margin: auto;

						}
						.item a{
							display:none;
						}

						.toko{
							display:none;
							
						}



					}

					/* RESOLUSI 360 px sampai 375 px */
					@media only screen and (min-width: 380px) and (max-width: 767px) {

						.nav2 {
							position:fixed;
							background: #fff;
							width:100%;
							bottom:0;
							height:60px;
							padding:10px;
							box-shadow: 0px 0px 5px;
							z-index: 20;
							}
						.item{
							margin: auto;

						}
						p{
							display:none;
						}
						th{
							display:none;
						}
						td{
							display:none;
						}

						span{
							display:none;
						}
						.cos{
							display:none;
						}
						.coss{
							display:none;
						}
						.item a{
							display:none;
						}

						.toko{
							display:none;
							
						}



					}

					/* RESOLUSI 320 PX SAMPAI 350 PX */
					@media only screen and (min-width: 320px) and (max-width: 350px) {

						.nav2 {
							position:fixed;
							background: #fff;
							width:100%;
							bottom:0;
							height:60px;
							box-shadow: 0px 0px 5px;
							padding:10px;
							z-index: 20;
							}
						.item{
							margin: auto;
						}
						p{
							display:none;
						}
						th{
							display:none;
						}
						td{
							display:none;
						}

						span{
							display:none;
						}
						.cos{
							display:none;
						}
						.coss{
							display:none;
						}
						.item a{
							display:none;
						}
						.toko{
							display:none;
							
						}



					}

				/* CSS NAVBAR 2 AKHIR */


				     /* awal css text */
					  /* css text mobile */
					  @media only screen and (min-width: 360px) and (max-width: 767px) {
							.text {
								font-size: 14px;
								line-height: 42px;

							}
						
					    }
						/* css text tab */
						@media only screen and (min-width: 768px) and (max-width: 991px) {
							.text {
								font-size: 16px;
								line-height: 42px;

							}
						
					    }
						/* css text destok */
						@media only screen and (min-width: 992px) {
							.text {
								font-size: 23px;
								line-height: 42px;

							}
						
					    }

					  /* akhir css text */
					  /* awal css carusiol */
					        .cards-wrapper {
								display: flex;
								justify-content: center;
								
							}
							.card1 img {
								max-width: 100%;
								max-height: 100%;
								padding-left: 10px;
								border-radius: 10%;
							}
							
							.carousel-inner {
								padding: 1em;
							}
							.carousel-control-prev,
							.carousel-control-next {
								background-color: #e1e1e1;
								width: 5vh;
								height: 5vh;
								border-radius: 50%;
								top: 50%;
								transform: translateY(-50%);
							}
							@media (min-width: 768px) {
								
								}
							}
					  /* akhir css carusol */
		</style>

</head>
