<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Reficul" />

	<title>Pengarsipan Surat</title>
    <link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css"; ?>" media="screen,projection" />
    <link href="<?php echo base_url()."assets/fontawesome/web-fonts-with-css/css/fontawesome-all.css"; ?>" rel="stylesheet" />
    <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'; ?>"></script>


</head>

<body>


<div class="jumbotron text-center">
  <h1>Badan Meterologi Klimatologi dan Geofisika <br>
  Stasiun Klimatologi Kelas IV Mlati</h1>
  <p>Jl. Kabupaten Km. 5.5 Duwet Sendangadi Mlati Sleman D.I.Yogyakarta <br>
    Telepon : (0274) 2880151/2880152 Fax : (0274) 2880151 Kode Pos 55285 <br> Email : staklim.yogya@gmail.com</p>
</div>
<div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="box">
          <div class="box-body">
            <?php if($this->session->flashdata('hasil')){ ?>
            <div class="alert alert-info">
                <?php echo $this->session->flashdata('hasil'); ?>
            </div>
            <?php } ?>
          
            <div style="padding-left: 50px;">
                <a href="<?php echo base_url().'index.php/produk/'; ?>" class="btn btn-info" role="button" style="height: 500 px; width: 500px;">
                    <i class=""></i> <font size = "7"> Surat Masuk </font>
                </a>
                 <a href="<?php echo base_url().'index.php/produk/tambah/'; ?>" class="btn btn-info" role="button" style="heigt: 500 px; width: 500px">
                    <i class=""></i>  <font size = "7"> Surat Keluar </font> 
                </a>
            </div>

            <br> <br>
               
               



                           <!-- Footer -->
                  <footer class="jumbotron text-center" styel="height:100 px;">

                    <!-- Copyright -->
                    <div class= style="width:100%; padding:0px;">© 2018 Copyright:
                      <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
                    </div>
                    <!-- Copyright -->

                  </footer>
                  <!-- Footer -->

</body>
</html>
