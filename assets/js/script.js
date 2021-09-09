//ambil elemen yang di butuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

//tambahkan event ketika keyword di tulis
keyword.addEventListener('keyup', function(){
    
    
    //buat object ajax
    var xhr = new XMLHttpRequest();

    //cek kseiapan ajax
    xhr.onreadystatechange = function () {
        if( xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;

        }
    }

    //eksekusi ajax
    xhr.open('GET', 'assets/ajax/card.php');
    xhr.send();


    // xhr.open('GET', 'assets/ajax/card.php?keyword=' + keyword.value, true);

    

});
