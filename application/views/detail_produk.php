<?php $this->load->view('partial/head') ?>
 <!-- navbar -->
 <?php $this->load->view('partial/navbar') ?>
<br>
<br>
 
 <body>
     <!-- awal section detail produk -->
     <section>
         <div class="container" style="max-width: 1370px;">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100"  src="<?php echo base_url().'assets/gambar_utama/p3.png' ?>" alt="First slide">
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
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 ">
                            <p style="position:relative; left:3px; font-style: normal; font-weight: 600; font-size: 28px; line-height: 55px; color: #222222; text-transform: capitalize;">JILBAB BERGO LASERCUT | HIJAB INSTAN</p>
                            <input type="hidden" name="nama_produk" value="JILBAB BERGO LASERCUT |HIJAB INSTAN">
                            <b style="position:relative; left:3px;  font-style: normal; font-weight: 300; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.52,000</b>
                            <input type="text" style="display:none" name="harga" value="139000" >
                            <div class=""style="padding-bottom: 60px; "></div>
                        </div>
                        <div class="col-md-12">
                            <table>
                                <tr>
                                    <td style="width:220px">
                                        <P style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</P>
                                        <p>50 Gram</p>
                                        <input type="text" style="display:none" name="berat" value="70 ">   
                                    </td>
                                    <td style="width:220px">
                                        <P style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Stok</P>
                                        <p>50 Gram</p>
                                        <input type="text" style="display:none" name="berat" value="70 ">   
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <table>
                                <tr>
                                    <td style="width:220px">
                                        <P style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                        <select class="form-control" id="warna" name="warna">
                                            <option selected disabled value>Pilih warna</option>
                                            <option value="Tan">Tan</option>
                                            <option value="Cokelat">Cokelat</option>
                                            <option value="Hitam">Hitam</option>
                                        </select>
                                    </td>
                                    <td style="width:220px ">
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
                                    </td>
                                </tr>
                            </table>
                        </div>  
                    <div class="col-md-12">
                            <table>
                                <tr>
                                        <td style="width:200px">    
                                            <p style="font-style: normal; font-weight: 600; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;  margin-top: 20px;">Jumlah</p>
                                            <select class="form-control" name="qty" style= "width: 68px;  height:40px;">
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
                                        </td>
                                        <td style="width:200px;">
                                            <button style="width:180px; position: relative; top:32px;" class=" btn btn-warning" name ="btn_add_cart" type="submit" aria-hidden="true" ><i class="fa fa-shopping-cart"></i> Tambah keranjang</button>    
                                        </td>
                                        <td>
                                                <div class="dropdown">
                                                    <button style="position: relative; top:32px;" type="button" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-share-alt " style="color:black" style="width:20px; height:20px;" aria-hidden="true"></i></button>
                                                    <div class="dropdown-content" style="position:absolute; right:10px;">
                                                        <a href="https://www.instagram.com/?url=https://www.drdrop.co/" target="_blank" rel="noopener"><span>share <i class="fa fa-instagram" aria-hidden="true"></i></span></a>
                                                        <a href="https://api.whatsapp.com/send?phone=62895354997040&text=hallo%20%0Akami%20Bagikankewa%"><span>share <i class="fa fa-whatsapp" aria-hidden="true"></i></span></a>
                                                        <a href="https://www.facebook.com/share.php?u=target_link" target="_blank"><span>share <i class="fa fa-facebook-official" aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                        </td>
                                </tr>
                            </table> 
                     </div>                     
                    </div>
                </div>
            </div>
         </div>
     </section>
      <br>
      <div class="container" style="max-width: 1340px;">
       <hr style="width: 100% background-color : 1px solid #E5E7E">
      </div>
     <!-- akhir section detail produk -->
     <br>
     <!-- awal section deskripsi -->
     <section>
         <div class="container" style="max-width: 1340px;">
            <div class="row">
                <div class="col-md-6">
                    <h5>Deskripsi</h5>
                    <p style="white-space: pre-wrap;" >‼️MOHON TANYA STOCK DULU YA SEBELUM ORDER‼️</p>
                    <p style="white-space: pre-wrap;">Pashmina Plisket dengan bahan Ceruty Armany Babydoll high quality berserat khusus detail plisket full hingga ujung pashmina Karakter bahan tegak dipakai, tidak mudah kusut, tidak perlu disetrika</p>
                    <p style="white-space: pre-wrap;">Detail ukuran Lebih panjang 185x75cm (toleransi jahitan) Finishing Jahit Tepi Halus.</p>
                </div>
                <div class="col-md-6">
                    <div class="row">
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
     </section>
     <!-- akhir section deskripsi -->
     <br>
     <!-- awal rekomendasi produk -->
     <section>
                    <div class="container" style="max-width: 1340px;">
                <div class="col-md-12 mt-5" style="padding-left:0px">
                    <span style="font-size:25px;font-weight:bold">Mungkin Kamu Suka</span>
                </div>
                <br>
             
                <div class="row text-center">
                    <!-- Mungkin kamu suka -->
                    <!-- Rekomendasi 1 -->
                    <div class="col-6 col-md-2">
                        <a href="" class="" data-toggle="modal" data-target="#mdl_produk1">
                            <div class="card_home">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
                                    </div>
                                    <div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
                                        <span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab</span>
                                        <br>
                                        <h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size:13px;color:#000">Rp. 150000</h5>
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
                    <!-- Rekomendasi 2 -->
                    <div class="col-6 col-md-2">
                        <a href="" class="" data-toggle="modal" data-target="#mdl_produk2">
                        <div class="card_home">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
                                    </div>
                                    <div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
                                        <span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab</span>
                                        <br>
                                        <h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size:13px;color:#000">Rp. 150000</h5>
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
                    <!-- Rekomendasi 3 -->
                    <div class="col-6 col-md-2">
                        <a href="" class="" data-toggle="modal" data-target="#mdl_produk3">
                        <div class="card_home">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
                                    </div>
                                    <div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
                                        <span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab</span>
                                        <br>
                                        <h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size:13px;color:#000">Rp. 150000</h5>
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
                    <!-- Rekomendasi 4 -->
                    <div class="col-6 col-md-2">
                        <a href="" class="" data-toggle="modal" data-target="#mdl_produk4">
                        <div class="card_home">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
                                    </div>
                                    <div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
                                        <span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab</span>
                                        <br>
                                        <h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size:13px;color:#000">Rp. 150000</h5>
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
                    <!-- Rekomendasi 5 -->
                    <div class="col-6 col-md-2">
                        <a href="" class="" data-toggle="modal" data-target="#mdl_produk5">
                        <div class="card_home">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
                                    </div>
                                    <div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
                                        <span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab</span>
                                        <br>
                                        <h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size:13px;color:#000">Rp. 150000</h5>
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
                    <!-- Rekemondasi 6 -->
                    <div class="col-6 col-md-2">
                        <a href="" class="" data-toggle="modal" data-target="#mdl_produk6">
                        <div class="card_home">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="<?php echo base_url().'assets/gambar_utama/7.png' ?>" class="img-fluid"  style="width:100%;height:auto; " alt="Produk">
                                    </div>
                                    <div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
                                        <span class="text-uppercase" style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:35px">Jilbab</span>
                                        <br>
                                        <h5 style="position: absolute;bottom:0;font-weight:830;font-family:Poppins;font-size:13px;color:#000">Rp. 150000</h5>
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
                        </div>    
                        </a>
                    </div>              
            </section>
     <!-- akhir rekomendasi produk -->
     <br>
     <!-- footer  -->
      <?php $this->load->view('partial/footer') ?>
    <!-- akhir footer -->
 </body>
     

    


