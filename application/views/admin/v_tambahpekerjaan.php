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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
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
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
    </ul>
  </div>
</nav>
	<center>
		<h1>Tambah Data Pegawai</h1>
		<h3>Pekerjaan</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). '/home/adddatapekerjaan'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>NIP</td>
				<td>
					<input type="text" name="nip" value="<?php echo $u->nip ?>">
					
				</td>
			</tr>
			

			<tr>
				<td>Jabatan</td>
				<td><input type="text" name="jabatan" value=""></td>
			</tr>

			<tr>
				<td>Golongan Pangkat</td>
				<td><select  id="golongan_pangkat" type="text" class="form-control" name="golongan_pangkat" placeholder="Pangkat Golongan">
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

				    </select></td>
			</tr>

			<tr>
				<td>Jenis SK</td>
				<td><input type="text" name="jenis_sk" value=""></td>
			</tr>

			<tr>
				<td>NO Surat</td>
				<td><input type="text" name="no_surat" value=""></td>
			</tr>

			<tr>
				<td>Tanggal SK</td>
				<td><input type="text" name="tgl_sk" id='tgl_sk' value=""></td>
			</tr>

			<tr>
				<td>TMT SK</td>
				<td><input type="text" name="tmt_sk" value="" id='tmt_sk'></td>
			</tr>

			<tr>
				<td>TMT Jabatan</td>
				<td><input type="text" name="tmt_jabatan" value="" id='tmt_jabatan'></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>

	<script>
    $(document).ready(function(){
      var date_input=$('input[name="tgl_sk"]'); //our date input has the name "date"
      var tmt_jabatan=$('input[name="tmt_jabatan"]');
      var tmt_sk=$('input[name="tmt_sk"]');
      var tgl_sk=$('input[name="tgl_sk"]');
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
      tmt_jabatan.datepicker(options);
      tmt_sk.datepicker(options);
      tgl_sk.datepicker(options);






    })
</script>
</body>
</html>