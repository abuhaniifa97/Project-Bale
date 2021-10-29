
  <!-- HEAD -->
  <?PHP 
    $this->load->view('user/partial/head');
  ?>

  <div class="container-scroller">
    
    <!-- NAVBAR -->
    <?PHP 
      $this->load->view('user/partial/navbar');
    ?>

    <!-- SIDEBAR -->
    <?PHP 
      $this->load->view('user/partial/sidebar');
    ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- konten card satu -->
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" style="background:none;" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Belum bayar</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" style="background:none;" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Di kirim</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" style="background:none;" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Selesai</a>
                    </li>
                  </ul>
                  
                  <div class="tab-content" style="border:none; padding:0px;" id="myTabContent">
                    <!-- kontent belum bayar -->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="" style="width: 210px; height: 45px; left: 441px; top: 207px; background: #333333; border: 1px solid #000000; box-sizing: border-box; border-radius: 0px 20px 20px 0px;">
                            <p class="text-center" style="color:white; padding: 10px;">20-10-2021</p>
                        </div>
                        <hr>
                      <div class="container">
                        <div class="col-md-12">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                              <tr class="">
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/sepatu.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">Sepatu pantofel bahan Kulit Asli</span>
                                </td>
                                <td style="vertical-align: top;">
                                    <span style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 250.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Hitam, 41</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr>
                              </tr>

                              <tr>
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/sepatu.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">Sepatu pantofel bahan Kulit Asli</span>
                                </td>
                                <td style="vertical-align: top;">
                                    <span style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 250.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Hitam, 41</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr> 
                              </tr>

                              <tr class="">
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/mukena.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">mukena slim premium bahan halus</span>
                                </td>
                                <td style="vertical-align: top;">
                                  <span  style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 350.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Cokelat Merah</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr>
                                
                              </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <hr>
                        <div class="col-md-12 text-right">
                            <span>Total Harga : <span style="font-weight:bold;"> Rp. 850.000</span></span>
                        </div>
                        <div class="col-md-12 text-right" style="">
                            <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">Bayar Sekarang</button>
                        </div>
                      </div>
                    </div>
                    <!-- Akhir kontent belum bayar -->
                    <!-- kontent di kirim -->
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="" style="width: 210px; height: 45px; left: 441px; top: 207px; background: #333333; border: 1px solid #000000; box-sizing: border-box; border-radius: 0px 20px 20px 0px;">
                            <p class="text-center" style="color:white; padding: 10px;">20-10-2021</p>
                        </div>
                        <hr>
                      <div class="container">
                        <div class="col-md-12">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                              <tr class="">
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/sepatu.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">Sepatu pantofel bahan Kulit Asli</span>
                                </td>
                                <td style="vertical-align: top;">
                                    <span style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 250.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Hitam, 41</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr>
                              </tr>

                              <tr>
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/sepatu.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">Sepatu pantofel bahan Kulit Asli</span>
                                </td>
                                <td style="vertical-align: top;">
                                    <span style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 250.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Hitam, 41</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr> 
                              </tr>

                              <tr class="">
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/mukena.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">mukena slim premium bahan halus</span>
                                </td>
                                <td style="vertical-align: top;">
                                  <span  style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 350.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Cokelat Merah</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr>
                                
                              </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <hr>
                        <div class="col-md-12 text-right">
                            <span>Total Harga : <span style="font-weight:bold;"> Rp. 850.000</span></span>
                        </div>
                        <div class="col-md-12 text-right" style="">
                            <button class="btn btn-primary mt-3" style="width:150px;">Lacak</button>
                        </div>
                      </div>
                    </div>
                    <!-- Akhir kontent di kirim -->
                    <!-- kontent selesai -->
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="" style="width: 210px; height: 45px; left: 441px; top: 207px; background: #dfdfdf; border: 1px solid #dfdfdf; box-sizing: border-box; border-radius: 0px 20px 20px 0px;">
                            <p class="text-center" style="color:#444; padding: 10px;">20-10-2021</p>
                        </div>
                        <hr>
                      <div class="container">
                        <div class="col-md-12">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                              <tr class="">
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/sepatu.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">Sepatu pantofel bahan Kulit Asli</span>
                                </td>
                                <td style="vertical-align: top;">
                                    <span style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 250.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Hitam, 41</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr>
                              </tr>

                              <tr>
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/sepatu.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">Sepatu pantofel bahan Kulit Asli</span>
                                </td>
                                <td style="vertical-align: top;">
                                    <span style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 250.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Hitam, 41</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr> 
                              </tr>

                              <tr class="">
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/mukena.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">mukena slim premium bahan halus</span>
                                </td>
                                <td style="vertical-align: top;">
                                  <span  style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 350.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Cokelat Merah</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr>
                                
                              </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <hr>
                        <div class="col-md-12 text-right">
                            <span>Total Harga : <span style="font-weight:bold;"> Rp. 850.000</span></span>
                        </div>
                        <div class="col-md-12 text-right" style="">
                            <button class="btn btn-primary mt-3" style="width:150px;">Nilai</button>
                        </div>
                      </div>
                    </div>
                    <!-- akhir kontent selesai -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--akhir konten card satu -->

          <!-- konten card kedua -->
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" style="background:none;" id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="true">Belum bayar</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" style="background:none;" id="profile-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile" aria-selected="false">Di kirim</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" style="background:none;" id="contact-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false">Selesai</a>
                    </li>
                  </ul>
                  
                  <div class="tab-content" style="border:none; padding:0px;" id="myTabContent">
                    <!-- kontent belum bayar -->
                    <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
                        <div class="" style="width: 210px; height: 45px; left: 441px; top: 207px; background: #333333; border: 1px solid #000000; box-sizing: border-box; border-radius: 0px 20px 20px 0px;">
                            <p class="text-center" style="color:white; padding: 10px;">25-10-2021</p>
                        </div>
                        <hr>
                      <div class="container">
                        <div class="col-md-12">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                              <tr class="">
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/sepatu.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">Sepatu pantofel bahan Kulit Asli</span>
                                </td>
                                <td style="vertical-align: top;">
                                    <span style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 250.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Hitam, 41</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr>
                              </tr>

                              <tr>
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/sepatu.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">Sepatu pantofel bahan Kulit Asli</span>
                                </td>
                                <td style="vertical-align: top;">
                                    <span style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 250.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Hitam, 41</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr> 
                              </tr>

                              <tr class="">
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/mukena.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">mukena slim premium bahan halus</span>
                                </td>
                                <td style="vertical-align: top;">
                                  <span  style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 350.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Cokelat Merah</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr>
                                
                              </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <hr>
                        <div class="col-md-12 text-right">
                            <span>Total Harga : <span style="font-weight:bold;"> Rp. 850.000</span></span>
                        </div>
                        <div class="col-md-12 text-right" style="">
                            <button class="btn btn-primary mt-3">Bayar Sekarang</button>
                        </div>
                      </div>
                    </div>
                    <!-- Akhir kontent belum bayar -->
                    <!-- kontent di kirim -->
                    <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="" style="width: 210px; height: 45px; left: 441px; top: 207px; background: #333333; border: 1px solid #000000; box-sizing: border-box; border-radius: 0px 20px 20px 0px;">
                            <p class="text-center" style="color:white; padding: 10px;">25-10-2021</p>
                        </div>
                        <hr>
                      <div class="container">
                        <div class="col-md-12">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                              <tr class="">
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/sepatu.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">Sepatu pantofel bahan Kulit Asli</span>
                                </td>
                                <td style="vertical-align: top;">
                                    <span style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 250.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Hitam, 41</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr>
                              </tr>

                              <tr>
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/sepatu.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">Sepatu pantofel bahan Kulit Asli</span>
                                </td>
                                <td style="vertical-align: top;">
                                    <span style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 250.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Hitam, 41</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr> 
                              </tr>

                              <tr class="">
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/mukena.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">mukena slim premium bahan halus</span>
                                </td>
                                <td style="vertical-align: top;">
                                  <span  style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 350.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Cokelat Merah</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr>
                                
                              </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <hr>
                        <div class="col-md-12 text-right">
                            <span>Total Harga : <span style="font-weight:bold;"> Rp. 850.000</span></span>
                        </div>
                        <div class="col-md-12 text-right" style="">
                            <button class="btn btn-primary mt-3" style="width:150px;">Lacak</button>
                        </div>
                      </div>
                    </div>
                    <!-- Akhir kontent di kirim -->
                    <!-- kontent selesai -->
                    <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="" style="width: 210px; height: 45px; left: 441px; top: 207px; background: #dfdfdf; border: 1px solid #dfdfdf; box-sizing: border-box; border-radius: 0px 20px 20px 0px;">
                            <p class="text-center" style="color:#444; padding: 10px;">25-10-2021</p>
                        </div>
                        <hr>
                      <div class="container">
                        <div class="col-md-12">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                              <tr class="">
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/sepatu.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">Sepatu pantofel bahan Kulit Asli</span>
                                </td>
                                <td style="vertical-align: top;">
                                    <span style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 250.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Hitam, 41</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr>
                              </tr>

                              <tr>
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/sepatu.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">Sepatu pantofel bahan Kulit Asli</span>
                                </td>
                                <td style="vertical-align: top;">
                                    <span style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 250.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Hitam, 41</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr> 
                              </tr>

                              <tr class="">
                                <td rowspan="3" style="width: 170px;">
                                  <img src="<?php echo base_url('assets/user/images/Foto_produk/mukena.png')?>" class="img-responsive" style="width: 100px; height: 100px;" alt="">
                                </td>
                                <td style="width: 740px; vertical-align: top;">
                                  <span style="font-weight: 600; color: #666666; font-size: 15px; width: 100px; text-transform: capitalize;">mukena slim premium bahan halus</span>
                                </td>
                                <td style="vertical-align: top;">
                                  <span  style="font-weight: 600;font-size: 15px; width: 100px; text-transform: capitalize;">Rp. 350.000</span>
                                </td>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Varian: Cokelat Merah</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border: none;">
                                      <span style="color:#888;">Qty 1</span>
                                    </td>
                                  </tr>
                                
                              </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <hr>
                        <div class="col-md-12 text-right">
                            <span>Total Harga : <span style="font-weight:bold;"> Rp. 850.000</span></span>
                        </div>
                        <div class="col-md-12 text-right" style="">
                            <button class="btn btn-primary mt-3" style="width:150px;">Nilai</button>
                        </div>
                      </div>
                    </div>
                    <!-- akhir kontent selesai -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- akhir kontent card kedua -->
        </div>
        <!-- content-wrapper ends -->

        <!-- FOOTER -->
        <?PHP 
          $this->load->view('user/partial/footer');
        ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- plugins:js -->
  <script src="<?php echo base_url('assets/user/vendors/js/vendor.bundle.base.js')?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo base_url('assets/user/vendors/chart.js/Chart.min.js')?>"></script>
  <script src="<?php echo base_url('assets/user/vendors/datatables.net/jquery.dataTables.js')?>"></script>
  <script src="<?php echo base_url('assets/user/vendors/datatables.net-bs4/dataTables.bootstrap4.js')?>"></script>
  <script src="<?php echo base_url('assets/user/js/dataTables.select.min.js')?>"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url('assets/user/js/off-canvas.js')?>"></script>
  <script src="<?php echo base_url('assets/user/js/hoverable-collapse.js')?>"></script>
  <script src="<?php echo base_url('assets/user/js/template.js')?>"></script>
  <script src="<?php echo base_url('assets/user/js/settings.js')?>"></script>
  <script src="<?php echo base_url('assets/user/js/todolist.js')?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url('assets/user/js/dashboard.js')?>"></script>
  <script src="<?php echo  base_url('assets/user/js/Chart.roundedBarCharts.js')?>"></script>
  <!-- End custom js for this page-->   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

