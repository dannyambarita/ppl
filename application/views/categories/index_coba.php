<!DOCTYPE html>
<html lang="en" dir="ltr">

<body>


  <div class="sidebar">
    <center><img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="" width="250px"></center>
    <a href="<?= base_url('admin') ?>" style="color: white;"><?= $user['name_user']; ?></a>
    <a href="#">Overview</a>
    <a href="#">Products</a>
    <a href="#" class="aktif" >Categories</a>
    <a href="#">Testimonies</a>
    <a href="#">Discount</a>
    <a href="#">FAQ</a>
  </div>

  <div class="container main" style="background-color: #f0eee4;">
    <div class="row" style="background-color: #d6d6d6;">
      <div class="col">
        <a style="color: #31A38E; font-weight: bold;"> Admin </a>
        <span style="color: #31A38E; font-weight: bold;">> Categories</span>
      </div>
    </div>

    <br>

    <div class="row" style="background-color: #d6d6d6;">
      <div class="col">
        <a href="<?= base_url() ?>categoriesadd" style="color: #31A38E; font-weight: bold;">+Add new</a>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col">
        <table class="table" style="background-color: white;">
          <thead>
            <tr>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php foreach ($roti_role as $rt) : ?>
                <td>
                  <li style='list-style-type: none;'><?= $rt['jenis_roti']; ?></li>
                </td>
                <td> <a href="#" class="p-1 mb-2 bg-success text-white">Edit</a> |
                  <a href="<?= base_url(); ?>categories/hapus/<?= $rt['id']; ?>" style="color: white;" onclick="return confirm('Delete this?');" class="p-1 mb-2 bg-danger text-white">Delete</a></td>
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

  <!-- <div class="row">
    <div class="col-sm-3">

    </div>
    <div class="col-sm-9">

      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </div>
  </div> -->




<script src="js/jquery-3.4.1.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

  </body>
</html>
