<html>
<div class="container">
  <div class="row">
    <div class="col-5">
      <?php foreach ($about as $abt) : ?>
        <center><img src="<?= base_url('assets/') . $abt['image'] ?>" alt="" width="550px"></center>
    </div>

    <div class="col-1">

    </div>

    <div class="col-6">
      <p style="font-size: 20px; text-align: center; padding-top: 20px;">ABOUT US</p>
      <hr style="background-color:white; margin-top:-15px;">
      <p><?= $abt['deskripsi']; ?></p>
    <?php endforeach; ?>
    </div>
  </div>
</div>
<br><br>

</html>