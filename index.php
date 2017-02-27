<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Spirit - Your frontend toolkit</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/layout.css">
    <link rel="stylesheet" href="assets/css/spirit.css">
    <link rel="stylesheet" href="assets/vendor/warpaint.css">

</head>
<body>
  - buffer.com/style-guide#buttons
  - initiele opzet met designers
  - presentatie klant
  <aside>
    <header><img src="assets/svg/logo.svg" alt="Spirit"></header>
    <div class="nav__item inset"> Colors </div>
    <div class="nav__item inset"> Typography </div>
    <div class="nav__item inset"> Components </div> <!-- Buttons and Labels -->
    <div class="nav__item inset"> Forms/Inputs </div>
    <div class="nav__item inset"> Notifications </div> <!-- pusher.github.io/chameleon -->
    <div class="nav__item inset"> Iconography </div>
  </aside>
  <main>

  <?php include('views/colorscheme.php') ?>
  <?php include('views/typography.php') ?>
  <?php include('views/components.php') ?>
  <?php include('views/iconography.php') ?>
  <?php // include('views/forms.php') ?>

  <footer class="inset">
    &copy; <?php print(date('Y')) ?> - Spirit
  </footer>
</main>
</body>
</html>
