<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AZZURA Media | Admin</title>
</head>
<body>
<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
<h1>
Haii selamat datang, anda login sebagai <?php echo $username; ?></h1> <a href="<?php echo site_url('admin/c_admin/logout'); ?>">Logout</a>

</body>
</html>