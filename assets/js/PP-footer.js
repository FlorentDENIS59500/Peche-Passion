jQuery(document).ready(function($) {

    if (sessionStorage.getItem('advertOnce') !== 'true') {
      $('#container_popup').show();
    } else {
      $('#container_popup').hide();
      $('.overlay-verify').hide();
    };

    $('.btn-yes').click(function() {
      sessionStorage.setItem('advertOnce', 'true');
      $('#container_popup').hide();
      $('.overlay-verify').hide();
    });

    $('.btn-no').click(function() {
      window.location.href = '../assets/img/background/giphy.gif';

    });
  });