<body> 
    <!-- head -->
        <?php $this->load->view('partial/head') ?>
    <!-- akhir head -->
    <!-- awal navbar -->
        <?php $this->load->view('partial/navbar') ?>
    <br>
    <br>     
    <!-- akhir navbar -->
    <!-- section serch -->
            <section>
                <div class="container" style="max-width: 1340px;">
                    <div class="row">
                        <div class="col-md-9">
                            <span style="font-size:25px;font-weight:bold">Kategori Busana Muslim</span>
                        </div>
                        <div class="col-md-3 text-right">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 281px; height: 50px; left: 1110px; top: 1933px; background: #FAFAFA; border: 1px solid #777777; box-sizing: border-box; border-radius: 50px;">
                                <div style="width:80px;height:80px;border-radius:100%;color:blue;"></div>
                            </input>
                        </div>
                    </div>
                </div>
            </section>
    <br>
    <!-- akhir section search -->
    <!-- awal section produk kategori -->
        <section>
             <div class="container" style="max-width: 1340px;">

             </div>
        </section>
    <!-- akhir section produk kategori -->
        
    <br>
    <br>
    <!-- awal fotter -->
         <?php $this->load->view('partial/footer') ?> 
    <!-- akhir fotter -->
</body>