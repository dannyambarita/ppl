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

    <div class="container" style="">
      <?php foreach ($location as $l) : ?>
        <td>
          <div class="row" style="">
              <div class="col-2">

              </div>

              <div class="col-5">
                <img src="<?= base_url('assets/img/toko/') . $l['toko']; ?>" width="470px" >
              </div>

              <div class="col-3" style="background-color:#E4E4E4;">
                <br>
                <p style="text-align:left; font-size:25px; color:black;"><?= $l['provinsi']; ?></p>
                <hr style="background-color:black; margin-top: -15px;">
                <p style="text-align: left;  font-weight: bold; color:black;"><?= $l['alamat']; ?></p>
                <p style="text-align: left; color:black;"><?= $l['hari1']; ?> - <?= $l['hari2']; ?></p>
                <p style="text-align: left; color:black;"><?= $l['jam1']; ?> - <?= $l['jam2']; ?></p>
                <p style="text-align: left; color:black;"><?= $l['keterangan']; ?></p>
                <a href="<?= $l['link']; ?>" class="btn" id="direction">DIRECTION</a>
              </div>

              <div class="col-2">

              </div>
          </div>
          <hr style="background-color: white;">
        </td><?php endforeach; ?>
    </div>
  </div>
  <br>
</body>
