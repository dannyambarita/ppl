<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <center>
          <p style="font-size: 30px;">DISCOUNT</p>
        </center>
        <hr style="background-color:white; margin-top:-15px;">
        <p style="text-align: center; font-weight:bold;"> A Team That Feels a Whole Lot Like Family</p><p style="text-align: center;"> DISCOUNT! DISCOUNT! DISCOUNT! DISCOUNT! DISCOUNT!</p>
        <br>
      </div>
    </div>

        <div class="container">
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
        </div>

    <br>

  </div>
</body>
