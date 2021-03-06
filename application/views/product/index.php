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

        #product {
            background-color: #31A38E;
        }

        #product:hover {
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
                        <center><a href="<?= base_url('discount_admin') ?>" style="color: white; display:block; text-decoration:none;">Discount</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="product">
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

                <div class="row">
                    <div class="col">
                        <!-- PRODUCT -->
                        <div class="container" style="background-color: #d6d6d6; margin-left: 10px; margin-right: 10px;">
                          <div class="col">
                            <a href="<?= base_url('product'); ?>" style=" color: #31A38E; text-decoration:none; font-weight: bold;">Product</a>
                          </div>
                        </div>

                        <br>

                        <div class="container" style="background-color: #f0eee4; margin-left: 10px;">
                            <div class="row" style="background-color: #d6d6d6;">

                                <div class="col">
                                  <br>
                                  <<a class="btn" id="tombol" href="<?= base_url('productadd') ?>" style="color: white; text-decoration:none; font-weight: bold;">+ Add New</a>
                                  <br><br>
                                </div>
                            </div>

                            <form action="" method="POST">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Photo</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php foreach ($roti as $rt) : ?>
                                                <td>
                                                    <li style='list-style-type: none;'><?= $rt['nama_roti']; ?></li>
                                                </td>
                                                <td>
                                                    <li style='list-style-type: none;'><?= $rt['jenis_roti']; ?></li>
                                                </td>
                                                <td>
                                                    <li style='list-style-type: none;'><?= $rt['harga_roti']; ?></li>
                                                </td>
                                                <td>
                                                    <li style='list-style-type: none;'>
                                                        <img src="<?= base_url('assets/img/roti/') . $rt['gambar_roti']; ?> " width="100px">
                                                    </li>
                                                </td>
                                                <td>
                                                    <li style='list-style-type: none;'>
                                                        <?php if (strlen($rt['deskripsi_roti']) > 50) : ?>
                                                            <p text-align='justify;'><?= substr($rt['deskripsi_roti'], 0, 20); ?> ...</p>
                                                        <?php else : ?>
                                                            <p text-align='justify;'><?= $rt['deskripsi_roti']; ?></p>
                                                        <?php endif ?>
                                                    </li>
                                                </td>
                                                <td>
                                                    <li style='list-style-type: none;'>
                                                        <button class="btn" style="background-color: #31A38E; color: white;">
                                                            <a href="<?= base_url(); ?>editroti/index/<?= $rt['id_roti']; ?>" style="color: white;">Edit</a>
                                                        </button>
                                                        <button class="btn btn-xs btn-danger">
                                                            <a href="<?= base_url(); ?>product/hapus/<?= $rt['id_roti']; ?>" style="color: white;" onclick="return confirm('Delete this?');">Delete</a>
                                                        </button>
                                                    </li>
                                                </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </form>
                            <br>
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
