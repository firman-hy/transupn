<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data Mahasiswa</title>

</head>

<body class="px-5 pt-3">
	<h1 class="mb-3"><?php echo $judul; ?></h1>
	<form action="<?php echo base_url() ?>index.php/driver/update/" method="post">
		<?php foreach ($dvr as $driver) : ?>
	
	<div class="form-group mb-3">
      <label>ID_Driver</label>
      <input type="text" class="form-control" name="id_driver"<?php echo $driver->id_driver ?>">
    </div>

    <div class="form-group mb-3">
      <label>Nama</label>
      <input type="text" class="form-control" name="nama"<?php echo $driver->nama ?>">
    </div>

    <div class="form-group mb-3">
      <label>No SIM</label>
      <input type="text" class="form-control" name="no_sim"<?php echo $driver->no_sim ?>">     
    </div>
    
    <div class="form-group mb-5">
      <label>Alamat</label>
      <input type="text" class="form-control" name="alamat"<?php echo $driver->alamat ?>">
    </div>

		<button class="btn btn-primary" type="submit">Update</button>
		<?php endforeach ?>
	</form>
	
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  	<link href="<?php echo base_url(); ?>assets/css/dashboard.min.css" rel="stylesheet">

  	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
  	<script src="<?php echo base_url('assets/js/chart.js'); ?>"></script>
  	<script src="<?php echo base_url('assets/js/dashboard.js'); ?>"></script>
  	<script src="<?php echo base_url('assets/js/feather.min.js'); ?>"></script>

</body>

</html>