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

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <center>
          <p style="font-size: 26px;">HOUSE CAKES</p>
        </center>
        <hr style="background-color:white; margin-top:-15px;">
      </div>
    </div>

    <div class="row">
      <div class="col-2">

      </div>

      <div class="col-4">
        <center><img src="<?= base_url('assets/img/roti/') . $roti['gambar_roti']; ?>" alt="" width="300px" ;></center>
      </div>

      <div class="col-4">
        <p style="text-align:left;font-size:23px;"><?= $roti['nama_roti'] ?></p>
        <hr style="background-color:white; margin-top:-15px;">
        <p style="text-align: left;"><?= $roti['deskripsi_roti'] ?></p>
        <a href="#" class="btn" style="" id="price">Rp. <?= $roti['harga_roti'] ?>,-</a>
      </div>

      <div class="col-2">

      </div>
    </div>

    <br>

    <div class="row">
      <div class="col">
        <p style="font-size: 20px; text-align: center; padding-top: 20px;">RELATED ITEMS</p>
        <hr style="background-color:white; margin-top:-15px;">
        <br>
      </div>
    </div>

    <div class="row">
      <div class="col-4">
        <center><img src="assets/catalog1.png" alt="" width="300px"></center>
      </div>

      <div class="col-4">
        <center><img src="assets/cakes2.png" alt="" width="300px"></center>
      </div>

      <div class="col-4">
        <center><img src="assets/catalog3.png" alt="" width="300px"></center>
      </div>
    </div>
    <br>
  </div>
  <br>
</body>
