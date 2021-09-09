

<body>
    <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <?php foreach ($campur as $buy) :?>
                    <div class="row">
                        <div class="col-md-12">
                            <span style="font-size:12px;font-weight:bold">Penerima</span>
                            <br>
                            <span style="font-weight: bold;"><?php echo $buy->nama_pembeli?></span>
                        </div>
                        <div class="col-md-12">
                            <span><?php echo $buy->no_telepon?></span>
                        </div>
                        <div class="col-md-12">
                            <p><?php echo $buy->alamat?></p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <span style="font-size:12px;font-weight:bold">Pengirim</span>
                            <br>
                            <span style="font-weight: bold;">BALESUPPLY</span>
                        </div>
                        <div class="col-md-12">
                            <span>083824966900</span>
                        </div>
                        <div class="col-md-12">
                            <p>Cihapit,Bandung Wertan, Bandung Wetan,Jawa Barat 40114</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="width: 100%;">
        </div>
        <div class="col-md-12">
            <br>
            <table style="margin-top: 1px;">
                <thead>
                    <tr>
                        <td><span style="width:400px font-weight: bold;">Produk</span></td>
                        <td><span style="width:400px font-weight: bold;">Varian</span></td>
                        <td><span style="width:400px font-weight: bold;">Jumlah</span></td>
                        <td ><span style="width:200px font-weight: bold;">Harga</span></td>
                    </tr>
                </thead>
                <tr>
                    <td style="width:400px"><?php echo $buy->nama_produk ?></td>
                    <td style="width:200px"></td>
                    <td style="width:200px"><?php echo $buy->qty?></td>
                    <td style="width:200px"><?php echo $buy->harga?></td>
                </tr>
                <?php endforeach ?>
            </table>
            <hr style="width:100%">
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <span>Ongkir :</span>
                    <br>
                    <span>JNE Rp.50.000</span>
                </div>
            </div>
            <hr style="width:100%">
        </div>
    </div> 
    <script>
		window.print();
	</script>
</body>
                    <!-- End of Page Wrapper -->