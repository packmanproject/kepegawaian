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
	<!--<center><h1>BIODATA PEGAWAI</h1></center>-->
	<!--<div class="container">
	
			<table class="table table-striped">
				<tr>
					
					<th>NIP</th>
					<th>Nama</th>
					<th>Golongan</th>
					<th>Nama Istri</th>
					<th>Image</th>
					

					
				</tr>
				<?php 
				$no = 1;
				foreach($user as $u){ 
				?>
				<tr>
					
					<td><?php echo $u->nip ?></td>
					<td><?php echo $u->nama_lengkap ?></td>
					<td><?php echo $u->golongan_pangkat ?></td>
					<td><?php echo $u->nama_istri ?></td>
					<td><img src="<?php echo base_url($u->image);?>"  width=70px height=70px ></td>
					
				</tr>
				<?php } ?>

			</table>
			
				<center><?php echo anchor('home/tambahdatakeluarga/'.$u->nip,'<i class=""></i><span class="btn btn-primary"/>Tambah Biodata Keluarga'); 
			?></center>

	</div>

	<div class="col-lg-3 col-lg-offset-4">
		<?php 
				$no = 1;
				foreach($user as $u){ 
				?>
				
					
					NIP:<?php echo $u->nip ?></ul>
					<ul><?php echo $u->nama_lengkap ?></ul>
					<ul><?php echo $u->golongan_pangkat ?></ul>
					<ul><?php echo $u->nama_istri ?></ul>
					<ul><img src="<?php echo base_url($u->image);?>"  width=70px height=70px ></ul>
					
				
				<?php } ?>
				</li>
	</div>-->







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
                    <label>Golongan Pangkat</label>
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
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                             3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                        </p>
                    </div>
                    <!--
                    <div >
                        <a href="#" class="btn btn-social btn-facebook">
                            <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                        <a href="#" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus"></i>&nbsp; Google</a>
                        <a href="#" class="btn btn-social btn-twitter">
                            <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                        <a href="#" class="btn btn-social btn-linkedin">
                            <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>
                    </div>
                    -->
                    <div class="form-group col-md-8">
                        
                        <table class="table table-striped">
							<tr>
								
								<th>NIP</th>
								<th>Nama</th>
								<th>Golongan</th>
								<th>Nama Istri</th>
								
								

								
							</tr>
							<?php 
							$no = 1;
							foreach($user as $u){ 
							?>
							<tr>
								
								<td><?php echo $u->nip ?></td>
								<td><?php echo $u->nama_lengkap ?></td>
								<td><?php echo $u->golongan_pangkat ?></td>
								<td><?php echo $u->nama_istri ?></td>
								
								
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