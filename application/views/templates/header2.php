<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Website Jon's Bakery</title>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>

  <div class="container-fluid">
    <div class="row" style="background-color:#31A38E; padding-top: 4px;padding-bottom:4px;">
      <div class="col-10">
        <a href="https://twitter.com/"><img src="assets/twitter.svg" alt="" width="27px"></a>
        <a href="https://facebook.com/"><img src="assets/facebook.svg" alt="" width="27px"></a>
        <a href="https://instagram.com/"><img src="assets/instagram.svg" alt="" width="27px"></a>
        <a href="https://google.com/"><img src="assets/google.svg" alt="" width="27px"></a>
        <span id="no-hp" style="color:white; padding-left:5px; font-weight: bold;">0852-8964-4888</span>
      </div>
      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <pre>              </pre>
      <a href="<?= base_url() ?>home/profile" id="userDropdown" class="btn" aria-haspopup="true" aria-expanded="false" style=" background-color: #31A38E; color: white;">
        <span style="color:white; font-weight: bold;"><?= $user['name_user']; ?></span>
        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image'] ?>" width="27px">
      </a>
    </div>
  </div>
  </div>

  <div class="row">
    <div class="col">
      <center><a style="font-size: 50px; color: black; padding-top: 14px;">Jon's <br> Boulangerie Patisserie</a></center>
    </div>
  </div><br>

  <div class="row" style="background-color: #E5F1EF; padding-top: 4px; padding-bottom:4px;">
    <div class="col-1">

    </div>

    <div class="col-2">
      <center><a href="<?= base_url(); ?>home" style="color: black;">HOME</a></center>
    </div>

    <div class="col-2">
      <center><a href="<?= base_url(); ?>location" style="color: black;">LOCATION</a></center>
    </div>

    <div class="col-2">
      <center><a href="<?= base_url(); ?>roti" style="color: black;">CATALOG</a></center>
    </div>

    <div class="col-2">
      <center><a href="<?= base_url(); ?>later" style="color: black;">FAQ</a></center>

    </div>

    <div class="col-2">
      <center><a href="<?= base_url(); ?>aboutus" style="color: black;">ABOUT US</a></center>
    </div>

    <div class="col-2">

    </div>


  </div><br>

  <!-- Page Wrapper -->
  <div id="wrapper">