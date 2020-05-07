<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <style>
        #flex-container {
            display: flex;
            flex-wrap: wrap;
        }

        #flex-container>div {
            background-color: #f1f1f1;
            width: 100px;
            margin: 10px;
            text-align: center;
            line-height: 75px;
            font-size: 30px;
        }
    </style>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container-fluid" style="">
        <div class="row">
            <div class="col">
                <center>
                    <p style="font-size: 30px;">CATALOG</p>
                </center>
                <hr style="background-color:white; margin-top:-15px;">
                <p style="font-weight: bold; text-align: center;">Find the bread you want,
                    we always serve the best</p><br>
            </div>
        </div>

        <!DOCTYPE html>
        <html>

        <head>
            <style>
                .flex-container {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                }

                .flex-container>div {
                    background-color: #f1f1f1;
                    width: 100px;
                    margin: 10px;
                    text-align: center;
                    line-height: 75px;
                    font-size: 30px;
                }
            </style>
        </head>

        <body>

            <div class="flex-container">
                <?php foreach ($roti as $rt) : ?>
                    <td>
                        <div class="card" style="width: 21rem;">
                            <div class="col-auto" style="background-color: black"><br>
                                <center><img src="<?= base_url('assets/img/roti/') . $rt['gambar_roti']; ?>" width="300px"></center>
                                <center>
                                    <p><?= $rt['nama_roti']; ?></p>
                                    <p style="font-weight: bold;">Rp. <?= $rt['harga_roti']; ?>,
                                        -</p><a href="<?= base_url('Deskripsi/detail/') ?><?= $rt['id_roti'] ?>" class="btn" style="background-color: #31A38E; color: white;">Detail</a>
                                </center><br>
                            </div>
                        </div>
                    </td><br><?php endforeach; ?>
            </div>

        </body>

        </html>