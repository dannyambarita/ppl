<!DOCTYPE html>
<html lang="en" dir="ltr">

<body>

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
      background-color: #31A38E;
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

  <div class="container-fluid">
    <div class="row" style="padding-top: 4px;padding-bottom:4px;">
      <div class="col-3" style="background-color: #4f4f4f;">
        <div class="row" style="background-color: #31A38E;">
          <div class="col" style="color: white; font-weight:bold;">
            <center>Jon's Admin</center>
          </div>
        </div>

        <div class="row" style="background-color: #4f4f4f;">
          <div class="col">
            <br>
            <center><img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="" width="250px"></center>
            <p></p>
            <div class="row tom-nav" style="" id="user">
              <div class="col">
                <center><a href="<?= base_url('user'); ?>" style="color: white;"><?= $user['name_user']; ?></a></center>
              </div>
            </div>
          </div>
        </div>

        <div class="row tom-nav" style="" id="testimoni">
          <div class="col">
            <center><a href="<?= base_url('testimoni_user'); ?>" style="color: white; text-decoration: none;">Testimoni</a></center>
          </div>
        </div>

        <div class="row tom-nav" style="" id="user">
          <div class="col">
            <center><a href="<?= base_url('login/logout'); ?>" style="color: white;">Logout</a></center>
          </div>
        </div>

        <div class="row" style="background-color: #4f4f4f;">

        </div>
      </div>

      <div class="col-9">
        <div class="row" style="background-color: #4f4f4f; color: #4f4f4f">
          .
        </div>

        <br>

        <div class="row">
          <div class="col">
            <div class="container" style="background-color: #f0eee4; margin-left: 10px; margin-right: 10px;">
              <div class="row" style="background-color: #d6d6d6;">
                <div class="col">
                  <a href="<?= base_url('user') ?>" style="color: #31A38E; font-weight: bold;"> User /</a>
                  <span style="font-weight: bold;">Testimoni</span>
                </div>
              </div>

              <br>

              <div class="row" style="background-color: #d6d6d6;">
                <div class="col">
                  <div class="col"><br>
                    <button class="btn" style="background-color: #31A38E; color: white;">
                      <a href="<?= base_url('add_testimoni') ?>" style=" color: white; font-weight: bold;">+ Add New</a>
                    </button><br><br>
                  </div>
                </div>
              </div>

              <br>

              <div class="row">
                <div class="col">
                  <table class="table" style="background-color: white;">
                    <thead>
                      <tr>
                        <th>Comment</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php foreach ($komentar as $rt) : ?>
                          <td>
                            <?php if (strlen($rt['isi_komentar']) > 100) : ?>
                              <li style='list-style-type: none;'><?= substr($rt['isi_komentar'], 0, 100) ?> ...</li>
                            <?php else : ?>
                              <li style='list-style-type: none;'><?= $rt['isi_komentar'] ?></li>
                            <?php endif ?>
                          </td>
                          <td> <a href="#" class="p-1 mb-2 bg-success text-white">Edit</a> |
                            <a href="<?= base_url(); ?>testimoni_user/hapus/<?= $rt['id_komentar']; ?>" class="p-1 mb-2 bg-danger text-white" onclick="return confirm('Delete this?');">Delete</a>
                            </li>
                      </tr><?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="row">
                <div class="col-10">

                </div>

                <div class="col-2">
                  <a href="" class="btn" style=" background-color: #31A38E; color: white;">Save</a>
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