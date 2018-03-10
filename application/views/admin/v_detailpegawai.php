<html>
<head>
	<title>List Data Pegawai UIN Imam Bonjol</title>
	<!--<link href="<?php //echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
  <script src="<?php //echo base_url('assets/js/jquery.min.js'); ?>"></script>
  <script src="<?php //echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <style>
  body {
    min-height: 2000px;
    padding-top: 70px;
  }
  </style>-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>



	
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">UIN IMAM BONJOL</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Home</a></li>
	      <li><a href="#"></a></li>
	      <li><a href="#"></a></li>
	      <li><a href="#"></a></li>
	    </ul>
	  </div>
	</nav>
	






<div class="container">
	<section style="padding-bottom: 50px; padding-top: 50px;">
            <div class="row">
                <div class="col-md-4">
                	<?php 
						$no = 1;
						foreach($user as $u){ 
					?>
                    
                    <img src="<?php echo base_url($u->image);?>"   width=200px height=240px/>
                    <!--class="img-rounded img-responsive"-->
                    <br />
                    <br />
                    
				
                    <label>NIP</label>
                    <input type="text" class="form-control" placeholder="<?php echo $u->nip ?>">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="<?php echo $u->nama_lengkap?>">
                    <label>Jabatan</label>
                    <input type="text" class="form-control" placeholder="<?php echo $u->nama_jabatan ?>">

                    <label>Golongan</label>
                    <input type="text" class="form-control" placeholder="<?php echo $u->golongan_pangkat ?>">

                    

                    <br>
                    <!--<a href="#" class="btn btn-success">Update Info</a>-->
                    <?php echo anchor('home/tambahdatakeluarga/'.$u->nip,'<i class=""></i><span class="btn btn-success"/>Update Data'); 
					?>
                    <br /><br/>

                    <?php } ?>
                </div>
                <div class="col-md-8">
                    <div class="alert alert-info">
                        <h2>Biodata Pegawai : </h2>
                        <h4>Universitas Islam Negeri Imam Bonjol Padang</h4>
                        <p>
                            Pegawai Universitas UIN Padang Diharapkan Memberikan Suri Tauladan Yang Baik Kepada Semua Pihak, Teladan Dalam Arti Kata Sebenarnya, Keteladanan Yang Didasari Oleh Hati Yang Ikhlas.
                            Membuang Ego Pribadi Demi Terwujudnya Visi Dan Misi Universitas.  
                        </p>
                    </div>
     
                    <div class="form-group col-md-8">
                        <h3> DATA DIRI</h3>
                        <table class="table table-striped">
							<tr>
								
								
								<th>Nama</th>
								<th>Tempat lahir</th>
								<th>Tgl Lahir</th>
								<th>Email</th>
								<th>Alamat</th>
								<th>TMT Jabatan</th>
								<th>TMT Pensiun</th>
																

								
							
								
							</tr>
							<?php 
							$no = 1;
							foreach($user as $u){ 
							?>
							<tr>
								
								
								<td><?php echo $u->nama_lengkap ?></td>
								<td><?php echo $u->tmpt_lahir ?></td>
								<td><?php echo $u->tgl_lahir ?></td>
								<td><?php echo $u->email ?></td>
								<td><?php echo $u->alamat ?></td>
								<td><?php echo $u->tmt_jabatan ?></td>
								<td><?php echo $u->tmt_pensiun ?></td>
								
								
								
							</tr>
							<?php } ?>

						</table>


						




						<h3>PENDIDIKAN</h3>
						<?php echo anchor('home/tambahdatapendidikan/'.$u->nip,'<i class=""></i><span class="btn btn-info btn-xs"/>Tambah Data Pendidikan');?>
						
						<?php echo anchor('home/view_detail_pendidikan/'.$u->nip,'<i class=""></i><span class="btn btn-success btn-xs"/>View Detail Data Pendidikan'); 
						?>
						<table class="table table-striped">
							<tr>
								<th>Tingkat</th>
								<th>Institusi</th>
								<th>Jurusan</th>
								<th>Tahun Lulus</th>
								<th>No Ijazah</th>					
							</tr>
							<?php 
							$no = 1;
							foreach($pendidikan as $p){ 
							?>
							<tr>
								
								<td><?php echo $p->tingkat ?></td>
								<td><?php echo $p->nama_perguruan ?></td>
								<td><?php echo $p->jurusan ?></td>
								<td><?php echo $p->thn_lulus ?></td>
								<td><?php echo $p->no_ijazah ?></td>
							</tr>
							<?php } ?>

						</table>


						<h3>PEKERJAAN</h4>
						<?php echo anchor('home/tambahdatapekerjaan/'.$u->nip,'<i class=""></i><span class="btn btn-info btn-xs"/>Tambah Data Pekerjaan');?>
						<?php echo anchor('home/view_detail_pekerjaan/'.$u->nip,'<i class=""></i><span class="btn btn-success btn-xs"/>View Detail Data Pekerjaan'); 
						?>
						<table class="table table-striped">
							<tr>
								<th>Jabatan</th>
								<th>Golongan Pangkat</th>
								<th>Jenis SK</th>
								<th>No Surat</th>
								<th>Tanggal SK</th>
								<th>TMT SK</th>
								<th>TMT Jabatan</th>

																
							</tr>
							<?php 
							$no = 1;
							foreach($pekerjaan as $kerja){ 
							?>
							<tr>
								
								<td><?php echo $kerja->jabatan ?></td>
								<td><?php echo $kerja->golongan_pangkat ?></td>
								<td><?php echo $kerja->jenis_sk ?></td>
								<td><?php echo $kerja->no_surat ?></td>
								<td><?php echo $kerja->tgl_sk ?></td>
								<td><?php echo $kerja->tmt_sk ?></td>
								<td><?php echo $kerja->tmt_jabatan?></td>
								
							</tr>
							<?php } ?>

						</table>


						<h3>PENELITIAN</h3>
						<?php echo anchor('home/tambahdatapenelitian/'.$u->nip,'<i class=""></i><span class="btn btn-info btn-xs"/>Tambah Data Penelitian');?>
						<?php echo anchor('home/view_detail_penelitian/'.$u->nip,'<i class=""></i><span class="btn btn-success btn-xs"/>View Detail Data Penelitian'); 
						?>
						<table class="table table-striped">
							<tr>
								
								<th>Judul Penelitian</th>
								<th>Jurnal Penerbit</th>
								<th>Tanggal Terbit</th>
								<th>Sponsor</th>

																
							</tr>
							<?php 
							$no = 1;
							foreach($penelitian as $pen){ 
							?>
							<tr>
								
								<td><?php echo $pen->judul_penelitian ?></td>
								<td><?php echo $pen->jurnal_penerbit ?></td>
								<td><?php echo $pen->tgl_terbit ?></td>
								<td><?php echo $pen->sponsor ?></td>
								
							</tr>
							<?php } ?>

						</table>



						<h3>KELUARGA </h3>
					
						
						<h4> Data Suami/Istri</h4><?php echo anchor('home/tambahdatakeluarga/'.$u->nip,'<i class=""></i><span class="btn btn-info btn-xs"/>Tambah Data Keluarga'); 
						?>

						<?php echo anchor('home/view_detail_keluarga/'.$u->nip,'<i class=""></i><span class="btn btn-success btn-xs"/>View Detail Keluarga'); 
						?>

						<table class="table table-striped">
							<tr>
								
								<th>Suami/Istri</th>
								<th>Tempat Lahir</th>
								<th>Tgl Lahir</th>
								<th>Pekerjaan</th>

																
							</tr>
							<?php 
							$no = 1;
							foreach($istri as $istri){ 
							?>
							<tr>
								
								<td><?php echo $istri->nama_istri ?></td>
								<td><?php echo $istri->tempat ?></td>
								<td><?php echo $istri->tgl_lahir ?></td>
								<td><?php echo $istri->pekerjaan_istri ?></td>
								
							</tr>
							<?php } ?>

						</table>


						<h4> Data Anak</h4><?php echo anchor('home/tambahdatakeluarga/'.$u->nip,'<i class=""></i><span class="btn btn-info btn-xs"/>Update Data Keluarga'); 
						?>
						<table class="table table-striped">
							<tr>
								
								<th>Nama Anak</th>
								<th>Tempat Lahir</th>
								<th>Tgl Lahir</th>
								<th>Jenis Kelamin</th>

																
							</tr>
							<?php 
							$no = 1;
							foreach($user as $u){ 
							?>
							<tr>
								
								<td><?php echo $u->nama_istri ?></td>
								<td><?php echo $u->jml_anak ?></td>
								<td><?php echo $u->alamat ?></td>
								<td><?php echo $u->jml_anak ?></td>
								
							</tr>
							<?php } ?>

						</table>





						<h4> Data Orang Tua</h4><?php echo anchor('home/tambahdatakeluarga/'.$u->nip,'<i class=""></i><span class="btn btn-info btn-xs"/>Update Data Keluarga'); 
						?>
						<table class="table table-striped">
							<tr>
								
								<th>Nama Orang Tua</th>
								<th>Jenis Kelamin</th>

																
							</tr>
							<?php 
							$no = 1;
							foreach($user as $u){ 
							?>
							<tr>
								
								<td><?php echo $u->nama_istri ?></td>
								<td><?php echo $u->jml_anak ?></td>
								
								
							</tr>
							<?php } ?>

						</table>

						

						<h4> Data Saudara Kandung</h4><?php echo anchor('home/tambahdatakeluarga/'.$u->nip,'<i class=""></i><span class="btn btn-info btn-xs"/>Update Data Keluarga'); 
						?>
						<table class="table table-striped">
							<tr>
								
								<th>Nama</th>
								<th>Tgl Lahir</th>
								<th>Pekerjaan</th>
								<th>Jenis Kelamin</th>

																
							</tr>
							<?php 
							$no = 1;
							foreach($user as $u){ 
							?>
							<tr>
								
								<td><?php echo $u->nama_istri ?></td>
								<td><?php echo $u->jml_anak ?></td>
								<td><?php echo $u->alamat ?></td>
								<td><?php echo $u->jml_anak ?></td>
								
							</tr>
							<?php } ?>

						</table>



                    </div>
                </div>
            </div>
            <!-- ROW END -->


        </section>

</div>
</body>
</html>