<script type="text/javascript" src="public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="public/js/bootstrap.js"></script>
<script>
(function ($) {
  $('.spinner .btn:first-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
  });
  $('.spinner .btn:last-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
  });
})(jQuery);
</script>