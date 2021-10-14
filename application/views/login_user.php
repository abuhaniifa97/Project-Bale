<?php $this->load->view('partial/head'); ?>
<?php $this->load->view('partial/navbar') ?> 
<br>
<body>
  <section>
      <div class="container" style="max-width: 1340px;">
          
          <!-- Outer Row -->
          <div class="row justify-content-center">
            <br>
            <div class="col-md-12">
              <center><h1>Daftar</h1></center>
            </div>
            <div class="col-xl-5 col-lg-12 col-md-9">
              <div class="card border-2 shawdow-lg my-5" style=" width: 100%; background: #FFFFFF; height: 550px; box-shadow: 0px 31px 60px rgba(0, 0, 0, 0.07);border-radius: 20px;">
                <div class="card-body p-0">
                  <br>
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <button  style="width: 210px; height: 40px; border: 2px solid black; border-radius:20px;" class=" btn btn-light" type="submit" aria-hidden="true" ><i class="fa fa-google" aria-hidden="true"></i> Daftar Dengan Google</button>                           
                    </div>
                    <div class="col-lg-12">
                      <div class="p-5">
                          <form method="post" action="" class="user">
                            <div class="form-group">
                                <span>Nama Lengkap</span>
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" name="username">
                            </div>
                            <div class="form-group">
                              <span>No Handphone</span>
                              <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan No Handphone Anda" name="password">
                            </div>
                            <div class="form-group">
                                <span>Username</span>
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username Anda" name="username">
                            </div>
                            <div class="form-group">
                                <span>Password</span>
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Password Anda" name="username">
                                <span>Sudah Punya Akun?</span>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                  <table>
                                    <tr>
                                      <td>
                                        <a href="#" style="width:100px;  border-radius: 25px;" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><span>Daftar</span></a>
                                      </td>
                                      <td style="padding-left: 10px;">
                                        <span>Masuk</span>
                                        <hr>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <!-- <button class="btn btn-outline-dark "><span style="color=ffff;">Kembali belanja</span></button> -->
                        
                          
                          <!-- <button class="btn btn-outline-dark "><span style="color=ffff;">Kembali belanja</span></button> -->


                          <!-- <div class="text-center">
                            <a class="small" href="<?php echo base_url('registrasi/index'); ?>"> Belum Punya Akun? Daftar!</a>
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>

      </div>
  </section>
  <!-- awal fotter -->
  <?php $this->load->view('partial/footer') ?> 
    <!-- akhir fotter -->
</body>