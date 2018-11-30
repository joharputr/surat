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
      <div class="col-sm-12">
        <div class="box">
          <div class="box-body">
            <?php if($this->session->flashdata('hasil')){ ?>
            <div class="alert alert-info">
                <?php echo $this->session->flashdata('hasil'); ?>
            </div>
            <?php } ?>
          
            <div style="padding-bottom: 20px;">
                <a href="<?php echo base_url().'index.php/produk/tambah/'; ?>" class="btn btn-info" role="button">
                    <i class="fa fa-plus"></i> Tambah Data
                </a>
                 <a href="<?php echo base_url().'index.php/'; ?>" class="btn btn-info" role="button">
                    <i class="fa fa-home"></i> Kembali
                </a>
            </div>
               <div>
     <div class="col-lg-6">
    <div class="input-group" style="margin-left: -20px;">
      <input type="text" class="form-control" placeholder="Search for...">
       <div class="col-auto">
        <button class="btn btn-info" type="submit">Search</button>
        </div>
      </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
       <br>
               </div>
             
            </div>
            <div class="table-responsive">
              <table id="datatable" class="table table-bordered table-striped" >
                <thead>
                    <th style="  vertical-align: super; text-align: center;" rowspan="2"> <br> No Agenda </th>
                    <th style="  vertical-align: super; text-align: center;" rowspan="2"> <br> Tanggal Diterima</th>
                    <th style="  vertical-align: super; text-align: center;" rowspan="2"> <br> Kode Arsip</th>
                    <th style="  vertical-align: super; text-align: center;" rowspan="2"> <br> No Surat</th>
                    <th style="  vertical-align: super; text-align: center;" rowspan="2"> <br> Tanggal Surat</th>
                    <th style="  vertical-align: super; text-align: center;" rowspan="2"> <br> Pengirim</th>
                    <th style="  vertical-align: super; text-align: center;" rowspan="2"> <br> Perihal</th>
                    <th style="  vertical-align: super; text-align: center;" rowspan="2"> <br> Lampiran</th>
                    <th style="  vertical-align: super; text-align: center;" rowspan="2"> <br> Sifat Surat</th>
                    <th style="  vertical-align: super; text-align: center;" rowspan="2"> <br> Pejabat Pendisposisi</th>
                    <th style="  text-align: center;" colspan="11">Disposisi </th>
                    <th style="  vertical-align: super; text-align: center;" rowspan="2"> <br> Surat Asli/Copy</th>
                    <th style="  vertical-align: super; text-align: center;" rowspan="2"> <br> informasi Disposisi</th>
                    <th style="  vertical-align: super; text-align: center;" rowspan="2"> <br> Aksi</th>
                        <tr>
                          <th style=" vertical-align: super; text-align: center;">TU</th>
                          <th style=" vertical-align: super; text-align: center;">Kapok Datin</th>
                          <th style=" vertical-align: super; text-align: center;">Kapok Obs</th>
                          <th style=" vertical-align: super; text-align: center;">Kapok Forcaster</th>
                          <th style=" vertical-align: super; text-align: center;">Kapok Teknisi</th> 
                          <th style=" vertical-align: super; text-align: center;">PPK</th> 
                          <th style=" vertical-align: super; text-align: center;">Bendahara Penerimaan</th> 
                          <th style=" vertical-align: super; text-align: center;">Bendahara Pengeluaran</th> 
                          <th style=" vertical-align: super; text-align: center;">PPABP</th> 
                          <th style=" vertical-align: super; text-align: center;">SAIBA</th> 
                          <th style=" vertical-align: super; text-align: center;">BMN</th> 
                      </tr>
                </thead>
                   <tbody>
                    <?php if(isset($dataproduk) and $dataproduk):$i=1; foreach($dataproduk as $row): ?>
                    <tr>
                      <td class="text-center"><?php echo $i; ?></td>
                      <td><?php echo $row->nama; ?></td>
                      <td><?php echo $row->tipe; ?></td>
                      <td><?php echo $row->harga; ?></td>
                      <td><?php echo $row->stok; ?></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a title="Ubah" class="btn btn-sm btn-default" href="<?php echo base_url().'index.php/produk/ubah/'.$row->id; ?>"><i class="fas fa-pencil-alt"></i></a>
                          <a title="Hapus" class="btn btn-sm btn-default" href="<?php echo base_url().'index.php/produk/hapus/'.$row->id; ?>"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                    <?php $i++; endforeach; endif; ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

</body>
</html>
