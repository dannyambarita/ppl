<body>
  <div class="container-fluid" style="">
    <div class="row">
      <div class="col">
        <center>
          <p style="font-size: 30px;">CATALOG</p>
        </center>
        <hr style="background-color:white; margin-top:-15px;">
        <p style="font-weight: bold; text-align: center;">Find the bread you want, we always serve the best</p><br>
      </div>
    </div>

    <div class="row">
      <div class="col-4">
        <center><img src="assets/catalog1.png" alt="" width="300px"></center>
        <center>
          <p>Oreo Fresh Cream</p>
          <p style="font-weight: bold;">Rp. 25.000,-</p>
        </center>
      </div>

      <div class="col-4">
        <center><img src="assets/catalog2.png" alt="" width="300px"></center>
        <center>
          <p>Oreo Fresh Cream</p>
          <p style="font-weight: bold;">Rp. 25.000,-</p>
        </center>
      </div>

      <div class="col-4">
        <center><img src="assets/catalog3.png" alt="" width="300px"></center>
        <center>
          <p>Oreo Fresh Cream</p>
          <p style="font-weight: bold;">Rp. 25.000,-</p>
        </center>
      </div>
    </div>

    <br>
    <?php foreach ($roti as $rt) : ?>
      <table>
        <thead>

          <tr>
            <th></th>
        </thead>
        <tbody>
          <tr>

            <td>
              <div class="row">
                <div class="col-4">
                  <center><img src="<?= base_url('assets/img/roti/') . $rt['gambar_roti']; ?> " width="300px"></center>
                  <center>
                    <p><?= $rt['nama_roti']; ?></p>
                    <p style="font-weight: bold;">Rp. <?= $rt['harga_roti']; ?>,-</p>
                  </center>
                </div>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
</body>