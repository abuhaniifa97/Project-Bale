 const flashData = $('.flash-data').data('flashdata');

 if (flashData) {
     Swal({
         title: 'Keranjang Belanja',
         Text : 'Berhasil' + flashData,
         type:  'success'
     });
 }