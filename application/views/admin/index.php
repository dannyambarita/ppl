<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <style media="screen">
        #admin {
            background-color: #4f4f4f;
        }

        #admin:hover {
            background-color: #31A38E;
        }

        #edit {
            background-color: #4f4f4f;
        }

        #edit:hover {
            background-color: #31A38E;
        }

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

                <div class="row tom-nav" style="" id="overview">
                    <div class="col">
                        <center><a href="<?= base_url('admin') ?>" style="color: white;"><?= $user['name_user']; ?></a></center>
                    </div>
                </div>

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
                        <center><a href="<?= base_url('categories') ?>" style="color: white;">Categories</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="testimoni">
                    <div class="col">
                        <center><a href="<?= base_url('testimoni_user') ?>" style="color: white;">Testimoni</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="menubar">
                    <div class="col">
                        <center><a href="<?= base_url('menubar') ?>" style="color: white;">Menu Bar</a></center>
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
            </div>

            <div class="col-9">

                <div class="row" style="background-color: #4f4f4f;">
                </div>

                <div class="row">
                    <!-- Page Heading -->
                    <div class="col-lg-7">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>
                <div class="card mb-3 col-lg-7">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="h3 mb-4 text-gray-800" style="color: black;">
                                    <?= $title; ?></h3>
                                <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="card-img" width="400px">
                                <p></p>
                                <h5 class="card-title" style="color: black;"><?= $user['name_user']; ?></h5>
                                <p class="card-text" style="color: black;"><?= $user['email']; ?></p>
                                <p class="card-text"><small class="text-muted">You have been our beloved Admin since <?= date('d F Y', $user['date_created']); ?></small></p>
                            </div>
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