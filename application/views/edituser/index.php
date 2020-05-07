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
                        <center>Jon's Member</center>
                    </div>
                </div>

                <br>


                <center><img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="" width="250px"></center>
                <p></p>

                <div class="row tom-nav" style="" id="overview">
                    <div class="col">
                        <center><a href="<?= base_url('user') ?>" style="color: white;"><?= $user['name_user']; ?></a></center>
                    </div>
                </div>
                <div class="row tom-nav" style="" id="edit">
                    <div class="col">
                        <center><a href="<?= base_url('edituser') ?>" style="color: white;">Edit Profile</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="testimoni">
                    <div class="col">
                        <center><a href="<?= base_url('testimoni_user') ?>" style="color: white;">Testimoni</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="user">
                    <div class="col">
                        <center><a href="<?= base_url('login/logout') ?>" style="color: white;">Logout</a></center>
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

                                <form class="user" method="post" action="<?= base_url('edituser') ?>">
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