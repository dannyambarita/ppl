<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <center>
          <p style="font-size: 30px;">FAQ</p>
        </center>
        <hr style="background-color:white; margin-top:-15px;">
        <br>
      </div>
    </div>
  </div>

  <div class="container">
    <?php foreach ($faq as $f) : ?>
      <td>
        <div class="row" style="">
            <div class="col-1" style="background-color: black">

            </div>

            <div class="col-1">
              <p style="font-weight: bold;">Question</p>
            </div>

            <div class="col-1">
              <center><p style="font-weight: bold;">:</p></center>
            </div>

            <div class="col-8">
              <h6><?= $f['question']; ?></h6>
            </div>

            <div class="col-1" style="background-color: black">

            </div>
        </div>

        <div class="row" style="">
            <div class="col-1" style="background-color: black">

            </div>

            <div class="col-1">
              <p style="font-weight: bold;">Answer</p>
            </div>

            <div class="col-1">
              <center><p style="font-weight: bold;">:</p></center>
            </div>

            <div class="col-8">
              <h6><?= $f['answer']; ?></h6>
            </div>

            <div class="col-1" style="background-color: black">

            </div>
        </div>

        <hr style="background-color: white;">
      </td><?php endforeach; ?>
  </div>
</body>
