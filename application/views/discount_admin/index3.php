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

        #discount_admin {
            background-color: #31A38E;
        }

        #discount_admin:hover {
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
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>">
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

                <div class="row tom-nav" style="" id="discount_admin">
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

                <div class="row tom-nav" style="" id="sidebar">
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
                      <!-- Discount admin -->
                      <div class="container" style="background-color: #d6d6d6; margin-left: 10px; margin-right: 10px;">
                          <div class="col">
                            <a href="<?= base_url('discount_admin'); ?>" style=" color: #31A38E; text-decoration:none; font-weight: bold;">Discount</a>
                            <a href="#" style=" color: #31A38E; text-decoration:none; font-weight: bold;"> > Add </a>
                          </div>
                      </div>

                      <br>

                      <div class="container" style="background-color: #f0eee4; margin-left: 10px; margin-right: 10px;">
                          <?= form_open_multipart('discountadd'); ?>
                          <div class="row" style="background-color: #d6d6d6;">
                              <div class="col">
                                <br>
                                  <h6 style="color: black">Description</h6>
                                  <textarea name="deskripsi" rows="2" cols="75" value="<?= set_value('deskripsi'); ?>"></textarea><br><br>
                                  <h6 style="color: black">Photo</h6>
                                  <input type="file" name="userfile" id="userfile" class="btn" style=" color: black;"></input>
                                  <br><br>
                                  <button type="submit" class="btn btn-primary" style=" background-color: #31A38E; color: white;">ADD</button>
                                  <br>
                                  <br>
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

    <script src="<?php echo base_url('js/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.js'); ?>"></script>

</body>

</html>
