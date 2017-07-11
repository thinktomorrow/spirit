<div class="row text-center" id="top">
  <header class="hero">
    <div class="absolute-center">
      <h1 class="title">Spirit Components</h1>
      <p>Elements Documentation - v0.0.0</p>
    </div>
  </header>
</div>
  <main class="main--raised">
    <?php include('views/_partials/components-nav.php'); ?>
    <div class="container row">
    <article class="column-10 stack-l">
      <?php
      // include('views/components/colorscheme.php');
      // include('views/components/typography.php');
      // include('views/components/iconography.php');
      include('views/components/components.php');
      include('views/components/forms.php');
      include('views/components/checkboxes.php');
      include('views/components/panels.php');
      include('views/components/listgroups.php');
      include('views/components/thumbnails.php');
      include('views/components/tables.php');
      include('views/components/navbar.php');
      ?>
    </article>
  </div>
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

  for (var i = 0; i < 99; i++) {
    var cloneDiv = $('#clone-'+ i).html();
    var stripFromTag = cloneDiv.replace(/\/</,'&lt;',/\/>/,'&gt;');
    $('#code-'+ i).text(stripFromTag);
  }

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