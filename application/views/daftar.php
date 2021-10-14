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
                  <form method="post" action="" class="user">
                      <div class="form-group">
                          <label >No Handphone</label>
                          <input style="width: 100%; height: 40px; border: 1px solid black; border-radius:20px;" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nomer Handphone" name="username">
                      </div>
                <br>    
                </div>   
                    <div class="col-md-12">
                       <a href="<?php echo base_url('auth'); ?>"><button type="button" class="btn btn-primary" style="width: 100%; font-size: 15px; background-color: #0049A8;">Berikutnya</button></a>
                    </div>
                    <br>
                    <br>
                    <div class="col-md-12">
                      <h6>Atau</h6> 
                    </div>
                    <div class="col-md-12">
                      <a aria-hidden="true"><div class="hamun" style="margin-bottom:20px; width: 100%; height: 40px; border: 1px solid blue; border-radius:20px;">
                        <center><img class="image-responsive" src="<?php echo base_url('assets/img/log.png') ?>" style=" position:relative; top:6px; width: 25px;height: 25px;" alt=""><span style="font-size:14px; position:relative; top:6px;">Daftar Dengan Google</span></center></div>
                      </a>                           
                    </div>
                    <div class="col-md-12 text-center">
                      <div class="p-4">
                        <span>Dengan mendaftar, Anda setuju dengan </span>
                        <a href="#"><span>Syarat,ketentuan dan Kebijakan dari Ballesupply</span></a>
                        <span>&</span>
                        <a href="#"><span>Kebijakan Privasi</span></a>
                      </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <table style="margin-left: auto; margin-right: auto;">
                          <tr>
                            <td>
                              <span style="color:#696969;">Sudah Punya akun?</span>
                            </td>
                            <td>
                              <a href=""><span>Login</span></a>
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
 
  <!-- awal fotter -->
  
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