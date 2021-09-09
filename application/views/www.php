
<?php

    $text="berenang,menggambar,mendengarkan musik,Belanja,Liburan";

 

    echo "text awal = '$text'";

 

    $hobi=explode(",", $text);

 

    echo "<p>Hasilnya Ketika Menggunakan fungsi Explode</p><pre>";

    print_r($hobi);

    echo "</pre>";


    foreach ($hobi as $key => $data) {

        echo "$key. $data<br/>";
    }
?>
