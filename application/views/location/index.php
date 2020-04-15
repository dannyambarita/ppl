<style media="screen">
#direction{
  background-color: #31A38E;
  color:white;
}
 #direction:hover{
   background-color: #999999;
   color: black;
 }
</style>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <center>
          <p style="font-size: 30px;">LOCATION</p>
        </center>
        <hr style="background-color:white; margin-top:-15px;">
        <br>
      </div>
    </div>
    <div class="container-fluid" style="">
      <div class="row">
        <div class="col-9">
          <a href="<?= base_url(); ?>"><img src="assets/visit.png" alt="" width="1030px"></a>
        </div>
        <br><br>
        <div class="col-3" style="background-color:#E4E4E4;">
          <p style="text-align:left; font-size:25px; padding-top:150px; color:black;">COME & VISIT</p>
          <hr style="background-color:black; margin-top: -15px;">
          <p style="text-align: left;  font-weight: bold; color:black;">Jl. Jend. Sudirman No.55, Kota Bandar Lampung </p>
          <p style="text-align: left; color:black;">Wednesday-Monday <br>6:30 AM - 9.30 PM </p>
          <p style="text-align: left; color:black;">Tuesday <br>7.30 AM - 9.30 PM </p>
          <a href="https://www.google.com/maps/dir//Jl.+Jenderal+Sudirman+No.55,+Rw.+Laut,+Kec.+Tj.+Karang+Tim.,+Kota+Bandar+Lampung,+Lampung+35213/@-5.4225894,105.2586884,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e40dbb4a131c7cd:0x5d81cbb4a2166fab!2m2!1d105.2674217!2d-5.4225895" class="btn" id="direction">DIRECTION</a>
        </div>
      </div>
    </div>
  </div>
  <br>
</body>
