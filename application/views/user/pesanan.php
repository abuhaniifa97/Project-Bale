<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profil.php">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Profil</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pesanan.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Pesanan Saya</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
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
                                  <img src="images/Foto_produk/sepatu.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/sepatu.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/mukena.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/sepatu.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/sepatu.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/mukena.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/sepatu.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/sepatu.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/mukena.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/sepatu.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/sepatu.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/mukena.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/sepatu.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/sepatu.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/mukena.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/sepatu.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/sepatu.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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
                                  <img src="images/Foto_produk/mukena.png" class="img-responsive" style="width: 100px; height: 100px;" alt="">
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

