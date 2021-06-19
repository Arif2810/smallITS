<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
  </div>

  <div class="alert alert-success font-weight-bold mb-4" style="width:65%;">
    Selamat datang, Anda login sebagai civitas akademika
  </div>

  <div class="card" style="margin-bottom: 120px; width: 65%;">
    <div class="card-header font-weight-bold bg-primary text-white">
      Data Civitas Akademika
    </div>

    <?php foreach($pegawai as $p): ?>
    <div class="card-body">
      <div class="row">
        <div class="col-md-5">
          <img style="width: 230px;" src="<?= base_url('assets/photo/'.$p->photo); ?>" alt="">
        </div>
        <div class="col-md-7">
          <table class="table">
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><?= $p->nama_pegawai; ?></td>
            </tr>
            <tr>
              <td>NRP</td>
              <td>:</td>
              <td><?= $p->nik; ?></td>
            </tr>
            <tr>
              <td>Tanggal Masuk</td>
              <td>:</td>
              <td><?= $p->tanggal_masuk; ?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:</td>
              <td><?= $p->email; ?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>




</div>