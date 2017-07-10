<nav class="nav-bar-top row center">
  <div class="column nav__item inline-s">
    <a href="#top">Overview</a>
  </div>
  <div class="column nav__item inline-s">
    <a href="#colorscheme">Colors</a>
  </div>
  <div class="column nav__item inline-s">
    <a href="#typography">Typography</a>
  </div>
  <div class="column nav__item inline-s">
    <a href="#buttons">Buttons</a>
  </div> <!-- Buttons and Labels -->
  <div class="column nav__item inline-s">
    <a href="#labels">Labels</a>
  </div> <!-- Buttons and Labels -->
  <div class="column nav__item inline-s">
    <a href="#notifications">Notifications</a>
  </div> <!-- pusher.github.io/chameleon -->
  <div class="column nav__item inline-s">
    <a href="#iconography">Iconography</a>
  </div>
  <div class="column nav__item inline-s">
    <a href="#forms">Forms/inputs</a>
  </div>
  <div class="column nav__item inline-s">
    <a href="#panels">Panels</a>
  </div>
  <div class="column nav__item inline-s">
    <a href="#thumbnails">Thumbnails</a>
  </div>
  <div class="column nav__item inline-s">
    <a href="#tables">Tables</a>
  </div>
  <div class="column nav__item inline-s">
    <a href="#navbar">Navigation</a>
  </div>
</nav>
<article class="s-column-12 m-column-10 l-column-12 center">
  <?php
  include('views/components/colorscheme.php');
  include('views/components/typography.php');
  include('views/components/components.php');
  include('views/components/iconography.php');
  include('views/components/forms.php');
  include('views/components/checkboxes.php');
  include('views/components/panels.php');
  include('views/components/thumbnails.php');
  include('views/components/tables.php');
  include('views/components/navbar.php');
  ?>
</article>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function() {
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
});
// STICKY
var stickable = $(".nav-bar-top");

$(document).on( 'scroll', function(){
    if ($(this).scrollTop() > 500) {
        stickable.addClass("sticky");
    } else {
        stickable.removeClass("sticky");
    }
});
</script>