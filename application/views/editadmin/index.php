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

    #edit {
        background-color: #31A38E;
    }

    #edit:hover {
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

                <div class="row tom-nav" style="" id="sidebar">
                    <div class="col">
                        <center><a href="<?= base_url('admin') ?>" style="color: white; display:block; text-decoration:none;"><?= $user['name_user']; ?></a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="edit">
                    <div class="col">
                        <center><a href="<?= base_url('editadmin'); ?>" style="color: white;display:block; text-decoration:none;">Edit Profile</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="sidebar">
                    <div class="col">
                        <center><a href="<?= base_url('discount_admin') ?>" style="color: white; display:block; text-decoration:none;">Discount</a></center>
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

                <div class="row">
                    <div class="col-lg-8">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                    <!-- Page Heading -->
                </div>
                <div class="card">
                    <div class="card-header" style="color: black;">Edit Profile</div>
                    <div class="card-body">
                        <div class="row no-gutters">
                            <div class="col-md-8">

                                <form class="user" method="post" action="<?= base_url('editadmin') ?>">
                                    <div class="form-group">
                                        <label for="email" style="color: black;">Your Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
                                        <br>
                                    </div>
                                    <input type="hidden" name="id" value="<?= $user['id']; ?>">
                                    <div class="form-group">
                                        <label for="name" style="color: black;">New Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name_user'] ?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <br>
                                    </div>

                                    <div class="form-group">
                                        <label for="age" style="color: black;">New Age</label>
                                        <input type="text" class="form-control" id="age" name="age" value="<?= $user['age_user'] ?>">
                                        <?= form_error('age', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <br>
                                    </div>

                                    <div class="form-group">
                                        <label for="sex" style="color: black">Sex | curently sex = <?= $user['sex_user'] ?></label>
                                        <select class="form-control" id="sex" name="sex">
                                            <option value="Man">Man</option>
                                            <option value="Woman">Woman</option>
                                        </select>
                                        <br>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-10" style="color: black">Current Picture</div>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="img-thumbnail">
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="custom-file">
                                                        <input type="file" style="color: black" id="image" name="image">
                                                    </div>
                                                </div>
                                            </div> <br><button type="submit" class="btn" style="background-color: #31A38E">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

    <script src=" js/jquery-3.4.1.min.js"> </script>
    <script src="bootstrap/js/bootstrap.js"></script>

</body>

</html>
