<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:700|Montserrat:200,400,600|Pacifico&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

    <title><?= $title; ?></title>
  </head>
  <body>
    
    <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="<?= base_url(); ?>">Coffee Shop</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <?php if ($title == 'Coffee Shop') : ?>
                <a class="nav-item nav-link active mr-3" href="<?= base_url(); ?>">Home</a>
              <?php else : ?>
                <a class="nav-item nav-link mr-3" href="<?= base_url(); ?>">Home</a>
              <?php endif; ?>

              <?php if ($title == 'Menu') : ?>
                <a class="nav-item nav-link active mr-3" href="<?= base_url('menu'); ?>">Menu</a>
              <?php else : ?>
                <a class="nav-item nav-link mr-3" href="<?= base_url('menu'); ?>">Menu</a>
              <?php endif; ?>

              <?php if ($title == 'Pesanan') : ?>
              <a class="nav-item nav-link active" href="<?= base_url('pesanan'); ?>">Pesanan (<span><?= $notif_pesanan; ?></span>)</a>
              <?php else : ?>
              <a class="nav-item nav-link" href="<?= base_url('pesanan'); ?>">Pesanan (<span><?= $notif_pesanan; ?></span>)</a>
              <?php endif; ?>              
            </div>
          </div>
        </div>
      </nav>
    <!-- End Navbar -->