<div class="container">
    
    <div class="row mt-3">
        <div class = "col-md-6">
            
        <div class="card">
        <div class="card-header">Sign Up</div>
        <div class="card-body">
        <?php if( validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
        <?= validation_errors(); ?>
        </div>
        <?php endif; ?> 
            <form action="" method="post">
                <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama">
                </div>

                <div class="form-group">
                <label for="nama">Umur</label>
                <input type="number" class="form-control" id="umur" name="umur">
                </div>

                <div class="form-group">
                <label for="jeniskelamin">Jenis Kelamin</label>
                <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                    <option value="laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
                </div>

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
                <button type="submit" class="btn btn-primary" id="signup" name="signup">Sign Up</button>
            </div>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>

