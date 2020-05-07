<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css" />

  <style media="screen">
    #price {
      background-color: #31A38E;
      color: white;
    }

    #price:hover {
      background-color: #e6e6e6;
      color: black;
    }
  </style>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
  <div class="row">
    <div class="col">
      <center>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php
            $i = 0;
            foreach ($roti_promo as $rti) : ?>
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="$i" class="active"></li>
              </ol>
              <div class="carousel-item active">
                <img class="d-block w-50" src="<?= base_url('assets/img/roti/') . $rti['gambar_roti']; ?>" width="100px">
              </div>
            <?php $i++;
            endforeach; ?>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </center>
    </div>
  </div>

  <br>

  <div class="container">
    <div class="row">
      <div class="col">
        <center>
          <p style="font-size:20px;">WELCOME TO JON'S Boulangerie Patisserie</p>
        </center>
        <hr style="background-color:white; margin-top:-15px;">
        <br>
      </div>
    </div>

    <div class="row">

      <!DOCTYPE html>
      <html>

      <head>
        <style>
          .flex-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
          }

          .flex-container>div {
            background-color: black;
            width: 300px;
            margin: 10px;
            text-align: center;
            line-height: 200px;
            font-size: 30px;
          }
        </style>
      </head>

      <body>
        <div class="flex-container">
          <?php foreach ($roti_random as $rti) : ?>
            <td>
              <center><a href="<?= base_url('Deskripsi/detail/') ?><?= $rti['id_roti'] ?>"> <img src="<?= base_url('assets/img/roti/') . $rti['gambar_roti']; ?> " width="270px"></center>
              <pre>                </pre></a>
              <br>
            </td>
          <?php endforeach; ?>
        </div>
      </body>

      </html>
    </div>


    <div class="row">
      <div class="col">
        <center>
          <p style="font-size:20px;">SHOP BY CATEGORIES</p>
        </center>
        <hr style="background-color:white; margin-top:-15px;">
        <br>
      </div>
    </div>

    <div class="row">
      <div class="col-1">

      </div>

      <!DOCTYPE html>
      <html>

      <head>
        <style>
          .flex-container {
            display: flex;
            justify-content: center;
          }

          .flex-container>div {
            background-color: black;
            width: 300px;
            margin: 10px;
            text-align: center;
            line-height: 30px;
            font-size: 30px;
          }
        </style>
      </head>


      <body>
        <center>
          <div class="flex-container">
            <?php foreach ($roti_role as $rti) : ?>
              <div>
                <a href="<?= base_url('roti/jenis/'); ?><?= $rti['jenis_roti']; ?>" class=" btn" style=" background-color: #31A38E; color: white; "><?= $rti['jenis_roti']; ?></a>
                <pre>       </pre>
              </div>
            <?php endforeach; ?>
          </div>
        </center>
    </div>

</body>

<br>
<div class="row">
  <div class="col">
    <center>
      <p style="font-size:20px;">FEATURED PRODUCT OF THE MONTH</p>
    </center>
    <hr style="background-color:white; margin-top:-15px;">
    <br>
  </div>
</div>

<div class="row">
  <div class="col-3">

  </div>
  <?php foreach ($roti_best as $rti) : ?>
    <div class="col-3">
      <center><a href="<?= base_url(); ?>later"><img src="<?= base_url('assets/img/roti/') . $rti['gambar_roti']; ?>" alt="" width="270px"></a></center>
    </div>

    <div class="col-3">
      <p style="text-align:left;font-size:26px;"><?= $rti['nama_roti']; ?></p>
      <hr style="background-color:white; margin-top:-15px;">
      <p style="text-align: left;"><?= $rti['deskripsi_roti']; ?></p>
      <a class="btn" id="price">Rp. <?= $rti['harga_roti']; ?>,-</a>
    </div>
  <?php endforeach; ?>

  <div class="col-3">

  </div>
</div>
</div>

<br>
<br>

<div class="container">
  <div class="row">
    <div class="col">
      <center>
        <p style="font-size: 20px;">RECENT TESTIMONIALS</p>
      </center>
      <hr style="background-color:white; margin-top:-15px;">
      <br>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <center>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <p>Great place to chill, get away, eat some good food. there was quick, helpful, and friendly service. Feels similar to a cafe in Chicago I loved.</p>
              <p style="font-weight:bold">— Courtney Arnold</p><br>
            </div>
            <div class="carousel-item">
              <p>I can say this place does it for me. Service is consistently above par. Bring your appetite because portions are large.</p>
              <p style="font-weight:bold">— Emmett Carrillo</p><br>
            </div>
            <div class="carousel-item">
              <p>My favorite place for THE BEST almond croissant and chocolate almond croissant in SF!!! Def worth the wait!</p>
              <p style="font-weight:bold"> — Virginia Griffin</p><br>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </center>
    </div>
  </div>
</div>


<br>

</html>