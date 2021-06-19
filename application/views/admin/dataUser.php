<!-- Begin Page Content -->
<div class="container-fluid" style="margin-bottom: 100px;">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
  </div>

  <?= $this->session->flashdata('pesan'); ?>
  <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?= base_url('admin/dataUser/tambahData'); ?>"><i class="fas fa-plus"></i> Tambah User</a>

  <table class="table table-striped table-bordered">
    <tr>
      <th class="text-center">No</th>
      <th class="text-center">NRP</th>
      <th class="text-center">Nama</th>
      <th class="text-center">Username</th>
      <th class="text-center">Email</th>
      <th class="text-center">Hak Akses</th>
      <th class="text-center">Action</th>
    </tr>

    <?php $no=1;
    foreach($users as $user): ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= $user->nik; ?></td>
      <td><?= $user->nama_pegawai; ?></td>
      <td><?= $user->username; ?></td>
      <td><?= $user->email; ?></td>

      <?php if($user->hak_akses == 1){ ?>
        <td>Admin</td>
      <?php }elseif($user->hak_akses ==2){ ?>
        <td>Petugas Parkir</td>
      <?php }else{ ?>
        <td>Civitas Akademika</td>
      <?php } ?>

      <td>
        <center>
          <a class="btn btn-sm btn-primary" href="<?= base_url('admin/dataUser/updateData/'.$user->id_pegawai); ?>"><i class="fas fa-edit"></i></a>
          <a onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/dataUser/deleteData/'.$user->id_pegawai); ?>"><i class="fas fa-trash"></i></a>
        </center>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>




</div>