<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TransUPN</title>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar align-text-bottom" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            This week
          </button>
        </div>
      </div>

  <a href="<?php echo base_url() ?>index.php/transupn/add" class="btn btn-primary mb-3">Tambah Data</a>
  <?php echo $this->session->flashdata('msg'); ?>
  <div class="table-responsive text-center mt-2">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>No</th>
          <th>ID_Transupn</th>
          <th>ID_Kondektur</th>
          <th>ID_Bus</th>
          <th>ID_Driver</th>
          <th>Jumlah Km</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        
        <?php $No=1; foreach($trans as $trans_upn) : ?>
        <tr>
          <td><?php echo $No; $No++; ?></td>
          <td><?php echo $trans_upn->id_trans_upn; ?></td>
          <td><?php echo $trans_upn->id_kondektur; ?></td>
          <td><?php echo $trans_upn->id_bus; ?></td>
          <td><?php echo $trans_upn->id_driver; ?></td>
          <td><?php echo $trans_upn->jumlah_km; ?></td>
          <td><?php echo $trans_upn->tanggal; ?></td>
          <td>
            <a href="<?php echo base_url() ?>index.php/transupn/update/<?php echo $trans_upn->id_trans_upn; ?>" class="btn btn-primary">
              Edit
            </a>
            <a href="<?php echo base_url() ?>index.php/transupn/delete/<?php echo $trans_upn->id_trans_upn; ?>" class="btn btn-danger">
              Delete
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/dashboard.min.css" rel="stylesheet">

  <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/chart.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/dashboard.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/feather.min.js'); ?>"></script>
</body>
</html>