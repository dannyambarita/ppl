<div class="container">
    <p style="font-size: 20px; text-align: center; padding-top: 20px;">Sign Up</p>
    <hr>
    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="card">
                <div class="card-header">Sign Up</div>
                <div class="card-body">

                    <form class="user" method="post" action="<?= base_url('signup') ?>">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nama">Age</label>
                            <input type="number" class="form-control" id="age" name="age" value="<?= set_value('age'); ?>">
                            <?= form_error('age', '<small class="text-danger pl-3">', '</small'); ?>
                        </div>

                        <div class="form-group">
                            <label for="sex">Sex</label>
                            <select class="form-control" id="sex" name="sex">
                                <option value="man">Man</option>
                                <option value="woman">Woman</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nama">Password</label>
                            <input type="password" class="form-control" id="password1" name="password1">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nama">Repeat Password</label>
                            <input type="password" class="form-control" id="password1" name="password2">
                            <?= form_error('password2', '<small class="text-danger pl-3">', '</small'); ?>
                        </div>
                        <br>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="signup" name="signup" onclick="Swal('succes','succes','succes'">Sign Up</button>
                            <script src="sweetalert2.all.min.js"></script>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>