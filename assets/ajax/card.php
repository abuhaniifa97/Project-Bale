<link rel="stylesheet" href="<?php echo base_url('./halaman_utama/search'); ?>">

<?php



// var_dump('./halaman_utama/search');

$keyword = $_GET ["keyword"];


$query = "  SELECT * FROM produk
            WHERE
            nama_produk LIKE '$keyword' OR
            harga LIKE '$keyword";
$produk = query($query);

var_dump($query);

?> 

        <div class="row" id="container">
				<?php foreach ($card as $pdk) : ?>
                    <div class="col-6 col-md-2 mt-2">
                        <a href="#" data-toggle="modal" data-target="#mdl_produkk<?php echo $pdk->id_produk ?>">
                        <div class="card_produk">
                            <div class="row">
								<div class="col-md-12">
									<img src="<?php echo base_url().'assets/gambar_utama/' .$pdk->foto_utama ?>" class="img-fluid"  style="width:100%;height:150px;object-fit: contain;" alt="produk">
								</div>
								<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
									<span style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:40px"><?php echo $pdk->nama_produk ?></span>
									<br>
									<h5 style="position: absolute;bottom:0;font-weight:800;font-family:Poppins;font-size:13px;color:#000">Rp.<?php echo number_format ($pdk->harga) ?></h5>
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
                                    <div class="container">
                                        <div class="row">
                                                <div class="col-md-5 text-center">
                                                    <div id="carouselExampleControls<?php echo $pdk->id_produk ?>" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                            <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/' .$pdk->foto_utama ?>"  alt="First slide">
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
                                            <form action="<?php echo base_url('konfirmasi'); ?>" method="POST">
                                                    <p style="left: 666px; top: 333px; font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 52px; color: #222222;"><?php echo $pdk->nama_produk ?></p>
                                                    <input type="text" style="display:none" name="nama_pdk" value="<?php echo $pdk->nama_produk ?>">
                                                    <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.<?php echo number_format ($pdk->harga) ?> </b>
                                                    <input type="text" style="display:none" name="harga" value="<?php echo $pdk->harga ?>"> 
                                                <!-- row atribut -->
                                                <div class="row mt-3">
                                                    <div class="col-md-5">
                                                        <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                            <select class="form-control" name="ukuran">
                                                                <option>Pilih ukuran</option>
                                                                <?php foreach ($gabung as $jon) :  ?>
                                                                    <option><?php var_dump($jon->isi_varian) ?></option>
                                                                <?php endforeach ?>
                                                            </select> 
                                                    </div>
                                                    <div class="col-md-5"  >
                                                        <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">qty</p>
                                                            
                                                                <select class="form-control" name="cek">
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
                                                            <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                                <select class="form-control" name="warna">
                                                                    <option>Pilih warna</option>
                                                                    <option></option>
                                                                </select>
                                                        </div> 
                                                            <div class="col-md-5">
                                                                <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                                <table>
                                                                    <td>
                                                                        <tr><p><?php echo $pdk->berat ?> Gram</p></tr>
                                                                    </td>
                                                                </table>
                                                            </div>
                                                    </div>   
                                                    </div> 
                                                    <!-- row akhir atribut -->
                                                    <div class="col-md-12 text-right">
                                                        <div class="container">
                                                            <!-- Button beli sekarang -->
                                                            <button class=" btn btn-warning" name ="test" type="submit" aria-hidden="true">Beli Sekarang</button>
                                                </form>
                                                <!--Form konfirmasi pembelian -->

                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
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
                                                            <div class="card " style="width:300px; height:344px; position:initial; border-radius: 30px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                                                                <img src="<?php echo base_url('assets/img/support 1.png') ?>" class="card-img-right" alt="...">
                                                                    <div class="card-body">
                                                                        <!-- <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : <?php echo $pdk->nama_produk?>%20%0ADengan%20Jumlah : %0AVarian : <?php echo $jon->isi_varian ?>%0Aukuran : <?php echo $jon->isi_varian ?>%20%0Adengan%20harga : <?php echo $pdk->harga?>%0A"></a> -->

                                                                        <a href="https://api.whatsapp.com/send?phone=62895354997040&text=hallo%20%0Akami%20membutuhkan%20bantuan%20dari%20kaka%20admin%20terkait%20pembelian%20dan%20sebagai%20nya"><button type="button" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-user" aria-hidden="true"></i>  Hubungi Customer Service</button></a>
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
                    </div>
				<!-- Akhir Modal -->
                
		</div> 

    