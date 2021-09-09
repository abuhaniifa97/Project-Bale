<?php $this->load->view('partial/head') ?>
 <!-- navbar -->
 <?php $this->load->view('partial/navbar') ?> 

  <body>
     
      <?php echo $this->session->flashdata('flash'); ?> 
      <!-- function id keranjang -->
        <?php
            function id_keranjang($length = 5, $chars = '1234567890abcdefghijklmnopqrstuvwxyz')
            {
                if($length > 0)
                {
                    $len_chars = (strlen($chars) - 1);
                    $the_chars = $chars{rand(0, $len_chars)};
                    for ($i = 1; $i < $length; $i = strlen($the_chars))
                    {
                        $r = $chars{rand(0, $len_chars)};
                        if ($r != $the_chars{$i - 1}) $the_chars .=  $r;
                    }

                    return $the_chars;
                }
            }
        ?>  
      <!-- akhir -->
            
       <!--Start of Tawk.to Script-->
            
       <script type="text/javascript">
                    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                    (function(){
                    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                    s1.async=true;
                    s1.src='https://embed.tawk.to/612c9ca9d6e7610a49b2ab1a/1feb47u9v';
                    s1.charset='UTF-8';
                    s1.setAttribute('crossorigin','*');
                    s0.parentNode.insertBefore(s1,s0);
                    })();
                    </script>
        <!--End of Tawk.to Script-->
    <!-- Section Slide -->
    <section class=""  >
		<div class="container" style="max-width: 1340px;">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="border-radius: 20px;">
				<div class="carousel-inner">
					<div class="carousel-item active">
					<span class="responsive" ><img src="<?php echo base_url('assets/img/banner53.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="height:auto; border-radius:20px;"></span>
                    </div>
					<div class="carousel-item">
					<span class="responsive" ><img src="<?php echo base_url('assets/img/banner_slide.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="height:auto; border-radius:20px;"></span>
					</div>
					<div class="carousel-item">
					<span class="responsive" ><img src="<?php echo base_url('assets/img/banner53.jpg') ?>" class="d-block w-100 img-fluid"  alt="slider 1"  class="rounded" style="height:auto; border-radius:20px;"></span>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
    </section>
    <!-- Akhir Section slide -->

    <!-- Section Yang Kita suka -->
    <section>
		<div class="container" style="max-width: 1340px;">
			<div class="col-md-12 mt-5" style="padding-left:0px">
				<span style="font-size:25px;font-weight:bold">Mungkin Kamu Suka</span>
			</div>
            <div class="row text-center">
				<!-- Rekomendasi 1 -->
                <div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk1">
						<div style="width: 50px;height:50px;background-color:#FC185A;border-radius:50%;position:relative;color:#fff;float: right;transform: translateY(15px);">
							<span style="position: absolute;left: 12px;top: 15px;font-family:Poppins;font-weight:700">20%</span>
						</div>
                        <div class="card" style="width:100%; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA;height:250px">
                            <img src="<?php echo base_url('assets/gambar_utama/bergo4.png') ?>"  class="card-img-top" style="object-fit: cover;width: 100%;height: 180px;object-fit: cover;" alt="...">
                        </div>
						<div>
							<button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
						</div> 
                    </a>
				</div>
				<!-- Rekomendasi 2 -->
				<div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk2">
						<div style="width: 50px;height:50px;background-color:#FC185A;border-radius:50%;position:relative;color:#fff;float: right;transform: translateY(15px);">
							<span style="position: absolute;left: 12px;top: 15px;font-family:Poppins;font-weight:700">20%</span>
						</div>
                        <div class="card" style="width:100%; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA;height:250px">
                            <img src="<?php echo base_url().'assets/gambar_utama/c2QxLnBuZw==.png'  ?>"  class="card-img-top" style="object-fit: cover;width: 100%;height: 180px;object-fit: cover;" alt="...">
                        </div>
						<div>
							<button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
						</div> 
                    </a>
				</div>
				<!-- Rekomendasi 3 -->
				<div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk3">
						<div style="width: 50px;height:50px;background-color:#FC185A;border-radius:50%;position:relative;color:#fff;float: right;transform: translateY(15px);">
							<span style="position: absolute;left: 12px;top: 15px;font-family:Poppins;font-weight:700">20%</span>
						</div>
                        <div class="card" style="width:100%; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA;height:250px">
                            <img src="<?php echo base_url('assets/gambar_utama/p3.png') ?>"  class="card-img-top" style="object-fit: cover;width: 100%;height: 180px;object-fit: cover;" alt="...">
                        </div>
						<div>
							<button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
						</div> 
                    </a>
				</div>
				<!-- Rekomendasi 4 -->
				<div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk4">
						<div style="width: 50px;height:50px;background-color:#FC185A;border-radius:50%;position:relative;color:#fff;float: right;transform: translateY(15px);">
							<span style="position: absolute;left: 12px;top: 15px;font-family:Poppins;font-weight:700">20%</span>
						</div>
                        <div class="card" style="width:100%; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA;height:250px">
                            <img src="<?php echo base_url('assets/gambar_utama/SkIxLnBuZw==.png') ?>"  class="card-img-top" style="object-fit: cover;width: 100%;height: 180px;object-fit: cover;" alt="...">
                        </div>
						<div>
							<button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
						</div> 
                    </a>
				</div>
				<!-- Rekomendasi 5 -->
				<div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk5">
						<div style="width: 50px;height:50px;background-color:#FC185A;border-radius:50%;position:relative;color:#fff;float: right;transform: translateY(15px);">
							<span style="position: absolute;left: 12px;top: 15px;font-family:Poppins;font-weight:700">20%</span>
						</div>
                        <div class="card" style="width:100%; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA;height:250px">
                            <img src="<?php echo base_url('assets/gambar_utama/YnQxLnBuZw==.png') ?>"  class="card-img-top" style="object-fit: cover;width: 100%;height: 180px;object-fit: cover;" alt="...">
                        </div>
						<div>
							<button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
						</div> 
                    </a>
				</div>
				<!-- Rekemondasi 6 -->
				<div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk6">
						<div style="width: 50px;height:50px;background-color:#FC185A;border-radius:50%;position:relative;color:#fff;float: right;transform: translateY(15px);">
							<span style="position: absolute;left: 12px;top: 15px;font-family:Poppins;font-weight:700">20%</span>
						</div>
                        <div class="card" style="width:100%; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA;height:250px">
                            <img src="<?php echo base_url('assets/gambar_utama/kaki4.png') ?>"  class="card-img-top" style="object-fit: cover;width: 100%;height: 180px;object-fit: cover;" alt="...">
                        </div>
						<div>
							<button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
						</div> 
                    </a>
				</div>
            </div>
        </div>
    </section>
    <!-- Akhir Yang kita suka -->

    
    <!-- chat boot -->
    <!-- <script>!function(e,t,a){var c=e.head||e.getElementsByTagName("head")[0],n=e.createElement("script");n.async=!0,n.defer=!0, n.type="text/javascript",n.src=t+"/static/js/chat_widget.js?config="+JSON.stringify(a),c.appendChild(n)}(document,"https://app.engati.com",{bot_key:"155bbdb90f444969",welcome_msg:true,branding_key:"default",server:"https://app.engati.com",e:"p" });</script> -->
    <!-- akhir chat boot -->

    <!-- chat boot -->
    <!-- <script>!function(e,t,a){var c=e.head||e.getElementsByTagName("head")[0],n=e.createElement("script");n.async=!0,n.defer=!0, n.type="text/javascript",n.src=t+"/static/js/chat_widget.js?config="+JSON.stringify(a),c.appendChild(n)}(document,"https://app.engati.com",{bot_key:"155bbdb90f444969",welcome_msg:true,branding_key:"default",server:"https://app.engati.com",e:"p" });</script> -->
    <!-- akhir chat boot -->



     <!-- modal 1 -->
    <div class="modal fade" id="mdl_produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <?php  
                                $ip = $_SERVER['REMOTE_ADDR'];
                                    
                                ?>         
                                    <div class="container">
                                        <div class="row">
                                                <div class="col-md-5 text-center">
                                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                            <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/bergo4.png'  ?>"  alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                            <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/bergo2.jpg' ?>"  alt="Second slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                            <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/bergo3.jpg'  ?>"  alt="Third slide">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleControls " role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                
                                                </div>

                                            
                                            <div class="col-md-7 text-left">
                                            <!-- awal form post -->
                                            <form action="<?php echo base_url().'halaman_utama/add_cart'?>" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo id_keranjang()?>" name="id_keranjang">
                                            <input type="hidden" value="<?php echo $ip ?>" name="ip" id="">

                                                    <p style="left: 666px; top: 333px;  font-style: normal; font-weight: 600; font-size: 30px; line-height: 52px; color: #222222; text-transform: capitalize;">Bergo Khalisa / Bergo Maryam /Bergo Lasercut - Navy</p>
                                                    <input type="hidden" name="nama_produk" value="Bergo Khalisa / Bergo Maryam /Bergo Lasercut - Navy">
                                                    
                                                    <b style="font-style: normal; font-weight: 300; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.33.000 </b>
                                                    <input type="text" style="display:none" name="harga" value="33000" > 
                                                <!-- row atribut -->
                                                <div class="row mt-3">
                                                    <div class="col-md-5">
                                                        <br>
                                                        <P style="font-style: normal; font-weight:500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Ukuran</P>
                                                            <select class="form-control" name="ukuran" required>
                                                                <option selected disabled value>Pilih ukuran</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                
                                                            </select> 
                                                    </div>
                                                    <div class="col-md-5" >
                                                        <br>
                                                        <p style="font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Qty</p>
                                                                <select class="form-control" name="qty" required>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                </select>
                                                    </div>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <br>
                                                            <P style="font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                                <select class="form-control" name="warna" id="warna" required>
                                                                    <option selected disabled value>Pilih warna</option>
                                                                    <option value="sephia">Sephia</option>
                                                                    <option value="butter">butter</option>
                                                                    <option value="Peanut">Peanut</option>
                                                                    <option value="Baby pink">Baby pink</option>
                                                                    <option value="Dusty pink">Dusty pink</option>
                                                                    <option value="Beige">Beige</option>
                                                                    <option value="Maroon">Maroon</option>
                                                                </select>
                                                        </div> 
                                                            <div class="col-md-5">
                                                                <br>
                                                                <p style="font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                                <table>
                                                                    <td>
                                                                        <tr><p>70 Gram</p></tr>
                                                                        <input type="text" style="display:none" name="berat" value="70 gram">
                                                                        <td></td>
                                                                    </td>
                                                                </table>
                                                            </div>
                                                    </div>   
                                                    </div> 
                                                    <!-- row akhir atribut -->
                                                    <div class="col-md-12 text-right">
                                                        <div class="container">
                                                        <!-- <a href="detail_keranjang"> -->  
                                                        <button class=" btn btn-warning" name ="btn_add_cart" type="submit" aria-hidden="true"><i class="fa fa-shopping-cart"></i> Tambah ke keranjang</button> 
                                                    </form>
                                                    <!-- akhir form post -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <hr style="width: 100%;">
                                                <br>
                                            <div class="row container">
                                                <div class="col-md-6 text-left mb-5">
                                                    <h5>Deskripsi</h3>
                                                    <p style="white-space: pre-wrap;">‼️MOHON TANYA STOCK DULU YA SEBELUM ORDER‼️</p>
                                                    <p style="white-space: pre-wrap;">The most wanted "Khalisa Instan” hijab super simple langsung slup tanpa ribet peniti atau pentul ini kembali restiock! MasyaAllah hijab ini solusi banget buat kamu yang ga suka ribet.Bahannya diamond crepe karena bahannya ringan, adem, jadi nyaman sekali nih buat dipake di rumah atau keluar juga mantul! Khalisa Instan tersedia 20 pilihan warna yang siap kamu bawa pulang.</p>
                                                    <p style="white-space: pre-wrap;">Bahan : Diamond crepe Ukuran : Panjang depan 70 cm Panjang belakang 90 cm  ✔️Finishing : Lasercut 100% cantik!</p>
                                                    <p style="white-space: pre-wrap;">Yang udh tau kualitas produk hijabghaitsa udh gak pake main nunda lagi 😘 langsung cuuusss order dengan cara KLIK LIK DI BIO tanpa tapi, tanpa nanti karena klo ga kebagian nanti gigit jari 💕 !!</p>
                                                </div>
                                                <div class="col-md-5 justify-content-center">
                                                    <div class="row text-center">
                                                        <div class="col-md-12 d-flex justify-content-center mt-2">
                                                            <h5>Hubungi Customer Service kami</h5>
                                                        </div>
                                                        <div class="col-md-12 d-flex justify-content-center p-2">
                                                            <div class="card " style="width:250px; height:303px; position:initial; border-radius: 30px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                                                                <img src="<?php echo base_url('assets/img/cs.png') ?>" style="width: 100%; height: 233px;" class="card-img-fluid" alt="...">
                                                                    <div class="card-body">
                                                                        <!-- <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : <?php echo $pdk->nama_produk?>%20%0ADengan%20Jumlah : %0AVarian : <?php echo $jon->isi_varian ?>%0Aukuran : <?php echo $jon->isi_varian ?>%20%0Adengan%20harga : <?php echo $pdk->harga?>%0A"></a> -->

                                                                        <a href="https://api.whatsapp.com/send?phone=62895354997040&text=hallo%20%0Akami%20membutuhkan%20bantuan%20dari%20kaka%20admin%20terkait%20pembelian%20dan%20sebagai%20nya"><button type="button" style="border-radius: 15px;" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-user" aria-hidden="true"></i>  Hubungi Kami</button></a>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>        
    </div>
    <!-- akhir modal 1  -->
    <!-- moodal produk 2 -->
    <div class="modal fade" id="mdl_produk2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <?php  
                                $ip = $_SERVER['REMOTE_ADDR'];
                                    
                                ?>         
                                    <div class="container">
                                        <div class="row">
                                                <div class="col-md-5 text-center">
                                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/c2QxLnBuZw==.png'  ?>"  alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                            <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/derby2.jpg' ?>"  alt="Second slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                            <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/derby3.jpg'  ?>"  alt="Third slide">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleControls " role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                
                                                </div>

                                            
                                            <div class="col-md-7 text-left">
                                            <!-- awal form post -->
                                            <form action="<?php echo base_url().'halaman_utama/add_cart'?>" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" value="<?php echo id_keranjang()?>" name="id_keranjang"> 
                                                <input type="hidden" value="<?php echo $ip ?>" name="ip" id="">
                                                    <p style="left: 666px; top: 333px; font-style: normal; font-weight: 600; font-size: 30px; line-height: 52px; color: #222222; text-transform: capitalize;">SEPATU PRIA DERBY SINTESIS - 40</p>
                                                    <input type="hidden" name="nama_produk" value="SEPATU PRIA DERBY SINTESIS - 40">
                                                    <b style="font-style: normal; font-weight: 300; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.139.000 </b>
                                                    <input type="hidden" name="harga" value="139000" > 
                                                <!-- row atribut -->
                                                <div class="row mt-3">
                                                    <div class="col-md-5">
                                                        <br>
                                                        <P style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                            <select class="form-control" id="ukuran" name="ukuran" required>
                                                                <option selected disabled value>Pilih ukuran</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">39</option>
                                                                    <option value="40">40</option>
                                                                    <option value="41">41</option>
                                                                    <option value="42">42</option>
                                                                    <option value="43">43</option>
                                                                
                                                            </select> 
                                                    </div>
                                                    <div class="col-md-5" >
                                                        <br>
                                                        <p style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">qty</p>
                                                    
                                                                <select class="form-control" name="qty">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                </select>

                                                    </div>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <br>
                                                            <P style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                                <select class="form-control" id="warna" name="warna">
                                                                    <option selected disabled value>Pilih warna</option>
                                                                    <option value="Tan">Tan</option>
                                                                    <option value="Cokelat">Cokelat</option>
                                                                    <option value="Hitam">Hitam</option>
                                                                </select>
                                                        </div> 
                                                            <div class="col-md-5">
                                                                <br>
                                                                <p style="font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                                <table>
                                                                    <td>
                                                                        <tr><p>70 Gram</p></tr>
                                                                        <input type="text" style="display:none" name="berat" value="70 gram">
                                                                        <td></td>
                                                                    </td>
                                                                </table>
                                                            </div>
                                                    </div>   
                                                    </div> 
                                                    <!-- row akhir atribut -->
                                                    <div class="col-md-12 text-right">
                                                        <div class="container">  
                                                        <button class=" btn btn-warning" name ="btn_add_cart" type="submit" aria-hidden="true"><i class="fa fa-shopping-cart"></i> Tambah Ke keranjang</button>
                                                    </form>
                                                    <!-- akhir form post -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <hr style="width: 100%;">
                                                <br>
                                            <div class="row container">
                                                <div class="col-md-6 text-left mb-5">
                                                    <h5>Deskripsi</h3>
                                                    <p style="white-space: pre-wrap;">‼️MOHON TANYA STOCK DULU YA SEBELUM ORDER‼️</p>
                                                    <p style="white-space: pre-wrap;">Sepatu ini sangat nyaman dipakai, bahan lembut tidak bikin kaki lecet.Sole memakai bahan thermoplastic rubber lentur dan tidak licin.</p>
                                                    <p style="white-space: pre-wrap;">Spesifikasi: Bahan : pu leather Linning : mesh Sole : eco rubber (tidak licin) Size : 37, 38, 39, 40, 41, 42, 43 ,44, 45 Warna : Tan, coklat, hitam Sudah termasuk kotak/box, tisu, silica, dan packing rapih.</p>
                                                    <p style="white-space: pre-wrap;">Size chart 37 = 22,5 cm 38 = 23 cm 39 = 24 cm 40 = 25 cm 41 = 26 cm 42 = 27 cm 43 = 28 cm 44 = 29 cm 45 = 30 cm (custom) 46 = 31 cm (custom) 47 = 32 cm (custom)</p>
                                                </div>
                                                <div class="col-md-5 justify-content-center">
                                                    <div class="row text-center">
                                                        <div class="col-md-12 d-flex justify-content-center mt-2">
                                                            <h5>Hubungi Customer Service kami</h5>
                                                        </div>
                                                        <div class="col-md-12 d-flex justify-content-center p-2">
                                                            <div class="card " style="width:250px; height:303px; position:initial; border-radius: 30px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                                                                <img src="<?php echo base_url('assets/img/cs.png') ?>" style="width: 100%; height: 233px;" class="card-img-fluid" alt="...">
                                                                    <div class="card-body">
                                                                        <!-- <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : <?php echo $pdk->nama_produk?>%20%0ADengan%20Jumlah : %0AVarian : <?php echo $jon->isi_varian ?>%0Aukuran : <?php echo $jon->isi_varian ?>%20%0Adengan%20harga : <?php echo $pdk->harga?>%0A"></a> -->

                                                                        <a href="https://api.whatsapp.com/send?phone=62895354997040&text=hallo%20%0Akami%20membutuhkan%20bantuan%20dari%20kaka%20admin%20terkait%20pembelian%20dan%20sebagai%20nya"><button type="button" style="border-radius: 15px;" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-user" aria-hidden="true"></i>  Hubungi Kami</button></a>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                    </div>
                                    </div>   
                                </div>
                            </div>        
    </div>
    <!-- akhir modal 2 -->
    <!-- modal produk 3 -->
    <div class="modal fade" id="mdl_produk3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php  
                                $ip = $_SERVER['REMOTE_ADDR'];
                                    
                                ?>         
                                <div class="container">
                                    <div class="row">
                                            <div class="col-md-5 text-center">
                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/p3.png' ?>"  alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/p2.png' ?>"  alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/p1.png'  ?>"  alt="Third slide">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls " role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                               
                                            </div>

                                           
                                        <div class="col-md-7 text-left">
                                        <!-- awal form post -->
                                        <form action="<?php echo base_url().'halaman_utama/add_cart'?>" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" value="<?php echo id_keranjang()?>" name="id_keranjang"> 
                                        <input type="hidden" value="<?php echo $ip ?>" name="ip" id="">
                                                <p style="left: 666px; top: 333px;  font-style: normal; font-weight: 600; font-size: 30px; line-height: 52px; color: #222222; text-transform: capitalize;">JILBAB BERGO LASERCUT | HIJAB TALI \ HIJAB INSTAN</p>
                                                <input type="hidden" name="nama_produk" value="JILBAB BERGO LASERCUT | HIJAB TALI \ HIJAB INSTAN">
                                                <b style="font-style: normal; font-weight: 300; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.52,000</b>
                                                <input type="text" style="display:none" name="harga" value="139000" > 
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <br>
                                                    <P style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Ukuran</P>
                                                        <select class="form-control" id="ukuran" name="ukuran">
                                                            <option selected disabled value>Pilih ukuran</option>
                                                                <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option>
                                                            
                                                        </select> 
                                                </div>
                                                <div class="col-md-5" >
                                                    <br>
                                                    <p style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Qty</p>
                                                
                                                            <select class="form-control" name="qty" required>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>

                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <br>
                                                        <P style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                            <select class="form-control" id="warna" name="warna">
                                                                <option selected disabled value>Pilih warna</option>
                                                                <option value="Tan">Tan</option>
                                                                <option value="Cokelat">Cokelat</option>
                                                                <option value="Hitam">Hitam</option>
                                                            </select>
                                                    </div> 
                                                        <div class="col-md-5">
                                                            <br>
                                                            <p style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                            <table>
                                                                <td>
                                                                    <tr><p>50 Gram</p></tr>
                                                                    <input type="text" style="display:none" name="berat" value="70 ">
                                                                    <td></td>
                                                                </td>
                                                            </table>
                                                        </div>
                                                </div>   
                                                </div> 
                                                <!-- row akhir atribut -->
                                                <div class="col-md-12 text-right">
                                                    <div class="container">  
                                                    <button class=" btn btn-warning" name ="btn_add_cart" type="submit" aria-hidden="true"><i class="fa fa-shopping-cart"></i> Tambah Ke keranjang</button>
                                                </form>
                                                <!-- akhir form post -->
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <br>
                                            <hr style="width: 100%;">
                                            <br>
                                        <div class="row container">
                                            <div class="col-md-6 text-left mb-5">
                                                <h5>Deskripsi</h3>
                                                <p style="white-space: pre-wrap;">‼️MOHON TANYA STOCK DULU YA SEBELUM ORDER‼️</p>
                                                <p style="white-space: pre-wrap;">Pashmina Plisket dengan bahan Ceruty Armany Babydoll high quality berserat khusus detail plisket full hingga ujung pashmina Karakter bahan tegak dipakai, tidak mudah kusut, tidak perlu disetrika</p>
                                                <p style="white-space: pre-wrap;">Detail ukuran Lebih panjang 185x75cm (toleransi jahitan) Finishing Jahit Tepi Halus.</p>
                                            </div>
                                            <div class="col-md-5 justify-content-center">
                                                <div class="row text-center">
                                                    <div class="col-md-12 d-flex justify-content-center mt-2">
                                                        <h5>Hubungi Customer Service kami</h5>
                                                    </div>
                                                    <div class="col-md-12 d-flex justify-content-center p-2">
                                                        <div class="card " style="width:300px; height:344px; position:initial; border-radius: 30px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                                                            <img src="<?php echo base_url('assets/img/support 1.png') ?>" class="card-img-right" alt="...">
                                                                <div class="card-body">
                                                                    <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : %20%0ADengan%20Jumlah : %0AVarian : %0Aukuran : %20%0Adengan%20harga : %0A">
                                                                    <button type="button" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-user" aria-hidden="true"></i>  Hubungi Customer Service</button></a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                   </div>
                                </div>   
                            </div>
                         </div>        
    </div>    
    <!-- akhir modal produk 3 -->        
    <!-- modal produk 4 -->
    <div class="modal fade" id="mdl_produk4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <?php  
                            $ip = $_SERVER['REMOTE_ADDR'];
                                
                            ?>          
                                <div class="container">
                                    <div class="row">
                                            <div class="col-md-5 text-center">
                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/SkIxLnBuZw==.png'  ?>"  alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/SkIxLnBuZw==.png' ?>"  alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/SkIxLnBuZw==.png'  ?>"  alt="Third slide">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls " role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                                <!-- <img src="<?php echo base_url().'assets/gambar_utama/' ?>" class="img-fluid" alt="..."> -->
                                            </div>
                                        <div class="col-md-7 text-left">
                                            <!--form keranjang  -->
                                        <form action="<?php echo base_url().'halaman_utama/add_cart'?>" method="post" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo id_keranjang()?>" name="id_keranjang"> 
                                            <input type="hidden" value="<?php echo $ip ?>" name="ip" id="">
                                                <p style="left: 666px; top: 333px; font-style: normal; font-weight: 600; font-size: 30px; line-height: 52px; color: #222222;">PLISKET FULL CERUTY TANPA GARIS TENGAH PASHMINA - Coin</p>
                                                <input type="hidden" name="nama_produk" value="PLISKET FULL CERUTY TANPA GARIS TENGAH PASHMINA - Coin">
                                                <b style="font-style: normal; font-weight: 300; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.60.900</b> 
                                                <input type="hidden" name="harga" value="60900">
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <br>
                                                    <P style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000; text-transform: capitalize;">Ukuran</P>
                                                        <select class="form-control" id="ukuran" name="ukuran" required>
                                                            <option>Pilih ukuran</option>
                                                            
                                                            <option>-</option>
                                                            
                                                        </select> 
                                                </div>
                                                <div class="col-md-5" >
                                                    <br>
                                                    <p style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Qty</p>         
                                                            <select class="form-control" name="qty" required>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <br>
                                                        <P style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                            <select class="form-control" name="warna" id="warna" required>
                                                                <option selected disabled value>Pilih warna</option>
                                                                <option value="kuning">kuning</option>
                                                                <option value="biru">biru</option>
                                                                <option value="pink">pink</option>
                                                                <option value="coin">coin</option>
                                                                <option value="grey">grey</option>
                                                                <option value="dove">dove</option>
                                                                <option value="coin">coin</option>
                                                                <option value="peach">peach</option>
                                                                <option value="maroon">maroon</option>
                                                                <option value="wardah">wardah</option>
                                                            </select>
                                                    </div> 
                                                        <div class="col-md-5">
                                                            <br>
                                                            <p style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                            <table>
                                                                <td>
                                                                    <tr><p>100 Gram</p></tr>
                                                                    <input type="hidden" name="berat" value="100">
                                                                    <td></td>
                                                                </td>
                                                            </table>
                                                        </div>
                                                </div>   
                                                </div> 
                                                <!-- row akhir atribut -->
                                                <div class="col-md-12 text-right">
                                                    <div class="container">  
                                                    <button type="submit" class=" btn btn-warning" name="btn_add_cart"  aria-hidden="true"><i class="fa fa-shopping-cart"></i> Tambahkan ke troli</button>
                                        </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <br>
                                            <hr style="width: 100%;">
                                            <br>
                                        <div class="row container">
                                            <div class="col-md-6 text-left mb-5">
                                                <h5>Deskripsi</h3>
                                                <p style="white-space: pre-wrap;">‼️MOHON TANYA STOCK DULU YA SEBELUM ORDER‼️</p>
                                                <p style="white-space: pre-wrap;">Bergo lasercut Pilihan terbaik sih ini, cuting lasernya halus jadi ga ninggalin noda hitam di kain</p>
                                                <p style="white-space: pre-wrap;">Ada 8 warna, cakep2 & cocok di muka Pas banget buat santuuuy, simple unik & bahannya enak lebih adem & elastis Jangan sampai gak dapet produk baru kita yaa, jahitan rapi & nyaman dipakai</p>
                                            </div>
                                            <div class="col-md-5 justify-content-center">
                                                <div class="row text-center">
                                                    <div class="col-md-12 d-flex justify-content-center mt-2">
                                                        <h5>Hubungi Customer Service kami</h5>
                                                    </div>
                                                    <div class="col-md-12 d-flex justify-content-center p-2">
                                                            <div class="card " style="width:250px; height:303px; position:initial; border-radius: 30px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                                                                <img src="<?php echo base_url('assets/img/cs.png') ?>" style="width: 100%; height: 233px;" class="card-img-fluid" alt="...">
                                                                    <div class="card-body">
                                                                        <!-- <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : <?php echo $pdk->nama_produk?>%20%0ADengan%20Jumlah : %0AVarian : <?php echo $jon->isi_varian ?>%0Aukuran : <?php echo $jon->isi_varian ?>%20%0Adengan%20harga : <?php echo $pdk->harga?>%0A"></a> -->

                                                                        <a href="https://api.whatsapp.com/send?phone=62895354997040&text=hallo%20%0Akami%20membutuhkan%20bantuan%20dari%20kaka%20admin%20terkait%20pembelian%20dan%20sebagai%20nya"><button type="button" style="border-radius: 15px;" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-user" aria-hidden="true"></i>  Hubungi Kami</button></a>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>   
                            </div>
                    </div>        
    </div>
    <!-- akhir modal produk 4 -->
    <!-- modal 5 -->
    <div class="modal fade" id="mdl_produk5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php  
                                $ip = $_SERVER['REMOTE_ADDR'];
                                    
                                ?>        
                                <div class="container">
                                    <div class="row">
                                            <div class="col-md-5 text-center">
                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/YnQxLnBuZw==.png'  ?>"  alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/baju_anak2.jpg' ?>"  alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/baju_anak3.jpg'  ?>"  alt="Third slide">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls " role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                                <!-- <img src="<?php echo base_url().'assets/gambar_utama/' ?>" class="img-fluid" alt="..."> -->
                                            </div>
                                        <div class="col-md-7 text-left">
                                            <form action="<?php echo base_url().'halaman_utama/add_cart'?>" method="post" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo id_keranjang()?>" name="id_keranjang"> 
                                            <input type="hidden" value="<?php echo $ip ?>" name="ip" id="">
                                                <p style="left: 666px; top: 333px; font-style: normal; font-weight: 600; font-size: 30px; line-height: 52px; color: #222222; text-transform: capitalize;">BAJU ANAK LAKI-LAKI KARAKTER LUCU MOTIF KZK | AIRLANE - S</p>
                                                <input type="hidden" name="nama_produk" value="BAJU ANAK LAKI-LAKI KARAKTER LUCU MOTIF KZK | AIRLANE - S">
                                                <b style="font-style: normal; font-weight: 300; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.43,000 </b>
                                                <input type="hidden" name="harga" value="43000"> 
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <br>
                                                    <P style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                        <select class="form-control" id="ukuran" name="ukuran" required>
                                                            <option selected disabled value>Pilih ukuran</option>
                                                            <option value="S">S</option>
                                                            <option value="M">M</option>
                                                            <option value="L">L</option>
                                                            <option value="XL">XL</option>
                                                            
                                                        </select> 
                                                </div>
                                                <div class="col-md-5" >
                                                    <br>
                                                    <p style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">qty</p>         
                                                            <select class="form-control" name="qty" required>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <br>
                                                        <P style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                            <select class="form-control" name="warna" id="warna" required>
                                                                <option selected option value>Pilih warna</option>
                                                                <option value="TM">TM</option>
                                                                <option value="FFM">FFM</option>
                                                                <option value="FM">FM</option>
                                                                <option value="DM">DM</option>
                                                                <option value="TP">TP</option>
                                                                <option value="MH">MH</option>
                                                                <option Value="HH">HH</option>
                                                            </select>
                                                    </div> 
                                                        <div class="col-md-5">
                                                            <br>
                                                            <p style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                            <table>
                                                                <td>
                                                                    <tr><p>100 Gram</p></tr>
                                                                    <input type="hidden" name="berat" value="100">
                                                                    <td></td>
                                                                </td>
                                                            </table>
                                                        </div>
                                                </div>   
                                                </div> 
                                                <!-- row akhir atribut -->
                                                <div class="col-md-12 text-right">
                                                    <div class="container">  
                                                    <button type="submit" class=" btn btn-warning" name="btn_add_cart"  aria-hidden="true"><i class="fa fa-shopping-cart"></i> Tambahkan ke troli</button>
                                            </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <br>
                                            <hr style="width: 100%;">
                                            <br>
                                        <div class="row container">
                                            <div class="col-md-6 text-left mb-5">
                                                <h5>Deskripsi</h3>
                                                <p style="white-space: pre-wrap;">Bahan : 100% cotton combed 30s * Kenapa Combed 30s ? Karena kainnya yg mudah menyerap keringat, bahannya adem, lembut tidak kaku sangat cocok untuk menemani Aktivitas anak2 bermain maupun didlm rumah tidak akan terganggu oleh rasa gerah.</p>
                                                <p style="white-space: pre-wrap;">* Memiliki jahitan yang rapi dengan jahitan rantai dipundak dan bagian leher menggunakan rib sehingga bagian leher tidak mudah rusak atau berubah bentuk.</p>
                                                <p style="white-space: pre-wrap;">* Menggunakan tinta sablon jenis plastisol yang melekat kuat pada kain tidak mudah rusak /retak/pecah walaupun dicuci berkali-kali dan aman untuk kulit anak-anak * Dilengkapi dengan hangtag berkualitas . untuk membedakan produk kami dengan yang lain.</p>
                                                <p style="white-space: pre-wrap;">Untuk motif ini tersedia dalam ukuran S,M,L,XL Estimasi size untuk usia 1 sampai 8 tahun Size S : Lebar 28cm Tinggi 41cm ( usia 1 sd 2 tahun) Size M : Lebar 31cm Tinggi 44cm (usia 3 sd 4 tahun) Size L : Lebar 34cm Tinggi 47cm (usia 5 sd 6 tahun) Size XL : Lebar 37cm Tinggi 50cm ( usia 7 sd 8 tahun)</p>
                                                <p style="white-space: pre-wrap;">NOTE : MOTIF READY SILAHKAN PILIH SIZE YANG DIINGINKAN PADA VARIASI PESAN BANYAK CHAT TERLEBIH DAHULU PENTING ! SILHAKAN LANGSUNG CHAT SAJA. KAMI FAST RESPONS APABILA PAKET SUDAH DITERIMA SILAHKAN KLIK PESAN DITERIMA. MOHON KERJASAMANYA KAK :)</p>
                                            </div>

                                            <div class="col-md-5 justify-content-center">
                                                <div class="row text-center">
                                                    <div class="col-md-12 d-flex justify-content-center mt-2">
                                                        <h5>Hubungi Customer Service kami</h5>
                                                    </div>
                                                    <div class="col-md-12 d-flex justify-content-center p-2">
                                                            <div class="card " style="width:250px; height:303px; position:initial; border-radius: 30px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                                                                <img src="<?php echo base_url('assets/img/cs.png') ?>" style="width: 100%; height: 233px;" class="card-img-fluid" alt="...">
                                                                    <div class="card-body">
                                                                        <!-- <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : <?php echo $pdk->nama_produk?>%20%0ADengan%20Jumlah : %0AVarian : <?php echo $jon->isi_varian ?>%0Aukuran : <?php echo $jon->isi_varian ?>%20%0Adengan%20harga : <?php echo $pdk->harga?>%0A"></a> -->

                                                                        <a href="https://api.whatsapp.com/send?phone=62895354997040&text=hallo%20%0Akami%20membutuhkan%20bantuan%20dari%20kaka%20admin%20terkait%20pembelian%20dan%20sebagai%20nya"><button type="button" style="border-radius: 15px;" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-user" aria-hidden="true"></i>  Hubungi Kami</button></a>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>   
                            </div>
        </div>        
    </div>
    <!-- akhir modal 5 -->
    <!-- modal 6 -->
    <div class="modal fade" id="mdl_produk6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">  
                            <?php  
                            $ip = $_SERVER['REMOTE_ADDR'];
                                
                            ?>       
                                <div class="container">
                                    <div class="row">
                                            <div class="col-md-5 text-center">
                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/kaki4.png'  ?>"  alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/kaki2.jpg' ?>"  alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/kaki3.jpg'  ?>"  alt="Third slide">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls " role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                                <!-- <img src="<?php echo base_url().'assets/gambar_utama/' ?>" class="img-fluid" alt="..."> -->
                                            </div>
                                        <div class="col-md-7 text-left">
                                        <form action="<?php echo base_url().'halaman_utama/add_cart'?>" method="post" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo id_keranjang()?>" name="id_keranjang"> 
                                            <input type="hidden" value="<?php echo $ip ?>" name="ip" id="">
                                                <p style="left: 666px; top: 333px; font-style: normal; font-weight: 600; font-size: 30px; line-height: 52px; color: #222222; text-transform: capitalize;">KAOS KAKI WUDHU SASHEE-BASIC 23-24 CM WARNA HITAM - Hitam</p>
                                                <input type="hidden" name="nama_produk" value="KAOS KAKI WUDHU SASHEE-BASIC 23-24 CM WARNA HITAM - Hitam">
                                                <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.21.250 </b>
                                                <input type="hidden" name="harga" value="21250"> 
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <br>
                                                    <P style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Ukuran</P>
                                                        <select class="form-control" name="ukuran" required>
                                                            <option>Pilih ukuran</option>
                                                            
                                                                <option>-</option>
                                                            
                                                        </select> 
                                                </div>
                                                <div class="col-md-5" >
                                                    <br>
                                                    <p style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Qty</p>
                                                         <select class="form-control" name="qty" required>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <br>
                                                        <P style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                            <select class="form-control" name="warna" required>
                                                                <option selected disabled value>Pilih warna</option>
                                                                <option value="Putih">Putih</option>
                                                                <option value="Cokelat">Cokelat</option>
                                                                <option value="Abu abu">Abu Abu</option>
                                                                <option value="Navy">Navy</option>
                                                                <option value="Maroon">Maroon</option>
                                                                <option value="Cream">Cream</option>
                                                                <option value="Ungu tua">Ungu tua</option>
                                                                <option value="Ungu muda">Ungu muda</option>
                                                                <option value="Dusty Ungu">Dusty ungu</option>
                                                                <option value="Hitam">hitam</option>
                                                            </select>
                                                    </div> 
                                                        <div class="col-md-5">
                                                            <br>
                                                            <p style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                            <table>
                                                                <td>
                                                                    <tr><p>50 Gram</p></tr>
                                                                    <input type="hidden" name="berat" value="50">
                                                                    <td></td>
                                                                </td>
                                                            </table>
                                                        </div>
                                                </div>   
                                                </div> 
                                                <!-- row akhir atribut -->
                                                <div class="col-md-12 text-right">
                                                    <div class="container">
                                                    <button type="submit" class=" btn btn-warning" name="btn_add_cart"  aria-hidden="true"><i class="fa fa-shopping-cart"></i> Tambahkan ke troli</button>
                                            </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <br>
                                            <hr style="width: 100%;">
                                            <br>
                                        <div class="row container">
                                            <div class="col-md-6 text-left mb-5">
                                                <h5>Deskripsi</h3>
                                                <p style="white-space: pre-wrap;">Assalamu'alaikum sasheelovers, kita ada kaos kaki wudhu panjang 60cm untuk sashelovers. Ada 12 varian warna yang kami persembahkan untuk sasheelovers semua.jangan sampai kehabisan yaaa.Berbahan cotton pilihan dan warna Signature dari kami.Proses produksi yang terjaga kualitasnya dari mulai pemilihan bahan baku sampai menjadi kaos kaki,karena skami ingin mempersembahkan produk terbaiknya untuk para Sasheelovers.Untuk varian motif tidak di print melainkan dirajut yah Sasheelovers, motif InsyAllah lebih tahan lama.Kaus kaki sashe dengan Bahan cotton.</p>
                                                <p style="white-space: pre-wrap;">Kain Cotton merupakan salah salah satu jenis yang terbuat dari bahan serat kapas. Jenis kain ini kebanyakan digunakan untuk jenis pakaian. Di masyarakat, jenis kain Cotton memang sangat banyak diminati. Adapun serat yang digunakan untuk membuat kain Cotton di sini merupakan serat yang alami, memiliki sifat Hypo Allergeniie dan tidak mengandung bahan kimia.Cotton memiliki serat yang berongga sehingga apabila dijadikan sebagai pakaian, kulit akan mudah bernafas. Jenis kain ini sangat cocok apabila dipakai di kawasan yang beriklim tropis, termasuk Indonesia. hal itu disebabkan karena jenis kain ini memiliki daya serap air yang sangat tinggi dan daya serap keringat yang sangat baik.Kain Cotton memiliki ciri dan karakteristik tersendiri. Karakteristik inilah yang membedakan antara jenis kain ini dengan yang lain. Berikut adalah beberapa karakteristik yang dimiliki oleh kain Cotton.</p>
                                            </div>

                                            <div class="col-md-5 justify-content-center">
                                                <div class="row text-center">
                                                    <div class="col-md-12 d-flex justify-content-center mt-2">
                                                        <h5>Hubungi Customer Service kami</h5>
                                                    </div>
                                                    <div class="col-md-12 d-flex justify-content-center p-2">
                                                            <div class="card " style="width:250px; height:303px; position:initial; border-radius: 30px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                                                                <img src="<?php echo base_url('assets/img/cs.png') ?>" style="width: 100%; height: 233px;" class="card-img-fluid" alt="...">
                                                                    <div class="card-body">
                                                                        <!-- <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : <?php echo $pdk->nama_produk?>%20%0ADengan%20Jumlah : %0AVarian : <?php echo $jon->isi_varian ?>%0Aukuran : <?php echo $jon->isi_varian ?>%20%0Adengan%20harga : <?php echo $pdk->harga?>%0A"></a> -->

                                                                        <a href="https://api.whatsapp.com/send?phone=62895354997040&text=hallo%20%0Akami%20membutuhkan%20bantuan%20dari%20kaka%20admin%20terkait%20pembelian%20dan%20sebagai%20nya"><button type="button" style="border-radius: 15px;" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-user" aria-hidden="true"></i>  Hubungi Kami</button></a>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>   
                            </div>
        </div>        
    </div>
    <!-- akhir modal 6 -->     
    <!--section pembatas  -->
    <section> 
        <div class="container" style="max-width: 1340px;">
			<img src="<?php echo base_url('assets/img/banner23.jpg') ?>" class="img-fluid"  height="230px" width="100%" style="object-fit: cover;" loading="lazy" alt="">
        </div>    
    </section>
    <!-- Akhir Section pembatas -->
    <!-- section list produk -->
    <section>
		<div class="container mt-4" style="max-width: 1340px;">

        <!--Search-->
			<!-- <div class="row" style="display">
				<div class="col-md-6 text-left">
						<a class="navbar-brand">Produk</a>
				</div>
				<div class="col-md-6 text-right">
					
						<form class="form-inline" action="" method="post">
							<input class="form-control mr-sm-2" type="text" name="keyword" id="keyword" placeholder="masukan keyword pencarian.." autocomplete="off" style="width: 281px; height: 50px; left: 1110px; top: 1933px; background: #FAFAFA; border: 1px solid #777777; box-sizing: border-box; border-radius: 50px;">
                            <button type="submit" style="display:none;" name="cari" id="tombol-cari">Cari</button>
								<div style="height:80px;border-radius:100%;color:blue;"></div>
							</input>
						</form>
					
				</div>
			</div>   -->

			<!-- Card -->
			<div class="row" id="container">
				<?php $no = $this->uri->segment('3') + 1;
                 foreach ($show_item as $pdk) : ?>
                    <div class="col-6 col-md-2 mt-2">
                        <a href="#" data-toggle="modal" data-target="#mdl_produkk<?php echo $pdk->id_produk ?>">
                            <div class="card_home">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="<?php echo base_url().'assets/gambar_utama/' .$pdk->foto_utama ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
                                    </div>
                                    <div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
                                        <span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px"><?php echo $pdk->nama_produk ?></span>
                                        <br>
                                        <h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size:13px;color:#000">Rp.<?php echo number_format ($pdk->harga) ?></h5>
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
					<!-- Akhir Colom  -->

				    <!-- Awal Modal -->
                    <div class="modal fade" id="mdl_produkk<?php echo $pdk->id_produk ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">   
                                <?php  
                                $ip = $_SERVER['REMOTE_ADDR'];
                                    
                                ?>  
                                    <div class="container">
                                        <div class="row">
                                                <div class="col-md-5 text-center">
                                                    <div id="carouselExampleControls<?php echo $pdk->id_produk ?>" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                            <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/' .$pdk->foto_utama ?>"  alt="First slide">
                                                            <input type="text" style="display:none" name="gambar" value="<?php echo $pdk->foto_utama ?>"> 
                                                            </div>
                                                            <div class="carousel-item">
                                                            <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/' .$pdk->foto_samping ?>"  alt="Second slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                            <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/' .$pdk->foto_atas ?>"  alt="Third slide">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleControls<?php echo $pdk->id_produk ?>" role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleControls<?php echo $pdk->id_produk ?>" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                    <!-- <img src="<?php echo base_url().'assets/gambar_utama/' .$pdk->foto_utama ?>" class="img-fluid" alt="..."> -->
                                                </div>

                                            <!-- konfirmasi pembelian -->
                                            <div class="col-md-7 text-left">

                                            <!--Form konfirmasi pembelian -->
                                            <form action="<?php echo base_url().'halaman_utama/add_cart'?>" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" value="<?php echo id_keranjang()?>" name="id_keranjang"> 
                                                    <input type="hidden" value="<?php echo $ip ?>" name="ip" id="">
                                                    <p style="left: 666px; top: 333px; font-style: normal; font-weight: 600; font-size: 30px; line-height: 52px; color: #222222; text-transform: capitalize;"><?php echo $pdk->nama_produk ?></p>
                                                    <input type="text" style="display:none" name="nama_produk" value="<?php echo $pdk->nama_produk ?>">
                                                    <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.<?php echo number_format ($pdk->harga) ?> </b>
													<input type="text" style="display:none" name="harga" value="<?php echo $pdk->harga ?>"> 
													
                                                <!-- row atribut 1 -->
                                                <div class="row mt-3">
                                                    <div class="col-md-5">
													
															<!-- Varian Satu -->
															
															<div id="varian_satu<?php echo $pdk->id_produk ?>" style="display:none">
																<label for="<?php echo $pdk->nama_varian ?>"><?php echo $pdk->nama_varian ?></label> 
																<input type="hidden" value="<?php echo $pdk->nama_varian?>" name="nama_varian_satu">
																<!-- Explode Varian 1 -->
																<?php
																	$row['varian_satu'] = "$pdk->isi_varian";

																	$f = explode(',', $row['varian_satu']);

																	echo "<select class='custom-select' name='isi_varian_satu' required>".PHP_EOL;
																	echo "<option selected disabled value>Pilih $pdk->nama_varian </option>";
																	// this is where you need to use count()
																	for ($x = 0; $x < count($f); $x++) {    
																	echo '<option value="'.$f[$x].'">'.$f[$x].'</option>'.PHP_EOL;
																	}
																	echo "</select>".PHP_EOL;
																?>
															</div>
															<!-- Akhir Varian Satu -->
															<!-- Akhir Explode Varian 1 -->
															<?php 
													
																	if ($pdk->nama_varian == "") {
																		echo "<script>
																		document.getElementById('varian_satu$pdk->id_produk').style.display = 'none';
																		console.log('Kosong');
																		</script>";
																		
																	}else {
																		echo "<script>
																		document.getElementById('varian_satu$pdk->id_produk').style.display = 'block';
																		console.log('Ada');
																		</script>";
																	}
															?>
													</div>
													<!-- Akhir Row Atribut 1 -->
                                                    <div class="col-md-5"  >
                                                        <br>
                                                        <p style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Qty</p>
                                                            
                                                                <select class="form-control" name="qty">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                </select>
                                                              
                                                    </div>
                                                    
                                                </div>
                                                    <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-5">

															
																<div id="varian_dua<?php echo $pdk->id_produk ?>" style="display:none">
																	<label for="<?php echo $pdk->nama_varian_dua ?>"><?php echo $pdk->nama_varian_dua ?></label>
																	<input type="hidden" value="<?php echo $pdk->nama_varian_dua ?>" name="nama_varian_dua">
																	<!-- Explode Varian 2 -->
																		<?php
																			$row['varian_dua'] = "$pdk->isi_varian_dua";

																			$f = explode(',', $row['varian_dua']);

																			echo "<select class='custom-select' name='isi_varian_dua' required>".PHP_EOL;
																			echo "<option selected disabled value>Pilih $pdk->nama_varian </option>";
																			// this is where you need to use count()
																			for ($x = 0; $x < count($f); $x++) {    
																			echo '<option value="'.$f[$x].'">'.$f[$x].'</option>'.PHP_EOL;
																			}
																			echo "</select>".PHP_EOL;
																		?>
																	<!-- Akhir Explode Varian 2 -->
																</div>
																<?php 
																	if ($pdk->nama_varian_dua == "") {
																		echo "<script>
																		document.getElementById('varian_dua$pdk->id_produk').style.display = 'none';
																		</script>";
																	}else {
																		echo "<script>
																		document.getElementById('varian_dua$pdk->id_produk').style.display = 'block';
																		</script>";
																	}
																?>
                                                        </div> 
                                                            <div class="col-md-5">
                                                                <table>
																	<tr>
																		<td style="width:150px"><p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> </td>
																		<td style="width:150px"><span>Stok</span></td>
																	</tr>
																	<tr>
																		<td style="width:150px">
																			<p><?php echo $pdk->berat ?> Gram</p>
																			<input type="text" style="display:none" name="berat" value="<?php echo $pdk->berat ?>">
																		</td>
																		<td style="width:150px">
																			<h6><?php echo $pdk->stok ?></h6>
																			<input type="hidden" value="<?php echo $pdk->stok ?>" name="stok">
																			<input type="hidden" value="<?php echo $pdk->id_produk?>" name="id_produk">
																		</td>
																	</tr>
                                                                </table>
                                                            </div>
                                                    </div>
                                                    </div>   
                                                    </div> 
                                                    <!-- row akhir atribut -->
                                                    <div class="col-md-12 text-right">
                                                        <div class="container">
                                                            <!-- Button beli sekarang -->
                                                              <button class="btn btn-warning" name ="btn_add_cart" type="submit" aria-hidden="true"><i class="fa fa-shopping-cart"></i> tambah ke Keranjang</button>
                                                              <script src="<?= base_url(); ?>assets/jsa/sweetalert2.all.min.js"></script>
                                                            <!-- </a> -->
                                                </form>
                                                <!--Form konfirmasi pembelian -->

                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <hr style="width: 100%;">
                                                <br>
                                            <div class="row container">
                                                <div class="col-md-6 text-left mb-5">
                                                    <h5>Deskripsi</h3>
                                                    <p style="white-space: pre-wrap;"><?php echo $pdk->deskripsi ?></p>
                                                </div>

                                                <div class="col-md-5 justify-content-center">
                                                    <div class="row text-center">
                                                        <div class="col-md-12 d-flex justify-content-center mt-2">
                                                            <h5>Hubungi Customer Service kami</h5>
                                                        </div>
                                                        <div class="col-md-12 d-flex justify-content-center p-2">
                                                            <div class="card " style="width:250px; height:303px; position:initial; border-radius: 30px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                                                                <img src="<?php echo base_url('assets/img/cs.png') ?>" style="width: 100%; height: 233px;" class="card-img-fluid" alt="...">
                                                                    <div class="card-body">
                                                                        <!-- <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : <?php echo $pdk->nama_produk?>%20%0ADengan%20Jumlah : %0AVarian : <?php echo $jon->isi_varian ?>%0Aukuran : <?php echo $jon->isi_varian ?>%20%0Adengan%20harga : <?php echo $pdk->harga?>%0A"></a> -->

                                                                        <a href="https://api.whatsapp.com/send?phone=62895354997040&text=hallo%20%0Akami%20membutuhkan%20bantuan%20dari%20kaka%20admin%20terkait%20pembelian%20dan%20sebagai%20nya"><button type="button" style="border-radius: 15px;" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-user" aria-hidden="true"></i>  Hubungi Kami</button></a>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                            <?php endforeach ?>      
                        </div>
                        <!-- <div class="mt-3">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    </li>
                                </ul>
                            </nav> 
                        </div> -->
                    </div>
				<!-- Akhir Modal -->
                
			</div>
			<?= $this->pagination->create_links(); ?>
			<!-- Akhir Card -->
               
            </div>
        </div>
    </section>
    <!-- Akhir list produk -->
    <!-- section belanja  -->
    <section class="mb-5 mt-5">
		<div class="container text-center" style="max-width: 1340px;">
		<!-- Cara Berbelanja -->
			<div class="row">
				<div class="col-md-12 text-center">
					<h6 style="left: 53px; top: 3583px; font-family: Poppins; font-style: normal; font-weight: 600; font-size: 30px; line-height: 45px; align-items: center; text-align: center; color: #000000; text-shadow: 0px 99px 280px rgba(253, 217, 34, 0.17), 0px 41.3598px 116.977px rgba(253, 217, 34, 0.122205), 0px 22.1129px 62.5417px rgba(253, 217, 34, 0.101338), 0px 12.3963px 35.0603px rgba(253, 217, 34, 0.085), 0px 6.5836px 18.6203px rgba(253, 217, 34, 0.0686618), 0px 2.73958px 7.74832px rgba(253, 217, 34, 0.0477948);">Cara Berbelanja</h6>
					<!-- <hr style="width: 80px;"> -->
				</div>
				<div class=" col-md-6" data-aos="fade-up" data-aos-duration="3000">
					<img class="img-fluid d-flex justify-content-center" src="<?php echo base_url('assets/img/cara_belanja.png') ?>" style="width:600px"  alt="...">
				</div>
				<div class="col-md-6">
					<div style="margin-top:15%;margin-bottom:5%">
						<h5 style="color:#015EB6;font-weight: 600;" class="text-left">Beginilah Cara Belanja Dengan Mudah</h5>
						<br>
						<table>
							<tr style="transform:translateY(10px);">
								<td>
                                   <div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.0), 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px rgba(0, 0, 0, 0.0655718), 0px 1.20603px 0px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">1</div>
								</td>
								<td></td>
								<td style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 18px; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Pilih produk</td>
							</tr>
							<tr style="transform:translateY(20px);">
								<td>
                                   <div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.0), 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px rgba(0, 0, 0, 0.0655718), 0px 1.20603px 0px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">2</div>
								</td>
								<td></td>
								<td style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 18px; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Baca deskripsi</td>
							</tr>
							<tr style="transform:translateY(30px);">
								<td>
                                   <div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.0), 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px rgba(0, 0, 0, 0.0655718), 0px 1.20603px 0px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">3</div>
								</td>
								<td></td>
								<td style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 18px; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Tentukan Jumlah QTY</td>
							</tr>

						</table>
					</div>
				</div>
				<div class="col-md-12" style="margin-top:5%">
					<P style="left: 53px; top: 3583px; font-family: Poppins; font-style: normal; font-weight: 600; font-size: 30px; line-height: 45px; align-items: center; text-align: center; color: #000000; text-shadow: 0px 99px 280px rgba(253, 217, 34, 0.17), 0px 41.3598px 116.977px rgba(253, 217, 34, 0.122205), 0px 22.1129px 62.5417px rgba(253, 217, 34, 0.101338), 0px 12.3963px 35.0603px rgba(253, 217, 34, 0.085), 0px 6.5836px 18.6203px rgba(253, 217, 34, 0.0686618), 0px 2.73958px 7.74832px rgba(253, 217, 34, 0.0477948);">Cara Bertransaksi</p>
					<!-- <hr style="width: 70px;"> -->
				</div>
			</div>
			<!-- Transaksi -->
			<div class="row flex-column-reverse flex-lg-row">
				<div class="col-md-2"></div>
				<div class="col-md-4">
						<div style="margin-top:30%;margin-bottom:5%">
							<h5 style="color:#015EB6;;font-weight:600" class="text-left">Beginilah Cara Bertransaksi Dengan Aman</h5>
							<table > 
								<tr style="transform:translateY(10px);">
									<td>
										<div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.0), 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px rgba(0, 0, 0, 0.0655718), 0px 1.20603px 0px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">1</div>
									</td>
									<td></td>
									<td style="font-family: Poppins; font-style: normal; font-weight: 300; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Tentukan lokasi penerima</td>
								</tr>
								<tr style="transform:translateY(20px);">
									<td>
                                       <div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.0), 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px rgba(0, 0, 0, 0.0655718), 0px 1.20603px 0px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">2</div>
									</td>
									<td></td>
									<td style="font-family: Poppins; font-style: normal; font-weight: 300;line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Tentukan metode pembayaran</td>
								</tr>
								<tr style="transform:translateY(30px);">
									<td>
                                       <div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.0), 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px rgba(0, 0, 0, 0.0655718), 0px 1.20603px 0px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">3</div>
									</td>
									<td></td>
									<td style="font-family: Poppins; font-style: normal; font-weight: 300; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Pembeli akan menerima resi</td>
								</tr>
							</table>
						</div>
				</div>
				<div class="col-md-6" data-aos="fade-down" data-aos-duration="1500">  
					<img src="<?php echo base_url('assets/img/cara_transaksi.png') ?>" style="width:600px" class="img-fluid d-flex justify-content-center"  alt="...">
				</div>
			</div>
        </div>
    </section>
	<!-- akhir section belanja  -->
	<!-- Paralax -->
	<section>
		<div class="container" style="max-width: 1340px;">
			<div class="paralax">

			</div>
		</div>
	</section>
	<!-- Akhir Paralax -->

    <!-- Lazy -->
    <!-- <script type="text/javascript" charset="utf-8">
        $(function() {
            $("img.lazy").lazyload({
                effect : "fadeIn"
            });

        });
    </script> -->


    <!-- lazyload -->
    <!-- <script  type="text/javascript" charset="utf-8">
              document.addEventListener("DOMContentLoaded", function() {
                var lazyloadImages = document.querySelectorAll("img.lazy");    
                var lazyloadThrottleTimeout;

                function lazyload () {
                    if(lazyloadThrottleTimeout) {
                        clearTimeout(lazyloadThrottleTimeout);
                    }    

                    lazyloadThrottleTimeout = setTimeout(function() {
                        var scrollTop = window.pageYOffset;
                        lazyloadImages.forEach(function(img) {
                            if(img.offsetTop < (window.innerHeight + scrollTop)) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                            }
                        });
                        if(lazyloadImages.length == 0) { 
                            document.removeEventListener("scroll", lazyload);
                            window.removeEventListener("resize", lazyload);
                            window.removeEventListener("orientationChange", lazyload);
                        }
                    }, 20);
                }

                document.addEventListener("scroll", lazyload);
                window.addEventListener("resize", lazyload);
                window.addEventListener("orientationChange", lazyload);
            });
    </script> -->

    <!-- script live search -->
    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
    
    <!-- footer  -->
    <?php $this->load->view('partial/footer') ?>
    
    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- awal -->
    
    <!-- akhir -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!--sweet alert -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <!-- akhir sweet alert -->

    <!-- Validasi Varian -->
	<!-- Alert -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script> -->
	<!-- <script>
		function btn_tambah_varian(){
			document.getElementById("tampil_var").style.display = "block";
		}
		function show_ukuran(){
			
			var x = document.getElementById("id_var").value;
  			if(x == "Ukuran"){
				document.getElementById("sect_ukuran").style.display = "block";
				document.getElementById("sect_warna").style.display = "none";
			  }else if(x == "Warna"){
				document.getElementById("sect_warna").style.display = "block";
				document.getElementById("sect_ukuran").style.display = "none";
			  }
		}
	</script> -->
	<!-- Akhir Validasi -->

    <!--Start of Tawk.to Script-->
            
                <script type="text/javascript">
                    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                    (function(){
                    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                    s1.async=true;
                    s1.src='https://embed.tawk.to/612c9ca9d6e7610a49b2ab1a/1feb47u9v';
                    s1.charset='UTF-8';
                    s1.setAttribute('crossorigin','*');
                    s0.parentNode.insertBefore(s1,s0);
                    })();
                </script>
        <!--End of Tawk.to Script-->
        
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
        <!--akhir sweetalert -->


  </body>

