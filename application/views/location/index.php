<style media="screen">
#direction{
  background-color: #31A38E;
  color:white;
}
 #direction:hover{
   background-color: #999999;
   color: black;
 }
</style>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <center>
          <p style="font-size: 30px;">LOCATION</p>
        </center>
        <hr style="background-color:white; margin-top:-15px;">
        <br>
      </div>
    </div>

    <div class="container-fluid" style="">
      <?php foreach ($diskon as $d) : ?>
        <td>
          <div class="row" style="">
              <div class="col-1">

              </div>

              <div class="col-4" style="background-color: black">
                <center><img src="<?= base_url('assets/img/roti/') . $d['foto']; ?>" width="350px" ></center>
              </div>

              <div class="col-6" style="background-color: black"><br>
                <center><h5><?= $d['deskripsi']; ?></h5></center>
              </div>

              <div class="col-1">

              </div>
          </div>
          <hr style="background-color: white;">
        </td><?php endforeach; ?>

      <div class="row">
        <div class="col-9">
          <a href="<?= base_url(); ?>"><img src="assets/visit.png" alt="" width="500px"></a>
        </div>

        <div class="col-3" style="background-color:#E4E4E4;">
          <p style="text-align:left; font-size:25px; color:black;">COME & VISIT</p>
          <hr style="background-color:black; margin-top: -15px;">
          <p style="text-align: left;  font-weight: bold; color:black;">Jl. Jend. Sudirman No.55, Kota Bandar Lampung </p>
          <p style="text-align: left; color:black;">Wednesday-Monday <br>6:30 AM - 9.30 PM </p>
          <p style="text-align: left; color:black;">Tuesday <br>7.30 AM - 9.30 PM </p>
          <a href="" class="btn" id="direction">DIRECTION</a>
        </div>
      </div>
    </div>
  </div>
  <br>
</body>
