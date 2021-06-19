<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
  </div>

  <?= $this->session->flashdata('pesan'); ?>
  <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?= base_url('pegawai/dataTapInOut/tambahData'); ?>"><i class="fas fa-plus"></i> Tambah Data Manual</a>

  <table class="table table-striped table-bordered">
    <tr>
      <th class="text-center">No</th>
      <th class="text-center">Tanggal</th>
      <th class="text-center">Tap In / Tap Out</th>
      <th class="text-center">Pengguna</th>
      <th class="text-center">Jenis Kendaraan</th>
      <th class="text-center">No Kendaraan</th>
      <th class="text-center">Gate</th>
      <th class="text-center">Keterangan</th>
    </tr>

    <?php $no=1;
    foreach($tap_in_out as $data): ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= $data->created_at; ?></td>

      <?php if($data->kode == 1): ?>
        <td>Tap In</td>
      <?php else: ?>
        <td>Tap Out</td>
      <?php endif; ?>
      
      <td><?= $data->pengguna; ?></td>

      <?php if($data->jenis_kendaraan == 1): ?>
        <td>Motor</td>
      <?php else: ?>
        <td>Mobil</td>
      <?php endif; ?>

      <td><?= $data->no_kendaraan; ?></td>
      <td><?= $data->gate; ?></td>
      <td><?= $data->keterangan; ?></td>
    </tr>
    <?php endforeach; ?>

  </table>




</div>