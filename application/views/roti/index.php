<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <style>
    #flex-container {
      display: flex;
      flex-wrap: wrap;
    }

    #flex-container>div {
      background-color: #f1f1f1;
      width: 100px;
      margin: 10px;
      text-align: center;
      line-height: 75px;
      font-size: 30px;
    }
  </style>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
  <div class="container-fluid" style="">
    <div class="row">
      <div class="col">
        <center>
          <p style="font-size: 30px;">CATALOG</p>
        </center>
        <hr style="background-color:white; margin-top:-15px;">
        <p style="font-weight: bold; text-align: center;">Find the bread you want,
          we always serve the best</p><br>
      </div>
    </div>
    <div class="flex-container">
      <?php foreach ($roti as $rt) : ?>
        <td>
          <center>
            <div class="card" style="width: 21rem;">
              <div class="col-auto" style="background-color: black"><br>
                <center><img src="<?= base_url('assets/img/roti/') . $rt['gambar_roti']; ?>" width="300px"></center>
                <center>
                  <p><?= $rt['nama_roti']; ?></p>
                  <p style="font-weight: bold;">Rp. <?= $rt['harga_roti']; ?>,
                    -</p><a href="<?= base_url('Deskripsi/detail/') ?><?= $rt['id_roti'] ?>" class="btn" style="background-color: #31A38E; color: white;">Detail</a>
                </center><br>
              </div>
          </center>
    </div>
    </td><br>
  </div><?php endforeach; ?>
</div>
<div class="flex-container">
  <div>1</div>
  <div>2</div>
  <div>3</div>
  <div>4</div>
  <div>5</div>
  <div>6</div>
  <div>7</div>
  <div>8</div>
  <div>9</div>
  <div>10</div>
  <div>11</div>
  <div>12</div>
</div>

</body>

<!DOCTYPE html>
<html>

<head>
  <style>
    .flex-container {
      display: flex;
      flex-wrap: wrap;
      background-color: DodgerBlue;
    }

    .flex-container>div {
      background-color: #f1f1f1;
      width: 100px;
      margin: 10px;
      text-align: center;
      line-height: 75px;
      font-size: 30px;
    }
  </style>
</head>

<body>
  <h1>The flex-wrap Property</h1>

  <p>The "flex-wrap: wrap;" specifies that the flex items will wrap if necessary:</p>

  <div class="flex-container">
    <div>1</div>
    <div>2</div>
    <div>3</div>
    <div>4</div>
    <div>5</div>
    <div>6</div>
    <div>7</div>
    <div>8</div>
    <div>9</div>
    <div>10</div>
    <div>11</div>
    <div>12</div>
  </div>

  <p>Try resizing the browser window.</p>

</body>

</html>