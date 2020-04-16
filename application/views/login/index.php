<style media="screen">
    #login {
        background-color: #31A38E;
        color: white;
    }

    #login:hover {
        background-color: #999999;
        color: black;
    }
</style>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <?= $this->session->flashdata('message'); ?>
                <div class="card">
                    <div class="card-header" style="color: black; text-align:center; font-size:35px;">Login</div>
                    <div class="card-body">

                        <form class="user" method="post" action="<?= base_url('login') ?>">

                            <div class="form-group">
                                <label for="email" style="color: black;">Email</label>
                                <input type="text" class="form-control" placeholder="enter your email" id="email" name="email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small'); ?>
                            </div>

                            <div class="form-group">
                                <label for="nama" style="color: black;">Password</label>
                                <input type="password" class="form-control" placeholder="enter your password" id="password" name="password">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small'); ?>
                            </div>

                            <?php
                            /*<div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                                </div>
                            </div>*/
                            ?>

                            <div class="">
                                <center><button type="submit" class="btn" id="login" name="login">LOGIN</button></center>
                            </div>
                            <hr>
                            <div class="text-center">
                                <a href="<?= base_url(); ?>signup" class="small">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a href="<?= base_url(); ?>signup" class="small">Create an Account!</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</body>