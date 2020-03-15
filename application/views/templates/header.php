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
          <a href="https://twitter.com/"><img src="assets/twitter.svg" alt="" width="27px"></a>
          <a href="https://facebook.com/"><img src="assets/facebook.svg" alt="" width="27px"></a>
          <a href="https://instagram.com/"><img src="assets/instagram.svg" alt="" width="27px"></a>
          <a href="https://google.com/"><img src="assets/google.svg" alt="" width="27px"></a>
          <span id="no-hp" style="color:white; padding-left:5px; font-weight: bold;">0852-8964-4888</span>

        </div>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FormModal">
          <img src="assets/user.svg" alt="" width="23px">
                Sign Up
            </button>

            <div class="modal fade" id="FormModal" tabindex="-1" role="dialog" aria-labelledby="signin" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="signin">Sign Up</h5>
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
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                    <label for="nama">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                    </div>                  

                    <div class="form-group">
                    <label for="nama">Password</label>
                    <input type="password" class="form-control" id="pass" name="password">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
                </div>
              </div>
            </div>
          </div> <pre>  </pre>

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
          <img src="assets/user.svg" alt="" width="23px">
                Log in
            </button>

                      <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="login">login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  
                <form action="" method="">
                    <div class="form-group">
                    <label for="nama">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                    </div>                  

                    <div class="form-group">
                    <label for="nama">Password</label>
                    <input type="password" class="form-control" id="password" name="pass">
                    </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="login">Log In</button>
                </div>
              </div>
            </div>
          </div>
          </div>
      </div>
      </div>
      </div>
          <?php
            if(isset($_POST['signup'])){
              $insert = mysqli_query($conn, "INSERT INTO pengguna VALUES 
              ('".$_POST['nama']."','".$_POST['umur']."','".$_POST['email']."',
              '".$_POST['username']."','".$_POST['pass']."','".$_POST['jeniskelamin']."')");
          if($insert){
            echo 'Data succes';
          } else {
            echo 'gagal';
          }
        }
            if(isset($_POST['login'])){
              $username = $_POST['username'];
              $pass = $_POST['pass'];
              $insert = mysqli_query($conn, "SELECT * from pengguna where 
              username='$username' and pass='$pass'");
              $cek = mysqli_num_rows($insert);
              echo $cek;
        }

?>
          

        

      <div class="row">
        <div class="col">
          <center><a href="<?= base_url(); ?>"style="font-size: 50px; color: black; padding-top: 14px;">Jon's <br> Boulangerie Patisserie</a></center>
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
          <center><a href="<?= base_url(); ?>later" style="color: black;">FAQ</a></center>

        </div>

        <div class="col-2">
          <center><a href="<?= base_url(); ?>later" style="color: black;">JON'S</a></center>
        </div>

        <div class="col-2">
          <center><a href="<?= base_url(); ?>later" style="color: black;">ABOUT US</a></center>
        </div>

        <div class="col-2">

        </div><br><br>

      </div>

      
