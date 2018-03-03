<html>
<head>
	<title>Tambah Data Pegawai</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
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
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
    </ul>
  </div>
</nav>
	<center>
		<h1>Data Pegawai</h1>
		<h3>Tambah data baru</h3>
	</center>

	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<form action="<?php echo base_url(). '/home/tambah_aksi'; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

				<div class="input-group">
			    	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			    	<input id="nip" type="text" class="form-control" name="nip" placeholder="nip"/>
			  	</div>
			  	<div class="input-group">
			    	<span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
			    <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap"/>
			    </div>

			    <div class="input-group">
				    <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>

				    <select  id="golongan_pangkat" type="text" class="form-control" name="golongan_pangkat" placeholder="Pangkat Golongan">
				    	
				    		<option>IIB</option>
	    					<option>IIC</option>
	    					<option>IIIB</option>
	    					<option>IIIC</option>

				    </select>
			    </div>



			    <div class="input-group"> <!-- Date input -->
        			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        			<input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
      			</div>

      			</br>
      			<div class="input-group">
			    	<span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
			    <input id="image" type="file" class="form-control" name="image"/>
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

	</div>



	<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
</body>



</html>