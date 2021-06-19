<!-- Begin Page Content -->
<div class="container-fluid" style="margin-bottom: 100px;">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
  </div>

  <?= $this->session->flashdata('pesan'); ?>
  <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?= base_url('admin/dataGate/tambahData'); ?>"><i class="fas fa-plus"></i> Tambah Data Gate</a>

  <table class="table table-striped table-bordered">
    <tr>
      <th class="text-center">No</th>
      <th class="text-center">Lokasi</th>
      <th class="text-center">Kode</th>
      <th class="text-center">Keterangan</th>
      <th class="text-center">Action</th>
    </tr>

    <?php $no=1;
    foreach($gates as $gate): ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= $gate->lokasi; ?></td>

      <?php if($gate->kode == 1){ ?>
        <td>Masuk</td>
      <?php }else{ ?>
        <td>Keluar</td>
      <?php } ?>

      <td><?= $gate->keterangan; ?></td>
      <td>
        <center>
          <a class="btn btn-sm btn-primary" href="<?= base_url('admin/dataGate/updateData/'.$gate->id_gate); ?>"><i class="fas fa-edit"></i></a>
          <a onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/dataGate/deleteData/'.$gate->id_gate); ?>"><i class="fas fa-trash"></i></a>
        </center>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>




</div>