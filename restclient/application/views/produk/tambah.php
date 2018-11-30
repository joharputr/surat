<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Reficul" />

	<title><?php echo $title; ?></title>
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
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div>
            <div>
                <h2>Form <?php echo $title;?></h2>
                <div class="clearfix"></div>
            </div>
            <div><br />
                <form action="<?php echo base_url()."index.php/produk/tambah"; ?>" method="post" enctype="multipart/form-data">
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2"> No Agenda <span class="required">*</span></label>
                        <div class="col-md-4">
                            <input type="text" name="nama" required="required" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">Tanggal Diterima</label>
                        <div class="col-md-4">
                             <input type="date" name="tgl" required="required" class="form-control col-md-8" value="<?php echo date('Y-m-d'); ?>"  />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">Kode Arsip</label>
                        <div class="col-md-4">
                            <input type="number" name="harga" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">No Surat</label>
                        <div class="col-md-4">
                            <input type="number" name="stok" required="required" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">Tanggal Surat</label>
                        <div class="col-md-4">
                            <input type="date" name="tgl" required="required" class="form-control col-md-8" value="<?php echo date('Y-m-d'); ?>"  />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">Pengirim</label>
                        <div class="col-md-4">
                            <input type="number" name="stok" required="required" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">Perihal</label>
                        <div class="col-md-4">
                            <textarea id = "tindakan" name="tindakan" required="required" class="form-control col-md-8"></textarea>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">Lampiran</label>
                        <div class="col-md-4">
                            <input type="number" name="stok" required="required" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">Sifat Surat</label>
                        <div class="col-md-4">
                            <input type="number" name="stok" required="required" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">Pejabat Pendisposisi</label>
                        <div class="col-md-4">
                            <input type="number" name="stok" required="required" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">Disposisi</label>
                        <div class="col-md-4">
                            <input type="number" name="stok" required="required" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">Surat Asli/Copy</label>
                        <div class="col-md-4">
                           <select id="jenis_laporan" name="jenis_laporan" required="required" class="form-control col-md-8">
                                <option value="kerusakan">Surat Asli</option>
                                <option value="perbaikan">Surat Copy</option>
                              </select>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">informasi Disposisi</label>
                        <div class="col-md-4">
                            <input type="number" name="stok" required="required" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                            <a href="<?php echo site_url('produk');?>" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>
