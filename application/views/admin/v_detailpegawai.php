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
                        <h3> Data Diri</h3>
                        <table class="table table-striped">
							<tr>
								
								<th>NIP</th>
								<th>Nama</th>
								<th>Tgl Lahir</th>
								<th>Golongan</th>
								<th>TMT Pangkat</th>
								<th>Jabatan</th>
								<th>TMT Jabatan</th>
								<th>Asal Kampus/Universitas</th>
								<th>Thn Lulus</th>
								<th>No Ijazah</th>
								<th>TMT Pensiun</th>
								

								
							
								
							</tr>
							<?php 
							$no = 1;
							foreach($user as $u){ 
							?>
							<tr>
								
								<td><?php echo $u->nip ?></td>
								<td><?php echo $u->nama_lengkap ?></td>
								<td><?php echo $u->tgl_lahir ?></td>
								<td><?php echo $u->golongan_pangkat ?></td>
								<td><?php echo $u->tmt_pangkat ?></td>
								<td><?php echo $u->nama_jabatan ?></td>
								<td><?php echo $u->tmt_jabatan ?></td>
								<td><?php echo $u->tmpt_didik ?></td>
								<td><?php echo $u->thn_lulus ?></td>
								<td><?php echo $u->ijazah ?></td>
								<td><?php echo $u->tmt_pensiun ?></td>
								
								
								
							</tr>
							<?php } ?>

						</table>


						<h3> Data Keluarga</h3>

						<table class="table table-striped">
							<tr>
								
								<th>Suami/Istri</th>
								<th>Jml Anak</th>
								<th>Alamat</th>

																
							</tr>
							<?php 
							$no = 1;
							foreach($user as $u){ 
							?>
							<tr>
								
								<td><?php echo $u->nama_istri ?></td>
								<td><?php echo $u->jml_anak ?></td>
								<td><?php echo $u->alamat ?></td>
								
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