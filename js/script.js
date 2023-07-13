$(document).ready(function () {
  $('.nav-link').click(function () {
    $('.nav-link').removeClass('active')
    $(this).addClass('active')
    $('.menu-wrapper').removeClass('active')
  })
});

// scroll
$('.page-scroll').on('click', function (e) {
  var tujuan = $(this).attr('href');
  var elemenTujuan = $(tujuan);
  $('html, body').animate({
    // scroll top = jarak sebuah elemen, elemen mana yang di klik
    scrollTop: elemenTujuan.offset().top - 70
    // memberikan waktu scroll dan animasi swing atau linier
  }, 1000, 'swing');
  // ketika di klik href nya ga jalan
  e.preventDefault();
});



$(document).on('click', '.send', function () {
  /* Inputan Formulir */
  var input_name = $("#name").val(),
    input_phone = $("#phone").val(),
    input_comment = $("#comment").val()

  /* Pengaturan Whatsapp */
  var walink = 'https://web.whatsapp.com/send',
    phone = '6287825956965',
    text = 'Halo saya ingin bertanya',
    text_yes = 'Pesanan Anda berhasil terkirim.',
    text_no = 'Isilah formulir terlebih dahulu.';

  /* Smartphone Support */
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    var walink = 'whatsapp://send';
  }

  if (input_name != "" && input_phone != "" && input_comment != "") {
    /* Whatsapp URL */
    var checkout_whatsapp = walink + '?phone=' + phone + '&text=' + text + '%0A%0A' +
      'NamE : ' + input_name + '%0A' +
      'Number HP / Whatsapp : ' + input_phone + '%0A' +
      'Comment : ' + input_comment;

    /* Whatsapp Window Open */
    window.open(checkout_whatsapp, '_blank');
    document.getElementById("text-info").innerHTML = '<div class="alert alert-success">' + text_yes + '</div>';
  } else {
    document.getElementById("text-info").innerHTML = '<div class="alert alert-danger">' + text_no + '</div>';
  }
});