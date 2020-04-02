<div class="container">
<p style="font-size: 20px; text-align: center; padding-top: 20px;">Log In</p><hr>
    <div class="row mt-3">
        <div class = "col-md-6">

    <div class="card">
        <div class="card-header">Log In</div>
        <div class="card-body">
        <?php if( validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
        <?= validation_errors(); ?>
        </div>
        <?php endif; ?> 
            <form action="" method="post">
                
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                <label for="nama">Username</label>
                <input type="text" class="form-control" id="username" name="username">
                </div>                  

                <div class="form-group">
                <label for="nama">Password</label>
                <input type="password" class="form-control" id="pass" name="pass">
                </div>
            
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="login" name="login">login</button>
            </div>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>

