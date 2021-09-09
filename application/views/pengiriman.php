<?php $this->load->view('partial/head'); ?>
<?php $this->load->view('partial/navbar'); ?>
<body> 
    <!-- dekrlerasi -->
    
    <!-- akhir -->
<div class="container"> 
              <h3 class="text-center">Metode Pengiriman</h3>
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <div class="card" style="widht: 25rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><p style="font-size:12px">Kontak</p>081220395252</li>
                                <li class="list-group-item"><p style="font-size:12px">alamat</p>Jln.nusantara. Desa Tugu. RT/RW 002/003. Kecamatan Lelea. Kabupaten indramayu. Kode Pos 45261.</li>
                                  
                            </ul>
                        </div>
                        <h6 class="text-left mt-5">Pilih Metode Pengiriman</h6>
                        <div class="card " style="widht: 25rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">JNE</label> 
                                          <small style="margin: 5px 100px 10px;">Rp.18.000</small>
                                        <br>
                                        <small>estimasi 6-7 hari</small>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">Sicepat</label> 
                                        <small style="margin: 5px 100px 4px;">Rp.15.000</small>
                                        <br>
                                        <small>estimasi 2-5 hari</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-dark">Lanjutkan</button>
                                <a href="" style="text-white ml-3">Kembali</a>
                            </div>
                    </div>
                    <div class="col-md-6" style="baground:#FAFAFA;">
                        <div class="text-center container" >

                        <div class="card mt-4" style="height:500px; ">
                            <div class="col-md-12">
                            <div class="card-header">
                            
                            </div>
                            <div class="table-responsive">
                            <table class="table">    
                            <thead>
                                <tr>
                                        <th style="text-align: -webkit-auto;" scope="col">Produk</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">QTY</th>
                                        <th scope="col">Harga</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: -webkit-auto;"></td>
                                        <td>Sepatu</td>
                                        <td>1</td>
                                        <td>Rp.150.000</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: -webkit-auto;"></td>
                                        <td>Sepatu</td>
                                        <td>1</td>
                                        <td>Rp.150.000</td> 
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="col-md-12 text-right mt-4">
                                <span> Harga Total:  <b>Rp.300.000</b></span>
                            </div>
                            </div>
                            
                        </div>
        
                    </div>
                </div>
            </div>
      </section>
        
       




 <br>
 <br>


    <!-- footer -->
<?php $this->load->view('partial/footer') ?>     
</body>