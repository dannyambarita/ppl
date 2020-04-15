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
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <a href="<?= base_url(); ?>deskripsi"><img class="d-block img-fluid" src="assets/slide.png" alt="First slide" width="1030px"></a>
            </div>
            <div class="carousel-item">
              <a href="<?= base_url(); ?>deskripsi"><img class="d-block img-fluid" src="assets/slide.png" alt="Second slide" width="1030px"></a>
            </div>
            <div class="carousel-item">
              <a href="<?= base_url(); ?>deskripsi"><img class="d-block img-fluid" src="assets/slide.png" alt="Third slide" width="1030px"></a>
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

  <br>

  <div class="container" style="">
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
      <div class="col-4">
        <center><a href="<?= base_url(); ?>deskripsi"><img src="assets/welcome1.png" alt="" width="270px"></center></a>
      </div>

      <div class="col-4">
        <center><a href="<?= base_url(); ?>deskripsi"><img src="assets/welcome2.png" alt="" width="270px"></center></a>
      </div>

      <div class="col-4">
        <center><a href="<?= base_url(); ?>deskripsi"><img src="assets/welcome3.png" alt="" width="270px"></center></a>
      </div>
    </div>

    <br>
    <br>

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

      <div class="col-5">
        <center><a href="<?= base_url(); ?>deskripsi"><img src="assets/kategori2.png" alt="" width="400px"></a></center>
        <center>
          <p>HOUSE CAKES</p>
        </center>
      </div>

      <div class="col-5">
        <center><a href="<?= base_url(); ?>deskripsi"><img src="assets/kategori4.png" alt="" width="400px"></a></center>
        <center>
          <p>PASTERY</p>
        </center>
      </div>

      <div class="col-1">

      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-1">

      </div>

      <div class="col-5">
        <center><a href="<?= base_url(); ?>deskripsi"><img src="assets/kategori5.png" alt="" width="400px"></a></center>
        <center>
          <p>SWEET BUN</p>
        </center>
      </div>

      <div class="col-5">
        <center><a href="<?= base_url(); ?>deskripsi"><img src="assets/kategori6.png" alt="" width="400px"></a></center>
        <center>
          <p>TOAST</p>
        </center>
      </div>

      <div class="col-1">

      </div>
    </div>

    <br>
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

      <div class="col-3">
        <center><a href="<?= base_url(); ?>later"><img src="assets/potm.png" alt="" width="270px"></a></center>
      </div>

      <div class="col-3">
        <p style="text-align:left;font-size:26px;">MACAROON</p>
        <hr style="background-color:white; margin-top:-15px;">
        <p style="text-align: left;">Beautiful macaroons are one of the current ‘sweet’ crazes. Make a batch, put them in a pretty box tied up with ribbon, and give them to a friend as a dazzling gift.</p>
        <a href="#" class="btn" id="price">Rp. 50.000,-</a>
      </div>

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

          <a href="<?= base_url('testimoni_user'); ?>" class="btn" style=" background-color: #31A38E; color: white;">Make Your Testimonials Now!</a>
        </center>
      </div>
    </div>
  </div>


  <br>

</html>