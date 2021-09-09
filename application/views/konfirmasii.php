<?php $this->load->view('partial/head') ?>

    <body>

    <!-- deklarasi variabel -->
        <?php $this->load->view('partial/navbar') ?>

        <h5 class="text-center">Keranjang Belanja</h5>

        <?php if(isset($_POST['test1'])){
                $nama_produk=$_POST['nama_pdk'];
                $berat=$_POST['berat'];
                $kuantyty=$_POST['cek'];
                $harga=$_POST['harga'];
                $jumlah=$harga*$kuantyty;
                $ukuran=$_POST['ukuran'];
                $warna=$_POST['warna'];


                        
                
        } ?>

<!-- card tabel -->
<div class="card text-center container">

    <div class="card">
        <div class="col-md-12">
          <div class="card-header">
          <h5>Detail Pesananmu</h5>
          </div>
          <div class="table-responsive">
          <table class="table">    
           <thead>
              <tr>
                    <th style="text-align: -webkit-auto;" scope="col">Nama Produk</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Harga</th>
                    <th scope="col">QTY</th>
                    <th style="text-align: -webkit-auto;" scope="col">Jumlah Harga</th>
                    <th scope="col">ukuran</th>
                    <th scope="col">warna</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: -webkit-auto;"><?php echo $nama_produk; ?></td>
                    <td><?php echo $berat;?> Gram</td>
                    <td>Rp.<?php echo number_format($harga);?></td>
                    <td><?php echo $kuantyty;?></td>
                    <td><b><?php echo number_format($jumlah);?></b></td>
                    <td><?php echo $ukuran; ?></td>
                    <td><?php echo $warna; ?></td>
                </tr>
                <tr>
                    
                </tr>
            </tbody>
           </table>
         </div>
        </div>
        <div class="col-md-12 text-right">
            <span> Harga Total:  <b><?php echo number_format($jumlah);?></b></span>
        </div>
       <div class="col-md-12 text-right mt-2">
            <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : <?php echo $nama_produk ?> %20%0ABerat%20Produk : <?php echo $berat ?> Gram %20%0ADengan%20Jumlah : <?php echo $kuantyty ?> qty %0AVarian :<?php $warna ?> %0Aukuran : <?php echo $ukuran  ?> %20%0Adengan%20harga :Rp. <?php echo $jumlah ?> %0A"  class=" btn btn-warning" name ="submit" type="submit" aria-hidden="true"></i>Bayar Sekarang</a>
       </div>
       <div class="col-md-12 text-right mt-2">
       <p class="font-italic" style="color:#FC185A;">Ini Belum Termasuk Ongkir</p>
       </div>
    </div>
        
</div>  
</body>

    

    
   