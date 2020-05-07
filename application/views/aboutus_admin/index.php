<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title></title>
    <script src="js/jquery-3.4.1.min.js"></script>
     <script src="bootstrap/js/bootstrap.js"></script>
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <style media="screen">

        #sidebar {
            background-color: #4f4f4f;
        }

        #sidebar:hover {
            background-color: #31A38E;
        }

        #aboutus_admin {
            background-color: #31A38E;
        }

        #aboutus_admin:hover {
            background-color: #31A38E;
        }

        #tombol {
            background-color: #31A38E;
        }

        #tombol:hover {
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
                        <center><a href="<?= base_url('admin') ?>" style="color: white; display:block; text-decoration:none;"><?= $user['name_user']; ?></a></center>
                    </div>
                </div>

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

                <div class="row tom-nav" style="" id="aboutus_admin">
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
                        <!-- ABOUT US -->


                        <div class="container" style="background-color: #f0eee4; margin-left: 10px; margin-right: 10px;">

                        </div>
                        <div class="row">
                            <div class="col">
                                <!-- ABOUT US -->
                                <div class="container" style="background-color: #f0eee4; margin-left: 10px; margin-right: 10px;">
                                    <div class="row" style="background-color: #d6d6d6;">
                                        <div class="col">
                                            <center><a href="" style=" color: #31A38E; font-weight: bold;">About Us</a></center>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="row" style="color: black;">
                                        <div class="col">
                                          <?= form_open_multipart('aboutus_admin/edit'); ?>
                                                <?php foreach ($about as $abt) { ?>
                                                    <h6 style="color: black">Description</h6>
                                                    <div class="kotak" style="background-color:white;">
                                                      <textarea  name="description" id="description"><?= $abt['deskripsi']; ?></textarea>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="custom-file"><br>
                                                            <h6 style="color: black">Current Photo</h6>
                                                            <div class="col-sm-10">
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <img src="<?= base_url('assets/img/aboutus/') . $abt['image'] ?>" class="img-thumbnail">
                                                                    </div>
                                                                        <input hidden type="text" name="currentfoto" value="<?php echo $abt['image']?>">
                                                                    <div class="col-sm-9">
                                                                        <div class="custom-file">
                                                                          <input type="file" name="foto-about" class="btn">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-10">

                                                        </div>

                                                        <div class="col-2">
                                                            <button type="submit" class="btn" style=" background-color: #31A38E; color: white;">Save</button>
                                                        </div>
                                                        <?= form_close(); ?>

                                        </div>
                                        <br>
                                    </div>

                                    <br>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <script type="text/javascript">
                $(document).ready(function () {
                  $("#description").editor({
                      uiLibrary: 'bootstrap'
                    });
                  });
            </script>
</body>

</html>
