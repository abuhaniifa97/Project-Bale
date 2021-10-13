<?php $this->load->view('partial/head'); ?>
<?php $this->load->view('partial/navbar') ?> 
<br>
<body>
 <section>
   <div class="container" style="max-width: 1340px;">
    <div class="row justify-content-center">
      <div class="col-md-12">
          <center><h1>Register</h1></center>
      </div>
      <div class="col-xl-5 col-lg-12 col-md-9">
      <div class="wow" style=" width: 100%;  background: #FFFFFF; height: auto; box-shadow: 0px 31px 60px rgba(0, 0, 0, 0.07);border-radius: 20px;">  
        <div class="p-4">
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <a aria-hidden="true"><div class="hamun" style="margin-bottom:20px; width: 100%; height: 40px; border: 1px solid blue; border-radius:20px;">
                    <center><img class="image-responsive" src="<?php echo base_url('assets/img/log.png') ?>" style=" position:relative; top:6px; width: 25px;height: 25px;" alt=""><span style="font-size:14px; position:relative; top:6px;">Daftar Dengan Google</span></center></div>
                  </a>                           
                </div>
                <div class="col-md-12">
                  <h6>Atau</h6> 
                </div>
                <div class="col-md-12">
                  <form method="post" action="" class="user">
                      <div class="form-group">
                          <label >Nama Lengkap</label>
                          <input style="width: 100%; height: 40px; border: 2px solid black; border-radius:20px;" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" name="username">
                      </div>
                      <div class="form-group">
                        <label >No Handphone</label>
                        <input style="width: 100%; height: 40px; border: 2px solid black; border-radius:20px;" type="number" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan No Handphone Anda" name="password">
                      </div>
                      <div class="form-group">
                          <label>Username</label>
                          <input style="width: 100%; height: 40px; border: 2px solid black; border-radius:20px;" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username Anda" name="username">
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input style="width: 100%; height: 40px; border: 2px solid black; border-radius:20px;" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Password Anda" name="username">
                      </div>
                <br>    
                </div>   
                    <div class="col-md-12">
                      <table style="margin-left: auto; margin-right: auto;">
                            <tr>
                                <td style="position:relative; right:5px;">
                                  <a href="#" class="bt btn btn-primary btn-lg active" role="button" aria-pressed="true"><span>Daftar</span></a>
                                </td>
                                <td>
                                  <button type="button" class="bt btn btn-outline-primary ">Masuk</button>
                                </td>
                            </tr>
                      </table>
                    </div>
            </div>
          </div>
        </div>
       </div>
      </div>
    </div>
  </div>
 </section>
  <br>
  <!-- awal fotter -->
  <?php $this->load->view('partial/footer') ?> 
    <!-- akhir fotter -->
 <style>
   /* awal css hr di register */
   h6 {
							overflow: hidden;
							text-align: center;
						}
						h6:before,
						h6:after {
							background-color: #000;
							content: "";
							display: inline-block;
							height: 1px;
							position: relative;
							vertical-align: middle;
							width: 44%;
						}
						h6:before {
							right: 0.5em;
							margin-left: -1%;
						}
						h6:after {
							left: 0.5em;
							margin-right: -2%;
						}
					  /* akhir css di register */
 </style>   
</body>