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
                            </div>
                        </div>

                        <br>

                        <div class="container" style="background-color: #f0eee4; margin-left: 10px; margin-right: 10px;">
                            <div class="row" style="background-color: #d6d6d6;">
                                <div class="col">
                                  <br>
                                  <a class="btn" id="tombol" href="<?= base_url('locationadd') ?>" style="color: white; text-decoration:none; font-weight: bold;">+ Add New</a>
                                  <br><br>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col">
                                  <table class="table">
                                    <tr>
                                      <th>Photo</th>
                                      <th>Province</th>
                                      <th>Address</th>
                                      <th>Day 1</th>
                                      <!-- <th>Day 2</th> -->
                                      <th>Time 1</th>
                                      <!-- <th>Time 2</th> -->
                                      <th>Note</th>
                                      <th>Link</th>
                                      <th>Action</th>
                                    </tr>

                                    <tr>
                                      <?php foreach ($location as $x){ ?>
                                        <tr>
                                          <td><img width="100px" src="<?php echo base_url('assets/img/toko/').$x['toko']; ?>" alt=""></td>
                                          <td><?php echo $x['provinsi']; ?></td>
                                          <td><?php echo $x['alamat']; ?></td>
                                          <td><?php echo $x['hari1']; ?>
                                          <?php echo $x['hari2']; ?></td>
                                          <td><?php echo $x['jam1']; ?>
                                          <?php echo $x['jam2']; ?></td>
                                          <td><?php echo $x['keterangan']; ?></td>
                                          <td><?php echo $x['link']; ?></td>
                                          <td><a href="<?php echo base_url('locationadd/locationdel/') . $x['id'];?>" class="btn btn-danger">Delete</a></td>
                                        </tr>

                                      <?php } ?>
                                    </tr>
                                  </table>
                                </div>
                            </div>
                            <br>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

</body>

</html>
