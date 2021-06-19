<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
  </div>

  <div class="card" style="width: 60%; margin-bottom:100px;">
    <div class="card-body">

      <?php foreach($pegawai as $p): ?>

      <form action="<?= base_url('admin/dataUser/updateDataAksi') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="">NRP</label>
          <input type="hidden" name="id_pegawai" value="<?= $p->id_pegawai; ?>">
          <input type="number" name="nik" class="form-control" value="<?= $p->nik; ?>">
          <?= form_error('nik', '<div class="text-small text-danger">', '</div>') ?>
        </div>
        
        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" name="nama_pegawai" class="form-control" value="<?= $p->nama_pegawai; ?>">
          <?= form_error('nama_pegawai', '<div class="text-small text-danger">', '</div>') ?>
        </div>

        <div class="form-group">
          <label for="">Username</label>
          <input type="text" name="username" class="form-control" value="<?= $p->username; ?>">
          <?= form_error('username', '<div class="text-small text-danger">', '</div>') ?>
        </div>

        <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="email" class="form-control" value="<?= $p->email; ?>">
          <?= form_error('email', '<div class="text-small text-danger">', '</div>') ?>
        </div>
        
        <div class="form-group">
          <label for="">Alamat</label>
          <textarea name="alamat" class="form-control"><?= $p->alamat; ?></textarea>
          <?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
        </div>
        
        <div class="form-group">
          <label for="">Password</label>
          <input readonly type="password" name="password" class="form-control" value="<?= $p->password; ?>">
          <?= form_error('password', '<div class="text-small text-danger">', '</div>') ?>
        </div>

        <div class="form-group">
          <label for="">Jenis Kelamin</label>
          <select name="jenis_kelamin" id="" class="form-control">
            <option value="<?= $p->jenis_kelamin; ?>"><?= $p->jenis_kelamin; ?></option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          <?= form_error('jenis_kelamin', '<div class="text-small text-danger">', '</div>') ?>
        </div>
          
          <div class="form-group">
            <label for="">Tanggal Daftar</label>
            <input type="date" name="tanggal_masuk" class="form-control" value="<?= $p->tanggal_masuk; ?>">
            <?= form_error('tanggal_masuk', '<div class="text-small text-danger">', '</div>') ?>
          </div>

          <div class="form-group">
            <label for="">Hak Akses</label>
            <select name="hak_akses" id="" class="form-control">
              <option value="<?= $p->hak_akses; ?>">
              <?php if($p->hak_akses == '1') echo "Admin";
                elseif($p->hak_akses == '2') echo "Petugas Parkir";
                else echo "Civitas Akademika";
              ?>
              </option>
              <option value="2">Petugas Parkir</option>
              <option value="3">Civitas Akademika</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>

      </form>
      <?php endforeach; ?>
    </div>

  </div>


</div>