<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Website Jon's Bakery</title>

  <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>">
  <link rel="stylesheet" href="assets/css/sidebar.css">

  <style>
    #discount {
      background-color: white;
    }

    #discount:hover {
      background-color: #31A38E;
      color: white;
    }

    #home {
      background-color: white;
    }

    #home:hover {
      background-color: #31A38E;
      color: white;
    }

    #location {
      background-color: white;
    }

    #location:hover {
      background-color: #31A38E;
      color: white;
    }

    #catalog {
      background-color: white;
    }

    #catalog:hover {
      background-color: #31A38E;
      color: white;
    }

    #aboutus {
      background-color: white;
    }

    #aboutus:hover {
      background-color: #31A38E;
      color: white;
    }

    #faq {
      background-color: white;
    }

    #faq:hover {
      background-color: #31A38E;
      color: white;
    }

  </style>
</head>

<body style="background-color:black; color:white;">

  <div class="container-fluid">
    <div class="row" style="background-color:#31A38E; padding-top: 4px;padding-bottom:4px;">
      <div class="col-10">
        <a href="https://facebook.com/"><img src="<?php echo base_url('assets/facebook.svg'); ?>" alt="" width="27px"></a>
        <a href="https://instagram.com/"><img src="<?php echo base_url('assets/instagram.svg'); ?>" alt="" width="27px"></a>
        <a href="https://google.com/"><img src="<?php echo base_url('assets/google.svg'); ?>" alt="" width="27px"></a>
        <span id="no-hp" style="color:white; padding-left:5px; font-weight: bold;">0852-8964-4888</span>
      </div>
      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <pre></pre>
      <a href="<?= base_url() ?>home/profile" id="userDropdown" class="btn" aria-haspopup="true" aria-expanded="false" style=" background-color: #31A38E; color: white;">
        <span style="color:white; font-weight: bold;"><?= $user['name_user']; ?></span>
        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image'] ?>" width="27px">
      </a>
    </div>
  </div>
  </div>

  <div class="row">
    <div class="col">
      <p style="font-size: 77px; text-align: center; padding-top: 14px;">JON'S</p>
      <p style="font-size: 20px; text-align: center; margin-top:-45px;">Boulangerie - Patisserie</p>
    </div>
  </div><br>

  <div class="row" style="background-color: white">
    <div class="col-2">
      <center><a href="<?= base_url(); ?>" class="btn" id="home">HOME</a></center>
    </div>

    <div class="col-2">
      <center><a href="<?= base_url(); ?>location" class="btn" id="location">LOCATION</a></center>
    </div>

    <div class="col-2">
      <center><a href="<?= base_url(); ?>roti" class="btn" id="catalog">CATALOG</a></center>
    </div>

    <div class="col-2">
      <center><a href="<?= base_url(); ?>discount" class="btn" id="discount">DISCOUNT</a></center>
    </div>

    <div class="col-2">

      <center><a href="<?= base_url(); ?>faqtampil" class="btn" id="faq">FAQ</a></center>

    </div>

    <div class="col-2">
      <center><a href="<?= base_url(); ?>aboutus" class="btn" id="aboutus">ABOUT US</a></center>
    </div>

  </div><br>

  <!-- Page Wrapper -->
  <div id="wrapper">


    <script>
      $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
      });

    </script>
