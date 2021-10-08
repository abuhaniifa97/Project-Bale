<?php $this->load->view('partial/head'); ?>

<!-- loading -->
<div id="load">Loading...</div>

 <!-- navbar -->
 <?php $this->load->view('partial/navbar'); ?>
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


  
        
      <!-- awal detail keranjang -->
    <div class="card shadow container mt-3" style="max-width: 1310px;">
    <div class="card">
        <div class="col-md-12">
          <div class="card-header">
          <h5>Detail Pesananmu</h5>
          </div>
          <div class="table-responsive">
          <table class="table">    
           <thead>
              <tr>
										<th>Aksi</th>
                    <th style="text-align: -webkit-auto;" scope="col">Nama Produk</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Harga</th>
										<th scope="col">Qty</th>
										
              </tr>
            </thead>
          
             <tbody>
							
                    <tr>
											<td><a href="<?=site_url('detail_keranjang/hapus/') ?>" onclick="return confirm('Yakin akan menghapus data?')"><button type="button" data="modal"  class="btn btn-small" style="background: #FFFFFF; box-shadow: 0px 23px 80px rgba(0, 0, 0, 0.12), 0px 9.60885px 33.4221px rgba(0, 0, 0, 0.0862625), 0px 5.13735px 17.869px rgba(0, 0, 0, 0.0715329), 0px 2.87996px 10.0172px rgba(0, 0, 0, 0.06), 0px 1.52952px 5.32008px rgba(0, 0, 0, 0.0484671), 0px 0.636469px 2.21381px rgba(0, 0, 0, 0.0337375);"><i class="fa fa-trash" style="color:#FC185A;" aria-hidden="true"></i></button></a></td>
                        <td></td>
                        <td> Gram</td>
                        <td>Rp </td> 
												<td></td>
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
          <form action="<?php echo base_url('detail_keranjang/add_detail_cart');?>" id="bayarr" method="post">
				
         
            <!-- alert data tidak ada -->
            <?php if ($this->session->flashdata('alert')): ?>
            <div class="alert alert-secondary text-center" name="alert1" role="alert">Produk tidak ada</div>
            <?php endif; ?>
            <!--Akhir alert data tidak ada -->

            <hr style="width: 100%;margin-top:10px; margin-bottom:7px">
               
               <span style="font-weight:bold "> Total: Rp. </span>
               <br>
                <span style="font-weight:bold"> Berat: Gram</span>
                <input type="hidden" name="id_detail_keranjang" value="">
                <input type="hidden" name="ip_detail" value="">
               	<input type="hidden" name="tot_harga" value="">
                <input type="hidden" name="tot_berat" value="">
           
            
              <input type="hidden" name="jml_qty" value="">
           
           
              <input type="hidden" name="total_berat" value="">
               
           

            
						<hr style="width: 100%;margin-top:10px">  
					</div>
				
				<div class="col-md-12 text-right">
          <a href="<?php echo base_url('halaman_utama'); ?>" style="width: 180px;" class="btn btn-outline-dark">Kembali Belanja</a>
        </div>
        <div class="col-md-12 text-right">
          <button class="btn btn-dark mt-3" name="buy_detail_cart" type="submit" style="width: 180px;"><span style="color:ffff;">Bayar</span></button>
        </div>
        <div class="col-md-12 text-right">
        <p class="font-italic" style="color:#FC185A;margin-top:8px">Ini Belum Termasuk Ongkir</p>
        </div>
        </form>
        <br>
        
      </div>
      </div>  
      <!-- akhir detail keranjang -->
      <section>
        <div class="container mt-4" style="max-width: 1340px;">
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
