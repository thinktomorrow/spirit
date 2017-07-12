</main>
<footer class="inset">
  &copy; <?php
  date_default_timezone_set('UTC');
  echo date('Y')
  ?> - Spirit
</footer>

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script>
$(function() {
  // SCROLL TO ID
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 50,
        }, 2000);
        return false;
      }
    }
  });

  // CLONE YOUR HTML

//  $('[id^=clone-').each(function(i){
//	  var cloneDiv = $('#clone-'+ i).html();
//	  var stripFromTag = cloneDiv.replace(/\/</,'&lt;',/\/>/,'&gt;');
//	  $('#code-'+ i).text(stripFromTag);
//  });

  // var cloneDiv = $('[id^="clone-"]').html();
  // var stripFromTag = cloneDiv.replace(/\/</,'&lt;',/\/>/,'&gt;');
  // $('[id^="code-"]').text(stripFromTag);

});

// STICKY
var stickable = $("aside");
var windowHeight = $('header' ).height() - 60;

$(document).on( 'scroll', function(){

    if ($(this).scrollTop() > windowHeight ) {
        stickable.addClass("sticky");
    } else {
        stickable.removeClass("sticky");
    }
});
</script>

</body>
</html>