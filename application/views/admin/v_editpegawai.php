<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<a class="vglnk" href="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" rel="nofollow"><span>https</span><span>://</span><span>oss</span><span>.</span><span>maxcdn</span><span>.</span><span>com</span><span>/</span><span>html5shiv</span><span>/</span><span>3</span><span>.</span><span>7</span><span>.</span><span>2</span><span>/</span><span>html5shiv</span><span>.</span><span>min</span><span>.</span><span>js</span></a>"></script>
      <script src="<a class="vglnk" href="https://oss.maxcdn.com/respond/1.4.2/respond.min.js" rel="nofollow"><span>https</span><span>://</span><span>oss</span><span>.</span><span>maxcdn</span><span>.</span><span>com</span><span>/</span><span>respond</span><span>/</span><span>1</span><span>.</span><span>4</span><span>.</span><span>2</span><span>/</span><span>respond</span><span>.</span><span>min</span><span>.</span><span>js</span></a>"></script>
    <![endif]-->


  
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">UIN IMAM BONJOL</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url().'home/';?>">Home</a></li>
	      <li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
    </ul>
  </div>
</nav>
	<center>
		<h1>Edit Data Pegawai</h1>
		<h3>Edit Data</h3>
	</center>
	<div class="col-lg-4 col-lg-offset-4">
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/home/updatedata'; ?>" method="post">
		<div class="input-group">
			    	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			    	<input id="nip" type="text" class="form-control" name="nip"  value="<?php echo $u->nip ?>"/>
			  	</div>
			  	
			  	<div class="input-group">
			    	<span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
			    <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $u->nama_lengkap ?>"/>
			    </div>

			    <div class="input-group">
			    	<span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
			    <input id="nama_jabatan" type="text" class="form-control" name="nama_jabatan" placeholder="Jabatan" value="<?php echo $u->nama_jabatan ?>"/>
			    </div>

			    <div class="input-group">
				    <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>

				    <select  id="golongan_pangkat" type="text" class="form-control" name="golongan_pangkat" placeholder="Pangkat Golongan">
				    		<option>--</option>
				    		<option>IA</option>
				    		<option>IB</option>
				    		<option>IC</option>
				    		<option>IIA</option>
				    		<option>IIB</option>
	    					<option>IIC</option>
	    					<option>IIIA</option>
	    					<option>IIIB</option>
	    					<option>IIIC</option>
	    					<option>IVA</option>
	    					<option>IVB</option>
	    					<option>IVC</option>

				    </select>
			    </div>




			    <div class="input-group">
			    	<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
			    <input id="tempat_lahir_peg" type="text" class="form-control" name="tmpt_lahir" placeholder="Tempat Lahir" value="<?php echo $u->tmpt_lahir ?>"/>
			    </div>



			    
			    <div class="input-group"> <!-- Date input -->
        			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        			<input class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tangggal Lahir" type="text" value="<?php echo $u->tgl_lahir ?>"/>
      			</div>



      			


			    <div class="input-group"> <!-- Date input -->
        		<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        			<input class="form-control" id="date" name="tmt_jabatan" placeholder="TMT Jabatan" type="text"value="<?php echo $u->tmt_jabatan ?>"/>
      			</div>


			    <div class="input-group"> <!-- Date input -->
        			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        			<input class="form-control" id="tmt_pensiun" name="tmt_pensiun" placeholder="TMT Pensiun" type="text"value="<?php echo $u->tmt_pensiun ?>"/>
      			</div>


      			<div class="input-group">
			    	<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
			    <input id="email" type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $u->email ?>"/>
			    </div>



			    <div class="input-group">
			    	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			    <input id="no_hp" type="text" class="form-control" name="no_hp" placeholder="No HP" value="<?php echo $u->no_hp ?>"/>
			    </div>

			    <div class="input-group">
			    	<span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
			    <textarea id="alamat" type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $u->alamat ?>"></textarea>
			    </div>




			    </br>
      		

<!--




				
			   
			    <div class="input-group">
				    <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>

				    <select  id="nama_fakultas" type="text" class="form-control" name="nama_fakultas" placeholder="Pangkat Golongan">
				    	<?php 
						$no = 1;
						foreach($jurusan as $u){ 
						?>
				    		<option><?php echo $u->nama_fakultas ?></option>
	    				
				    		 <?php } ?>
				    </select>

			    </div>



			    


<!--========================================================================================================
			    <div class="input-group"> <!-- Date input -->
        			<!--<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        			<input class="form-control" id="date" name="tmt_pangkat" placeholder="TMT Pangkat" type="text"/>
      			</div>

      			<div class="input-group">
			    	<span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
			    <input id="nama_jabatan" type="text" class="form-control" name="nama_jabatan" placeholder="Jabatan"/>
			    </div>



			    <div class="input-group"> <!-- Date input -->
        		<!--	<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        			<input class="form-control" id="date" name="tmt_jabatan" placeholder="TMT Jabatan" type="text"/>
      			</div>


      			<div class="input-group">
			    	<span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
			    <input id="tmpt_didik" type="text" class="form-control" name="tmpt_didik" placeholder="Asal Perguruan Tinggi"/>
			    </div>


			    <div class="input-group">
			    	<span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
			    <input id="thn_lulus" type="text" class="form-control" name="thn_lulus" placeholder="Tahun Lulus"/>
			    </div>

			    <div class="input-group">
			    	<span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
			    <input id="ijazah" type="text" class="form-control" name="ijazah" placeholder="No Ijazah"/>
			    </div>


			    


			    


      			



				<!--<table style="margin:20px auto;">
					<tr>
						<td><span class="glyphicon glyphicon-home">NIP </td>
						<td><input type="text" name="nip"></td>
					</tr>
					<tr>
						<td><span class="glyphicon glyphicon-user">Nama</td>
						<td><input type="text" name="nama_lengkap"></td>
					</tr>
					<tr>
						<td><span class="glyphicon glyphicon-briefcase">Golongan</td>
						<td><input type="text" name="golongan_pangkat"></td>
					</tr>
					<!--<tr>
						<td>FOTO</td>
						<td><input type="text" name="image"></td>
					</tr>-->
					<!--<tr>
						<td></td>
						<td><input type="submit" value="Tambah"></td>
					</tr>
				</table>-->
				</br>
				<div>
					<input type="submit" value="Tambah" class="btn btn-primary">
				</div>
	</form>
	</div>	
	<?php } ?>
</body>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="tmt_pangkat"]'); //our date input has the name "date"
      var tmt_jabatan=$('input[name="tmt_jabatan"]');
      var tmt_pensiun=$('input[name="tmt_pensiun"]');
      var tgl_lahir=$('input[name="tgl_lahir"]');
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
      tmt_jabatan.datepicker(options);
      tmt_pensiun.datepicker(options);
      tgl_lahir.datepicker(options);






    })
</script>
</html>