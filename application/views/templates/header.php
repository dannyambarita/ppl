<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?php echo $judul; ?></title>
  </head>
  <body>

  <div class="container-fluid">
      <div class="row" style="background-color:#31A38E; padding-top: 4px;padding-bottom:4px;">
        <div class="col-10" >
          <img src="assets/twitter.svg" alt="" width="27px">
          <img src="assets/facebook.svg" alt="" width="27px">
          <img src="assets/instagram.svg" alt="" width="27px">
          <img src="assets/google.svg" alt="" width="27px">
          <span id="no-hp" style="color:white; padding-left:5px; font-weight: bold;">0852-8964-4888</span>

        </div>

        <div class="col-2">
          <img src="assets/user.svg" alt="" width="23px">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FormModal">
                Sign in
            </button>

                      <div class="modal fade" id="FormModal" tabindex="-1" role="dialog" aria-labelledby="signin" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="signin">Sign In</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  
                <form action="" method="">
                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="form-group">
                    <label for="nama">Umur</label>
                    <input type="number" class="form-control" id="umur" name="umur">
                    </div>

                    <div class="form-group">
                    <label for="jeniskelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                      <option value="laki">Laki-Laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                    </div>

                    <div class="form-group">
                    <label for="nama">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                    </div>
                  
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                    <label for="nama">Password</label>
                    <input type="text" class="form-control" id="password" name="password">
                    </div>

                    


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col">
          <p style="font-size: 77px; text-align: center; padding-top: 14px;">Jon's</p>
          <p style="text-align: center;">Boulangerie Patisserie</p>
        </div>
      </div><br>

      <div class="row">
        <div class="col-1">

        </div>

        <div class="col-2">
          <center><a href="<?= base_url(); ?>" style="color: black;">HOME</a></center>
        </div>

        <div class="col-2">
          <center><a href="<?= base_url(); ?>roti" style="color: black;">OUR PRODUCT</a></center>
        </div>

        <div class="col-2">
          <center><a href="#" style="color: black;">FAQ</a></center>

        </div>

        <div class="col-2">
          <center><a href="#" style="color: black;">JON'S</a></center>
        </div>

        <div class="col-2">
          <center><a href="#" style="color: black;">ABOUT US</a></center>
        </div>

        <div class="col-2">

        </div><br><br>

      </div>

      
