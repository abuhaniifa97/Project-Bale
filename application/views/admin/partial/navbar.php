
<nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow" style="background: #0049A8; position: fixed; z-index: 1; width: 100%;">
<a class="navbar-brand" href="<?= base_url() ?>halaman_utama" style="font-weight: bold;font-family:Poppins;font-style:normal;color:#fff"></a>
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" style="color:black;">
        <i class="fa fa-bar" style="color:darkblue;"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto" >

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <!-- <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a> -->
            <!-- Dropdown - Messages -->
            <!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li> -->

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </a>
            
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url('halaman_utama') ?>" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400" ></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>
</nav>