<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <center>
          <p style="font-size: 30px;">FAQ</p>
        </center>
        <hr style="background-color:white; margin-top:-15px;">
        <p style="text-align: center; font-weight:bold;"> A Team That Feels a Whole Lot Like Family</p>
        <p style="text-align: center;">Not Yet</p>
        <?php foreach ($faq as $fq) : ?>
          <td>
            <center>
              <div class="card" style="width: 50rem;">
                <div class="col-auto" style="background-color: black"><br>

                  <p><?= $fq['question']; ?></p>
                  <br><br>
                  <p><?= $fq['answer']; ?></p>
            </center>
      </div>
    </div>
  </div>
  </div>
  </td><br><?php endforeach; ?>
<br>
</div>
</div>
</div>
</body>