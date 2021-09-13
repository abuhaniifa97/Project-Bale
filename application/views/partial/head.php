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
					border-radius: 15px;
					transition: all 0.50s ease;
				}
			/* akhir css/hover rekomendasi */
			/* awal hover btn */
					@import url(https://fonts.googleapis.com/css?family=Roboto:700);
					Roboto; ; margin: 0;}

					#holder{
					-moz-user-select: -moz-none;
					-khtml-user-select: none;
					-webkit-user-select: none;
					background: white;
					padding: 10px;
					width: 250px;
					margin: 0 auto;
					position: relative;
					top: 50%;
					transform: translateY(-65%);
					box-shadow: 0px 3px 8px rgba(0,0,0,0.25);
					border-radius: 2px;
					}
					.button {
					background: #FDD922;
					margin : 20px auto;
					width : 100%;
					height : 100%;
					overflow: hidden;
					text-align : center;
					transition : .2s;
					cursor : pointer;
					border-radius: 3px;
					box-shadow: 0px 1px 2px rgba(0,0,0,.2);
					transition: all 0.50s ease;
					}
					.btnTwo {
					position : relative;
					width : 200px;
					height : 100px;
					margin-top: -100px;
					padding-top: 2px;
					background : #0049A8;
					left : -250px;
					transition : .3s;
					}
					.btnText {
					color : white;
					transition : .3s;
					margin bottom: 1px;
					}
					.btnText2 {
					margin-top : 63px;
					margin-right : -130px;
					color : #FFF;
					}
					.button:hover .btnTwo{ /*When hovering over .button change .btnTwo*/
					left: -130px;
					}
					.button:hover .btnText{ /*When hovering over .button change .btnText*/
					margin-left : 65px;
					}
					.button:active { /*Clicked and held*/
					box-shadow: 0px 5px 6px rgba(0,0,0,0.3);
					}
			/* akhir hover btn */
			/* awal */
			
			/* akhir */
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
				{ margin: 0px; padding: 0px; border-top: 1px dashed #999; }
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
				#viewDiv {
				padding: 0;
				margin: 0;
				height: 100%;
				overflow: hidden;
				}

				#loading {
				margin: 0;
				position: absolute;
				top: 50%;
				left: 50%;
				margin-right: -50%;
				}


				#load,#load_cart {
					width: 100%;
					height: 100%;
					position: fixed;
					text-indent: 100%;
					background: #e0e0e0 url('./assets/img/loading.gif') no-repeat center;
					z-index: 1;
					opacity: 0.6;
					background-size: 8%;
				}

				/* Akhir Load */
		</style>

</head>
