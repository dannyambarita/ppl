<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <style media="screen">
        #sidebar {
            background-color: #4f4f4f;
        }

        #sidebar:hover {
            background-color: #31A38E;
        }

        #location_admin {
            background-color: #31A38E;
        }

        #location_admin:hover {
            background-color: #31A38E;
        }

        #tombol {
          background-color: #31A38E;
        }

        #tombol:hover{
          background-color: #4f4f4f;
        }

        .tom-nav {
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container-fluid">

        <div class="row" style="padding-top: 4px;padding-bottom:4px;">
            <div class="col-3" style="background-color: #4f4f4f;">
                <div class="row" style="background-color: #31A38E;">
                    <div class="col" style="color: white; font-weight:bold;">
                        <center>Jon's Admin</center>
                    </div>
                </div>
                <br>
                <center><img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="" width="250px"></center>
                <p></p>

                <div class="row tom-nav" style="" id="sidebar">
                    <div class="col">
                        <center><a href="<?= base_url('editadmin'); ?>" style="color: white; display:block; text-decoration:none;">Edit Profile</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="sidebar">
                    <div class="col">
                        <center><a href="<?= base_url('discount_admin'); ?>" style="color: white; display:block; text-decoration:none;">Discount</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="sidebar">
                    <div class="col">
                        <center><a href="<?= base_url('product') ?>" style="color: white; display:block; text-decoration:none;">Product</center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="sidebar">
                    <div class="col">
                        <center><a href="<?= base_url('categories'); ?>" style="color: white; display:block; text-decoration:none;">Categories</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="sidebar">
                    <div class="col">
                        <center><a href="#" style="color: white; display:block; text-decoration:none;">Testimoni</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="sidebar">
                    <div class="col">
                        <center><a href="#" style="color: white; display:block; text-decoration:none;">User</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="sidebar">
                    <div class="col">
                        <center><a href="<?= base_url('aboutus_admin'); ?>" style="color: white; display:block; text-decoration:none;">About Us</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="location_admin">
                    <div class="col">
                        <center><a href="<?= base_url('location_admin'); ?>" style="color: white; display:block; text-decoration:none;">Location</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="sidebar">
                    <div class="col">
                        <center><a href="<?= base_url('faq'); ?>" style="color: white; display:block; text-decoration:none;">FAQ</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="sidebar">
                    <div class="col">
                        <center><a href="<?= base_url('login/logout') ?>" style="color: white; display:block; text-decoration:none;">Logout</a></center>
                    </div>
                </div>
            </div>

            <div class="col-9">

                <div class="row" style="background-color: #4f4f4f;">

                </div>

                <div class="row">
                    <div class="col">
                        <!-- LOCATION -->
                        <div class="container" style="background-color: #d6d6d6; margin-left: 10px; margin-right: 10px;">
                            <div class="col">
                              <a href="<?= base_url('location_admin'); ?>" style=" color: #31A38E; text-decoration:none; font-weight: bold;">Location</a>
                              <a href="<?= base_url('locationadd'); ?>" style=" color: #31A38E; text-decoration:none; font-weight: bold;"> > Add </a>
                            </div>
                        </div>

                        <br>

                        <div class="container" style="background-color: #f0eee4; margin-left: 10px; margin-right: 10px;">
                          <?= form_open_multipart('locationadd/locationdb'); ?>
                          <div class="row" style="background-color: #d6d6d6;">
                            <div class="col">
                              <br>
                              <h6 style="color: black">Photo</h6>
                              <input type="file" name="filetoko" id="filetoko" class="btn" style=" color: black;">
                              <br><br>
                              <h6 style="color: black">Province</h6>
                              <textarea name="provinsi" rows="1" cols="20" value="<?= set_value('provinsi'); ?>"></textarea><br><br>
                              <br><br>
                              <h6 style="color: black">Address</h6>
                              <textarea name="alamat" rows="2" cols="75" value="<?= set_value('alamat'); ?>"></textarea><br><br>
                              <br><br>
                              <h6 style="color: black">Day</h6>
                              <textarea name="hari1" rows="1" cols="10" value="<?= set_value('hari1'); ?>"></textarea>
                              <textarea name="hari2" rows="1" cols="10" value="<?= set_value('hari2'); ?>"></textarea>
                              <br><br>
                              <h6 style="color: black">Times</h6>
                              <input type="time" id="waktu" name="jam1" value="<?= set_value('jam1'); ?>">
                              <input type="time" id="waktu" name="jam2" value="<?= set_value('jam2'); ?>">
                              <br><br>
                              <h6 style="color: black">Note</h6>
                              <textarea name="keterangan" rows="2" cols="40" value="<?= set_value('keterangan'); ?>"></textarea>
                              <br><br>
                              <h6 style="color: black">Direction</h6>
                              <textarea name="link" rows="2" cols="40" value="<?= set_value('link'); ?>"></textarea>
                              <br><br>
                              <button type="submit" class="btn btn-primary" style=" background-color: #31A38E; color: white;">ADD</button>
                              <br><br>
                            </div>
                          </div>
                          <?= form_close(); ?>
                        </div>
                        <br>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

</body>

</html>
