<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
 <title>Pegawai UIN IB</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!-- INI ADALAH HEADER -->
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
         
          <a class="navbar-brand" href="http://www.uinib.ac.id">UIN IB</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Hubungi Kami</a></li>
            <li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
 <br><br><br><br><br>
 
 
 <!-- INI ADALAH TAMPILAN MENU UTAMA -->
    <div class="container">
      <div class="jumbotron">
        <h1><h2>Hai, <?php echo $this->session->userdata("username"); ?></h2></h1><br>
        <p>Silahkan memasukkan data pegawai dengan benar. Selamat Bekerja</p>
        <br><p>
          <a class="btn btn-lg btn-primary" href=<?php echo base_url(); ?>home/viewdata role="button">Lanjut &raquo;</a>
        </p>
      </div>

    </div>
</body>
</html>