<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="position: relative;" >

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">BALESUPPLY</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
            <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('admin/tambah_produk') ?>" data-target="#kta" aria-expanded="true" aria-controls="collapseTwo">
            <!-- <i class="fas fa-user"></i> -->
            <span>Tambah Produk</span>
        </a>
        <div id="kta" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('admin/invoice') ?>"  data-target="#transaksi" aria-expanded="true" aria-controls="collapseUtilities">
            <!-- <i class="fas fa-book"></i> -->
            <span>Invoice</span>
        </a>
        <div id="transaksi" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                
            </div>
        </div>
    </li>


    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('admin/blog') ?>"  data-target="#transaksi" aria-expanded="true" aria-controls="collapseUtilities">
            <!-- <i class="fas fa-book"></i> -->
            <span>Blog</span>
        </a>
        <div id="transaksi" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('admin/slide_bar') ?>"  data-target="#transaksi" aria-expanded="true" aria-controls="collapseUtilities">
            <!-- <i class="fas fa-book"></i> -->
            <span>Banner Promo</span>
        </a>
        <div id="transaksi" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                
            </div>
        </div>
    </li>

    <li class="nav-item" style="display:block">
        <a class="nav-link collapsed" href="<?php echo base_url('admin/kategori') ?>" data-target="#fasilitas" aria-expanded="true" aria-controls="collapseUtilities">
            <!-- <i class="fas fa-home"></i> -->
            <span>Kategori</span>
        </a>
        <div id="fasilitas" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
               
            </div>
        </div>
    </li>

    <!-- Divider -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
