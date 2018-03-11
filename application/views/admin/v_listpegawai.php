<html>
<head>
	<title>List Data Pegawai UIN Imam Bonjol</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/> 
  <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>  

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




	<center><h1>Data Pegawai UIN Imam Bonjol</h1></center><br>
	<center><?php echo anchor('home/tambahdata','<i class=""></i><span class="btn btn-primary"/>Tambah Data'); 
	?></center><br>
	<div class="container">
		
	<div class="table-responsive"> 
	<table class="table table-bordered " id="example">
  <thead class="blue-grey lighten-4">
		<tr >
			
			<th>NIP</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<!--<th>Image</th>-->
			<th>Action</th>
		</tr>
    </thead>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			
			<td><?php echo $u->nip ?></td>
			<td><?php echo $u->nama_lengkap ?></td>
			<td><?php echo $u->nama_jabatan ?></td>
      <!--<td><img src="<?php //echo base_url($u->image);?>"  <!--width=70px height=70px ></td>-->
      
			<td>
			      <?php echo anchor('home/editdata/'.$u->nip,'<i class=""></i><span class="btn btn-success btn-sm"/>EDIT'); ?>
                  <?php echo anchor('home/hapusdata/'.$u->nip,'<i class=""></i><span class="btn btn-danger btn-sm"/>HAPUS'); ?>
                  <?php echo anchor('home/detaildata/'.$u->nip,'<i class=""></i><span class="btn btn-info btn-sm"/>VIEW'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>

	<?php echo "Jumlah Pegawai:  " .$row?>

	</div>
	</div>



<!--
<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/datatables/js/dataTables.bootstrap.min.js')?>"></script>
 
 -->
<script type="text/javascript">
    $(document).ready(function () {
     var table = $('#example').DataTable( {
               "pageLength": 5,
                "pagingType": "full_numbers"
          });
        $('#example').removeClass( 'display' ).addClass('table table-striped table-bordered');
    });
    </script>


</body>
</html>