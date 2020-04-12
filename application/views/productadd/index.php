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
                        <center><a href="<?= base_url('product'); ?>" style="color: white;">Product</center>
                    </div>
                </div>

                <div class="row tom-nav" style="" id="kategori">
                    <div class="col">
                        <center><a href="#" style="color: white;">Categories</a></center>
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

                <div class="row" style="background-color: #4f4f4f;">

                </div>
            </div>

            <div class="col-9">

                <div class="row">
                    <div class="col">
                        <!-- PRODUCT -->
                        <div class="container" style="background-color: #f0eee4; margin-left: 10px; margin-right: 10px;">
                            <div class="row" style="background-color: #d6d6d6;">
                                <div class="col">
                                    <a href="" style=" color: #31A38E; font-weight: bold;0">Product / Add</a>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col">
                                    <?= form_open_multipart('productadd'); ?>
                                    <div class="form-group">
                                        <label for="name">
                                            <h6>Name</h6>
                                        </label><br>
                                        <textarea type="text" id="name" name="name" rows="1" cols="75" value="<?= set_value('name'); ?>"></textarea>
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small'); ?>
                                        <br><br>
                                    </div>

                                    <div class="form-group">
                                        <label for="category">
                                            <h6>Category</h6>
                                        </label><br>
                                        <select class="form-control" id="category" name="category" style="width:200px">
                                            <?php foreach ($roti_role as $rtrl) {
                                                echo '<option value="' . $rtrl->id . '">' . $rtrl->jenis_roti . '</option>';
                                            }
                                            ?>
                                        </select>
                                        <br>
                                    </div>

                                    <div class="form-group">
                                        <label for="price">
                                            <h6>Price</h6>
                                        </label><br>
                                        <textarea type="text" id="price" name="price" rows="1" cols="75" value="<?= set_value('price'); ?>"></textarea>
                                        <?= form_error('price', '<small class="text-danger pl-3">', '</small'); ?>
                                        <br><br>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">
                                            <h6>Description</h6>
                                        </label><br>
                                        <textarea type="text" id="description" name="description" rows="2" cols="75" value="<?= set_value('description'); ?>"></textarea>
                                        <?= form_error('description', '<small class="text-danger pl-3">', '</small'); ?>
                                        <br><br>
                                    </div>

                                    <div class="form-group">
                                        <label for="photo">
                                            <h6>Photo</h6>
                                        </label><br>
                                        <input type="file" class="btn" style=" background-color: #31A38E; color: white;">Choose File</input>
                                        <br><br>
                                    </div>

                                    <div class="form-group">
                                        <label for="special">
                                            <h6>Special</h6>
                                        </label><br>
                                        <select class="form-control" id="special" name="special" style="width:71px">
                                            <option value="1">Yes</option>
                                            <option value="2">No</option>
                                        </select> <br><br>

                                        <button type="submit" value="upload" class="btn" id="save" name="save" onclick="Swal('succes','succes','succes'" style=" background-color: #31A38E; color: white;">Save</button>
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