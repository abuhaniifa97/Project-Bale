<?php $this->load->view('partial/head'); ?>
<?php $this->load->view('partial/navbar2') ?>

    <!--navbar atas detail keranjang  -->
    <div class="nav3">
      <center style="padding:15px;"><span >KERANJANG</span></center>
    </div>
    <!-- akhir navbar atas detail keranjang -->

<!-- loading -->
<div id="load"></div>

 <!-- navbar -->

<br>
<br>
<br>

<body>
 
  <!-- Id Generate -->
  <?php
    function id_detail_keranjang($length = 9, $chars = '1234567890abcdefghijklmnopqrstuvwxyz')
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
  <!-- Akhir Id Generate -->

    

    <!-- card detail keranjang mobile -->
    <div class="container">
        <div class="card2">
            <div class="col-md-12 pt-3">
							<!-- Content -->
							  <table>
                  <tr>
                    <td rowspan="5">
                      <img src="<?php echo base_url('assets/img/103.png') ?>"class="img-responsive img-fluid" style="width: 100px; height: 100px;" alt="">
                    </td>
                    <td rowspan="5" style="width: 10px;">

                    </td>
                  </tr>
                  <tr>
                    <td style="width: 180px;">
                      <span style="font-size: 15px; width: 100px; text-transform: capitalize;">Pashmina bahan halus</span>
                    </td>
                    <td style="position:relative; width: 20px;">
                      <div >
                        <a href="<?=site_url('detail_keranjang/hapus/') ?>" style="float: right;" onclick="return confirm('Yakin akan menghapus data?')"> <i class="fa fa-trash" style="color:#FC185A; font-size:20px;" aria-hidden="true"></i></a>

                      </div>
                       
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span style="color: #888888;">Varian : Hitam</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span style="color: #888888;">Qty 1</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span>Rp 45.000</span>
                    </td>
                   
                  </tr>
                  
                   
                 
                </table>
							<!-- Akhir Content -->
						</div>
            
            <!-- Produk 2 -->
            <div class="col-md-12 pt-3">
							<!-- Content -->
							  <table>
                  <tr>
                    <td rowspan="5">
                      <img src="<?php echo base_url('assets/img/103.png') ?>"class="img-responsive img-fluid" style="width: 100px; height: 100px;" alt="">
                    </td>
                    <td rowspan="5" style="width: 10px;">

                    </td>
                  </tr>
                  <tr>
                    <td style="width: 180px;">
                      <span style="font-size: 15px; width: 100px; text-transform: capitalize;">Pashmina bahan halus</span>
                    </td>
                    <td style="position:relative; width: 20px;">
                      <div >
                        <a href="<?=site_url('detail_keranjang/hapus/') ?>" style="float: right;" onclick="return confirm('Yakin akan menghapus data?')"> <i class="fa fa-trash" style="color:#FC185A; font-size:20px;" aria-hidden="true"></i></a>

                      </div>
                       
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span style="color: #888888;">Varian : Hitam</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span style="color: #888888;">Qty 1</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span>Rp 45.000</span>
                    </td>
                   
                  </tr>
                  
                   
                 
                </table>
							<!-- Akhir Content -->
						</div>
            <!-- Akhir produk 2 -->

            <!-- produk 3 -->
            <div class="col-md-12 pt-3">
							<!-- Content -->
							  <table>
                  <tr>
                    <td rowspan="5">
                      <img src="<?php echo base_url('assets/img/103.png') ?>"class="img-responsive img-fluid" style="width: 100px; height: 100px;" alt="">
                    </td>
                    <td rowspan="5" style="width: 10px;">

                    </td>
                  </tr>
                  <tr>
                    <td style="width: 180px;">
                      <span style="font-size: 15px; width: 100px; text-transform: capitalize;">Pashmina bahan halus</span>
                    </td>
                    <td style="position:relative; width: 20px;">
                      <div >
                        <a href="<?=site_url('detail_keranjang/hapus/') ?>" style="float: right;" onclick="return confirm('Yakin akan menghapus data?')"> <i class="fa fa-trash" style="color:#FC185A; font-size:20px;" aria-hidden="true"></i></a>

                      </div>
                       
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span style="color: #888888;">Varian : Hitam</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span style="color: #888888;">Qty 1</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span>Rp 45.000</span>
                    </td>
                   
                  </tr>
                  
                   
                 
                </table>
							<!-- Akhir Content -->
						</div>
            <!-- Akhir produk 3 -->

            <!-- batas produk -->
            <div class="col-md-12 mt-4">
              <hr>
            </div>

            <!-- Ringkasan -->
            <div class="col-md-12 mt-3">
              <table>
                <tr>
                  <td>
                    <span class="judul" style="font-weight:bold;">Ringkasan Pembayaran</span>
                  </td>
                  
                  
                </tr>
                <tr>
                  <td style="width: 250px;">
                    <span class="totalpemb">Total Pembayaran</span>
                  </td>
                  <td rowspan="2"  style="width: 100px;">
                    <span class="hrg1">Rp 150.000</span>
                  </td>
                </tr>
              </table>
            </div>
        </div>
        <!--akhir ringkasan  -->

        <div class="artb row">
          <div class="col-md-12">
            <!--awal button bulat  -->
            <a href="<?php echo base_url('halaman_utama'); ?>">
              <div class="oval">
                <span style="font-size: 14px; color:#444; padding: 20px; top: 12px; position: relative;">X</span>
              </div>
            </a>
            <!-- akhir button bulat -->
             
            <!-- awal keterangan klik untuk kembali -->
              <div class="ktr">
                <span class="text-center" style="text-transform:capitalize; font-size: 10px; color:#666; position: absolute; margin: 7px; right: 6px;">klik untuk kembali</span>
              </div>
            <!-- akhir keterangan klik untuk kembali -->
          </div>
        </div>
    </div>
    <!--akhir card detail keranjang mobile -->
        
  <!-- awal detail keranjang -->
  <div class="c1 card shadow container mt-3" style="max-width: 1310px;">
    <div class="card">
        <div class="col-md-12">
          <div class="card-header">
            <h5>Detail Pesananmu</h5>
          </div>
            <div class="table-responsive">
              <table class="table">    

                  <thead>
                    <tr>
                         
                          <th style="text-align: -webkit-auto;" scope="col">Produk</th>
                          <th style="text-align: -webkit-auto;" scope="col">Nama Produk</th>
                          <th scope="col">Berat</th>
                          <th scope="col">Harga</th>
                          <th scope="col">Qty</th>
                          <th>Aksi</th>
                          
                    </tr>
                  </thead>
          
                  <tbody>
                        <tr>
                            
                            <td><img src="<?php echo base_url('assets/img/103.png') ?>"class="img-responsive img-fluid" style="width: 100px; height: 100px;" alt=""></td>
                            <td style="text-transform:capitalize;">Sepatu fantopel kulit</td>
                            <td>1000 Gram</td> 
                            <td>Rp 250.000</td>
                            <td>1</td>
                            <td><a href="<?=site_url('detail_keranjang/hapus/') ?>" onclick="return confirm('Yakin akan menghapus data?')"><button type="button" data="modal"  class="btn btn-small" style="background: #FFFFFF; box-shadow: 0px 23px 80px rgba(0, 0, 0, 0.12), 0px 9.60885px 33.4221px rgba(0, 0, 0, 0.0862625), 0px 5.13735px 17.869px rgba(0, 0, 0, 0.0715329), 0px 2.87996px 10.0172px rgba(0, 0, 0, 0.06), 0px 1.52952px 5.32008px rgba(0, 0, 0, 0.0484671), 0px 0.636469px 2.21381px rgba(0, 0, 0, 0.0337375);"><i class="fa fa-trash" style="color:#FC185A;" aria-hidden="true"></i></button></a></td>
                            <?php 
                              if( ""){

                              }else{
                                echo "<td></td>";
                              }
                            ?>
                            <?php 
                              if( ""){
                                
                              }else{
                                echo " <td></td>";
                              }
                            ?>                                          
                        </tr>
                        <tr>
                            
                            <td><img src="<?php echo base_url('assets/img/103.png') ?>"class="img-responsive img-fluid" style="width: 100px; height: 100px;" alt=""></td>
                            <td style="text-transform:capitalize;">Sepatu fantopel kulit</td>
                            <td>1000 Gram</td> 
                            <td>Rp 250.000</td>
                            <td>1</td>
                            <td><a href="<?=site_url('detail_keranjang/hapus/') ?>" onclick="return confirm('Yakin akan menghapus data?')"><button type="button" data="modal"  class="btn btn-small" style="background: #FFFFFF; box-shadow: 0px 23px 80px rgba(0, 0, 0, 0.12), 0px 9.60885px 33.4221px rgba(0, 0, 0, 0.0862625), 0px 5.13735px 17.869px rgba(0, 0, 0, 0.0715329), 0px 2.87996px 10.0172px rgba(0, 0, 0, 0.06), 0px 1.52952px 5.32008px rgba(0, 0, 0, 0.0484671), 0px 0.636469px 2.21381px rgba(0, 0, 0, 0.0337375);"><i class="fa fa-trash" style="color:#FC185A;" aria-hidden="true"></i></button></a></td>
                            <?php 
                              if( ""){

                              }else{
                                echo "<td></td>";
                              }
                            ?>
                            <?php 
                              if( ""){
                                
                              }else{
                                echo " <td></td>";
                              }
                            ?>                                          
                        </tr>
                  </tbody>
              </table>
            </div>
          </div>

            <div class="col-md-12 text-right container mb-5">
              <form action="" id="bayarr" method="post">
          
            
                  <!-- alert data tidak ada -->
                  <?php if ($this->session->flashdata('alert')): ?>
                    <div class="alert alert-secondary text-center" name="alert1" role="alert">Produk tidak ada</div>
                        <?php endif; ?>
                        <!--Akhir alert data tidak ada -->

                        <hr style="width: 100%;margin-top:10px; border: 0.1px solid #E5E7E9;">
                        
                          <span style="font-weight:bold "> Total: Rp. </span>
                          <br>
                          <span style="font-weight:bold"> Berat: Gram</span>
                          <input type="hidden" name="id_detail_keranjang" value="">
                          <input type="hidden" name="ip_detail" value="">
                          <input type="hidden" name="tot_harga" value="">
                          <input type="hidden" name="tot_berat" value="">
                    
                      
                          <input type="hidden" name="jml_qty" value="">
                          <input type="hidden" name="total_berat" value="">
                      
                        <hr style="width: 100%; margin-top:10px; border: 0.1px solid #E5E7E9;">  
                </div>
            
                  <div class="cos col-md-12 text-right">
                    <a href="<?php echo base_url('halaman_utama'); ?>" style="width: 180px;" class="btn btn-outline-dark">Kembali Belanja</a>
                  </div>

                  <div class="coss col-md-12 text-right">
                    <button class="btn btn-dark mt-3" name="buy_detail_cart" type="submit" style="width: 180px;"><span style="color:ffff;">Bayar</span></button>
                  </div>

                  <div class="col-md-12 text-right">
                    <p class="font-italic" style="color:#FC185A;margin-top:8px">Ini Belum Termasuk Ongkir</p>
                  </div>
              </form>
              <br>
            </div>
    </div>
  </div> 
      <!-- akhir detail keranjang -->
  
      
     
      <section>
        <div class="c3 container mt-4" style="max-width: 1340px;">
          <div class="paralax">

          </div>
        </div>
	    </section>
    
       <div class="">
           <!-- footer -->
        <?php $this->load->view('partial/footer') ?>       
       </div>

     
       

       <?php if ($this->session->flashdata('success')): ?>
          <script>
              Swal.fire(
                'Di tambahkan',
                'Berhasil di tambahkan',
                'success'
                );

          </script>
       <?php endif; ?>

       <!-- sweetalert -->
       <script>
            $('#form_button_submit').click(function(){

                swal({
                    title:"", 
                    text:"Loading...",
                    icon: "https://www.boasnotas.com/img/loading2.gif",
                    buttons: false,      
                    closeOnClickOutside: false,
                    timer: 5000,
                    //icon: "success"
                });


                });
        </script>
        <!-- akhir sweetalert -->


        <script>
         $('body').append('<div style="" id="loadingDiv"><div class="loader">Loading...</div></div>');
          $(window).on('load', function(){
            setTimeout(removeLoader, 2000); //wait for page load PLUS two seconds.
          });
          function removeLoader(){
              $( "#loadingDiv" ).fadeOut(500, function() {
                // fadeOut complete. Remove the loading div
                $( "#loadingDiv" ).remove(); //makes page more lightweight 
            });  
          }
        </script>




        <script>
         setTimeout(function(){ 
          $("#loading").hide();
          
          }, 3000);
        </script>



        <!-- loading yt -->
        <script>
          $(document).ready(function(){
            $("#load").fadeOut(3000);

          });
        </script>
</body>
