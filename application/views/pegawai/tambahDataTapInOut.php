<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
  </div>

  <div class="card" style="width: 60%; margin-bottom:100px;">
    <div class="card-body">

      <form action="<?= base_url('pegawai/dataTapInOut/tambahDataAksi') ?>" method="post" enctype="multipart/form-data">  
        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" name="nama_pegawai" class="form-control">
          <?= form_error('nama_pegawai', '<div class="text-small text-danger">', '</div>') ?>
        </div>
        
        <div class="form-group">
          <label for="">Jenis Kendaraan</label>
          <input type="text" name="username" class="form-control">
          <?= form_error('username', '<div class="text-small text-danger">', '</div>') ?>
        </div>

        <div class="form-group">
          <label for="">Nomor Kendaraan</label>
          <input type="text" name="email" class="form-control">
          <?= form_error('email', '<div class="text-small text-danger">', '</div>') ?>
        </div>

        <div class="form-group">
          <label for="">Gate</label>
          <select name="" id="" class="form-control">
            <option value="">--Pilih Gate--</option>
            <option value="">Gate 1 - In</option>
            <option value="">Gate 1 - Out</option>
            <option value="">Gate 2 - In</option>
            <option value="">Gate 2 - Out</option>
            <option value="">Gate 3 - In</option>
            <option value="">Gate 3 - Out</option>
          </select>
        </div>

        <div class="form-group">
            <label for="">Photo</label>
            <input type="file" name="photo" class="form-control">
            <?= form_error('photo', '<div class="text-small text-danger">', '</div>') ?>
          </div>
          
        <div class="form-group">
          <label for="">Keterangan</label>
          <textarea name="keterangan" id="" class="form-control"></textarea>
          <?= form_error('tanggal_masuk', '<div class="text-small text-danger">', '</div>') ?>
        </div>
          

          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="<?= base_url('pegawai/dataTapInOut'); ?>" class="btn btn-warning">Kembali</a>

      </form>
    </div>

  </div>


</div>