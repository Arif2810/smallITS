<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
  </div>

  <table class="table table-striped table-bordered">
    <tr>
      <th class="text-center">No</th>
      <th class="text-center">Subject</th>
      <th class="text-center">Keluhan</th>
      <th class="text-center">Action</th>
    </tr>

    <?php $no = 1;
    foreach($keluhan as $k): ?>
    <tr>
      <td width="20px"><?= $no++; ?></td>
      <td><?= $k->subject; ?></td>
      <td><?= substr($k->isi_keluhan, 0, 20)."..."; ?></td>
      <td>
        <center>
          <a class="btn btn-sm btn-primary" href="#"><i class="fas fa-eye"></i></a>
          <a onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
        </center>
      </td>
    </tr>
    <?php endforeach; ?>
 
  </table>

</div>