<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h3 class="mt-2">Berikut data reservasi yang <strong>belum divalidasi</strong> dan diproses oleh tim Akademik</h3>
      <div class="table-responsive-sm">
        <table class="table table-striped">

          <thead class="table-primary">
            <tr>
              <th>No</th>
              <th>Nama Pemesan</th>
              <th>Jenis Kegiatan</th>
              <th>Judul Kegiatan</th>
              <th>Tanggal Kegiatan</th>
              <th>Jam Mulai</th>
              <th>Jam Selesai</th>
              <th>Link Reservasi</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php $i = 1; ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $data_res['idUser']; ?></td>
              <td><?= $data_res['jenis_kegiatan']; ?></td>
              <td><?= $data_res['judul_kegiatan']; ?></td>
              <td><?= $data_res['tanggal_kegiatan']; ?></td>
              <td><?= $data_res['jam_mulai']; ?></td>
              <td><?= $data_res['jam_selesai']; ?></td>
              <td><?= $data_res['link']; ?></td>
              <td><a href="/reservasi/<?= $data_res['slug'] ?>" class="btn btn-warning">Edit</a>
                <a href="/reservasi/<?= $data_res['slug'] ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          </tbody>

        </table>
        <br>
      </div>
      <br>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>