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

        #save {
          background-color: #31A38E;
        }

        #save:hover{
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

                        <center><a href="aboutus_admin" style="color: white; display:block; text-decoration:none;">About Us</a></center>

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
                                <a href="<?= base_url('productadd'); ?>" style=" color: #31A38E; text-decoration:none; font-weight: bold;"> > Add </a>
                            </div>
                        </div>

                        <br>

                        <div class="container" style="background-color: #f0eee4; margin-left: 10px; margin-right: 10px;">
                            <br>
                            <div class="row">
                                <div class="col">
                                    <?= form_open_multipart('productadd'); ?>
                                    <div class="form-group">
                                        <label for="name">
                                            <h6 style="color: black">Name</h6>
                                        </label><br>
                                        <input type="text" id="name" name="name" rows="1" cols="75" value="<?= set_value('name'); ?>"></input>
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small'); ?>
                                        <br><br>
                                    </div>

                                    <div class="form-group">
                                        <label for="category">
                                            <h6 style="color: black">Category</h6>
                                        </label><br>
                                        <select class="form-control" id="category" name="category" style="width:200px">
                                            <option disabled selected> choose </option>
                                            <?php foreach ($roti_role as $rtrl) {
                                                echo '<option value="' . $rtrl->jenis_roti . '">' . $rtrl->jenis_roti . '</option>';
                                            }
                                            ?>
                                        </select>
                                        <br>
                                    </div>

                                    <div class="form-group">
                                        <label for="price">
                                            <h6 style="color: black">Price</h6>
                                        </label><br>
                                        <input type="number" id="price" name="price">
                                        <?= form_error('price', '<small class="text-danger pl-3">', '</small'); ?>
                                        <br><br>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">
                                            <h6 style="color: black">Description</h6>
                                        </label><br>
                                        <textarea type="text" id="description" name="description" rows="2" cols="75" value="<?= set_value('description'); ?>"></textarea>
                                        <?= form_error('description', '<small class="text-danger pl-3">', '</small'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="special">
                                            <h6 style="color: black">Special</h6>
                                        </label><br>
                                        <select class="form-control" id="special" name="special" style="width:auto">
                                            <option disabled selected> choose </option>
                                            <?php foreach ($special_role as $sprl) {
                                                echo '<option value="' . $sprl->nama_special . '">' . $sprl->nama_special . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="photo">
                                            <h6 style="color: black">Photo</h6>
                                        </label><br>
                                        <input type="file" name="photo" id="photo" class="btn" style="color: black"></input>
                                        <br><br>
                                    </div>

                                    <div>
                                        <button type="submit" value="upload" class="btn" id="save" name="save" onclick="Swal('succes','succes','succes')" style="color: white; font-weight:bold;">ADD</button>
                                        <script src="sweetalert2.all.min.js"></script>
                                    </div>
                                    <?= form_close(); ?>
                                </div>
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
