<!DOCTYPE html>
<html lang="en" dir="ltr">

<body>

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
            background-color: #31A38E;
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

    <div class="container-fluid">
        <div class="row" style="padding-top: 4px;padding-bottom:4px;">
            <div class="col-3" style="background-color: #4f4f4f;">
                <div class="row" style="background-color: #31A38E;">
                    <div class="col" style="color: white; font-weight:bold;">
                        <center>Jon's Admin</center>
                    </div>
                </div>

                <div class="row" style="background-color: #4f4f4f;">
                    <div class="col">
                        <br>
                        <center><img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="" width="250px"></center>
                        <p></p>
                        <div class="row tom-nav" style="" id="user">
                            <div class="col">
                                <center><a href="<?= base_url('user'); ?>" style="color: white;"><?= $user['name_user']; ?></a></center>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="testimoni">
                    <div class="col">
                        <center><a href="<?= base_url('testimoni_user'); ?>" style="color: white; text-decoration: none;">Testimoni</a></center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="user">
                    <div class="col">
                        <center><a href="<?= base_url('login/logout'); ?>" style="color: white;">Logout</a></center>
                    </div>
                </div>

                <div class="row" style="background-color: #4f4f4f;">

                </div>
            </div>

            <div class="col-9">
                <div class="row" style="background-color: #4f4f4f; color: #4f4f4f">
                    .
                </div>

                <br>

                <div class="row">
                    <div class="col">
                        <div class="container" style="background-color: #f0eee4; margin-left: 10px; margin-right: 10px;">
                            <div class="row" style="background-color: #d6d6d6;">
                                <div class="col">
                                    <a href="<?= base_url('user') ?>" style="color: #31A38E; font-weight: bold;"> User </a>
                                    <a href="<?= base_url('testimoni_user') ?>" style="color: #31A38E; font-weight: bold;"> / Testimoni /</a>
                                    <span style="font-weight: bold;">Add your Testimoni</span>
                                </div>
                            </div>
                            <br>

                            <form class="user" method="post" action="<?= base_url('add_testimoni') ?>">
                                <div class="form-group">
                                    <label for="testimoni" style="color: black;">Testimoni</label>
                                    <textarea type="text" class="form-control" rows="5" name="testimoni" id="testimoni" style="background-color: white;"></textarea>
                                    <input type="hidden" name="id" id="id" value="<?= $user['id'] ?>">
                                    <?= form_error('testimoni', '<small class="text-danger pl-3">', '</small'); ?>
                                </div>

                                <div class="row">
                                    <div class="col-10">

                                    </div>

                                    <div class="col-2">
                                        <button type="submit" id="add" name="add" class="btn" style=" background-color: #31A38E; color: white;">Add</button>
                                    </div>
                            </form>
                        </div>
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