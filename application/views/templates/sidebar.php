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

        <div class="row tom-nav" style="" id="overview">
            <div class="col">
                <center><a href="<?= base_url('admin/edit'); ?>" style="color: white;">Edit Profile</a></center>
            </div>
        </div>

        <div class="row tom-nav" style="" id="overview">
            <div class="col">
                <center><a href="#" style="color: white;">Over View</a></center>
            </div>
        </div>

        <div class="row tom-nav" style="" id="product">
            <div class="col">
                <center><a href="#" style="color: white;">Product</center>
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

        <div class="row tom-nav" style="" id="user">
            <div class="col">
                <center><a href="<?= base_url('login/logout') ?>" style="color: white;">Logout</a></center>
            </div>
        </div>
    </div>
</div>