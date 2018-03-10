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
                        
					<h3>PENDIDIKAN</h3>
						<?php echo anchor('home/detaildata/'.$u->nip,'<i class=""></i><span class="btn btn-info btn-xs"/>Kembali'); 
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

						</div>
                </div>
            </div>
            <!-- ROW END -->


    </section>

</div>
</body>
</html>