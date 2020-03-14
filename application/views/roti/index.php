<div class="container">



    <div class="row mt-3">
        <div class="col-md-6">
        <ul class="list-group">  
            <?php foreach($roti as $rt) : ?>
            <li class="list-group-item"><?= $rt['nama_roti'];?></li>
            <li class="list-group-item"><?= $rt['harga_roti'];?></li>
            <li class="list-group-item"><?= $rt['jenis_roti'];?></li>
            <li class="list-group-item"><?= $rt['stok_roti'];?></li>
            <li class="list-group-item"><?= $rt['gambar_roti'];?></li>
            <?php endforeach; ?>
        </ul><br><br>

        </div>
    </div>
</div>