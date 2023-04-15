
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>assets/src/assets/logo.png"/>
    <title>PTSP | Kemenag Kota Balikpapan</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url() ?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  </head>

  <body class="login">
    <div>
      
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <form method="post" action="<?php echo base_url('auth/registrasi')?>" enctype="multipart/form-data" >
              <h1>Create Account</h1>
              <?php echo $this->session->flashdata('message');?>
              <div><span class="required"></span>
                <input type="text" class="form-control" placeholder="Nama Panjang" required="required" name="nama" />
              </div>
              <div><span class="required"></span>
                <input type="text" class="form-control" placeholder="NIK" required="required" name="nik" />
              </div>
              <div><span class="required"></span>
                <select name="jenis_kelamin" class="form-control" required="required" >
                  <option>--Pilih Jenis Kelamin--</option>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div><br>
              <div><span class="required"></span>
                <input type="text" class="form-control" placeholder="Tempat Lahir" required="required" name="tempat_lahir" />
              </div>
              <div><span class="required"></span>
                <div class="input-group">
                  <span class="input-group-text">Tanggal Lahir</span>
                    <input type="date" class="form-control" aria-describedby="basic-addon3 basic-addon4" required="required" name="tanggal_lahir" >
                </div> <br>
              <div><span class="required"></span>
                <input type="text" class="form-control" placeholder="alamat" required="required" name="alamat" />
              </div>
              <div><span class="required"></span>
                <input type="text" class="form-control" placeholder="Nomor Hp" required="required" name="no_hp" />
              </div>
              <div><span class="required"></span>
                <input type="email" class="form-control" placeholder="Email" required="required" name="email" />
              </div>
              <div><span class="required"></span>
                <input type="password" class="form-control" placeholder="Password" required="required" name="password" />
              <div><span class="required"></span>
                <input type="password" class="form-control" placeholder="Ulang Password" required="required" name="u_password" />
              </div>
              <div><span class="required"></span>
                <div class="input-group">
                  <span class="input-group-text">Foto KTP</span>
                  <input type="file" class="form-control" aria-describedby="basic-addon3 basic-addon4" required="required" name="ktp" >
                </div>
              </div><br />
              <div class="form-check" required="required"><span class="required"></span>
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required="required" >
                <label class="form-check-label" for="flexCheckDefault">
                  Data berikut merupakan data yang valid dan benar.!! <span class="required"></span>
                </label>
              </div><br />
              <div>
                <button type="submit" class="btn btn-default form-control">Daftar</button>
              </div>

              <div class="clearfix"></div>
              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="<?php echo base_url ('auth/login') ?>" class="to_register"> Log in </a>
                </p>
                <div class="clearfix"></div>
                <br />
                <br />
                <div>
                  
                  <h1><img src="<?php echo base_url() ?>assets/src/assets/logo.png" alt="image" width="45" height="45"> PTSP </h1>
                  <p>©2023 All Rights Reserved. <strong>Pelayanan Terpadu Satu Pintu Kementerian Agama Kota Balikpapan </strong>Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url() ?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url() ?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url() ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url() ?>assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url() ?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url() ?>assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url() ?>assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url() ?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="<?php echo base_url() ?>assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ?>assets/build/js/custom.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ?>assets/build/js/custom.min.js"></script>
    <script src="<?php echo base_url() ?>https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
