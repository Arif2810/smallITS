<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
  </div>

  <div class="card" style="width: 60%; margin-bottom:100px;">
    <div class="card-body">

      <form action="<?= base_url('civitas/keluhan/tambahDataAksi') ?>" method="post">
        
        <div class="form-group">
          <label for="">Subject</label>
          <input type="text" name="subject" class="form-control">
          <?= form_error('subject', '<div class="text-small text-danger">', '</div>') ?>
        </div>

        <div class="form-group">
          <label for="">Keluhan</label>
          <textarea name="keluhan" class="form-control"></textarea>
          <?= form_error('keluhan', '<div class="text-small text-danger">', '</div>') ?>
        </div>

          <button type="submit" class="btn btn-primary">Kirim</button>

      </form>
    </div>

  </div>




</div>