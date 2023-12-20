<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Data</title>

</head>
<body class="px-5 pt-3">
  <h1 class="mb-3"><?php echo $judul; ?></h1>
  <form action="<?php echo base_url() ?>index.php/bus/add" method="post">
    
  <div class="form-group mb-3">
      <label>ID_Bus</label>
      <input type="text" class="form-control" name="id_bus">
    </div>

    <div class="form-group mb-3">
      <label>Plat Nomor</label>
      <input type="text" class="form-control" name="plat">
    </div>

    <div class="form-group mb-3">
      <label>status</label>
      <input type="text" class="form-control" name="status">     
    </div>

    <button class="btn btn-primary" type="submit">Simpan</button>
  </form>


  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/dashboard.min.css" rel="stylesheet">

  <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/chart.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/dashboard.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/feather.min.js'); ?>"></script>
</body>
</html>