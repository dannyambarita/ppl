<div class="container">
    <p style="font-size: 20px; text-align: center; padding-top: 20px;">Log In</p>
    <hr>
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-header">Log In</div>
                <div class="card-body">

                    <form class="user" method="post" action="<?= base_url('login') ?>">

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" placeholder="enter your email" id="email" name="email" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nama">Password</label>
                            <input type="password" class="form-control" placeholder="password" id="password" name="password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small'); ?>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                            </div>
                        </div>

                        <div class="">
                            <button type="submit" class="btn btn-primary" id="login" name="login">login</button>
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
</div>