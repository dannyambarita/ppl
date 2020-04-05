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
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span style="color:white; font-weight: bold;"><?= $user['name_user']; ?></span>
            <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image'] ?>" width="27px">
          </a>

          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?= base_url('user') ?>">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url('login/logout') ?>" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
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
      <center><a href="<?= base_url(); ?>homeafter" style="color: black;">HOME</a></center>
    </div>

    <div class="col-2">
      <center><a href="<?= base_url(); ?>locationafter" style="color: black;">LOCATION</a></center>
    </div>

    <div class="col-2">
      <center><a href="<?= base_url(); ?>rotiafter" style="color: black;">CATALOG</a></center>
    </div>

    <div class="col-2">
      <center><a href="<?= base_url(); ?>laterafter" style="color: black;">FAQ</a></center>

    </div>

    <div class="col-2">
      <center><a href="<?= base_url(); ?>aboutusafter" style="color: black;">ABOUT US</a></center>
    </div>

    <div class="col-2">

    </div>

  </div><br>