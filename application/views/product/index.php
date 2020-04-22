<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <style media="screen">
        #overview {
            background-color: #4f4f4f;
        }

        #overview:hover {
            background-color: #31A38E;
        }

        #product {
            background-color: #4f4f4f;
        }

        #product:hover {
            background-color: #31A38E;
        }

        #kategori {
            background-color: #4f4f4f;
        }

        #kategori:hover {
            background-color: #31A38E;
        }

        #testimoni {
            background-color: #4f4f4f;
        }

        #testimoni:hover {
            background-color: #31A38E;
        }

        #menubar {
            background-color: #4f4f4f;
        }

        #menubar:hover {
            background-color: #31A38E;
        }

        #user {
            background-color: #4f4f4f;
        }

        #user:hover {
            background-color: #31A38E;
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

                <div class="row tom-nav" style="" id="edit">
                    <div class="col">
                        <center><a href="<?= base_url('editadmin'); ?>" style="color: white;">Edit Profile</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="overview">
                    <div class="col">
                        <center><a href="#" style="color: white;">Over View</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="product">
                    <div class="col">
                        <center><a href="<?= base_url('product') ?>" style="color: white;">Product</center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="kategori">
                    <div class="col">
                        <center><a href="<?= base_url('categories'); ?>" style="color: white;">Categories</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="testimoni">
                    <div class="col">
                        <center><a href="#" style="color: white;">Testimoni</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="menubar">
                    <div class="col">
                        <center><a href="<?= base_url('menubar'); ?>" style="color: white;">Menu Bar</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="user">
                    <div class="col">
                        <center><a href="#" style="color: white;">User</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="user">
                    <div class="col">
                        <center><a href="<?= base_url('login/logout') ?>" style="color: white;">Logout</a></center>
                    </div>
                </div>

                <div class="row" style="background-color: #4f4f4f;">

                </div>
            </div>

            <div class="col-9">

                <div class="row">
                    <div class="col">
                        <!-- PRODUCT -->
                        <div class="container" style="background-color: #d6d6d6; margin-left: 10px; margin-right: 10px;">
                            <div class="col">
                                <a style=" color: #31A38E; font-weight: bold;0">Admin > Product</a>
                            </div>
                        </div>

                        <br>

                        <div class="container" style="background-color: #f0eee4; margin-left: 10px;">
                            <div class="row" style="background-color: #d6d6d6;">
                                <div class="col">
                                    <a href="<?= base_url('productadd') ?>" style=" color: #31A38E; font-weight: bold;">+ Add New</a>
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
                                                        <p text-align='justify;'><?= substr($rt['deskripsi_roti'], 0, 100); ?></p>
                                                    </li>
                                                </td>
                                                <td>
                                                    <li style='list-style-type: none;'>
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