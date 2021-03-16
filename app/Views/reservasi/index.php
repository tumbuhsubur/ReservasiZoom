<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <a href="reservasi/tambah" class="btn btn-primary mt-2 btn-lg">Tambah Data Reservasi</a>
      <h3 class="my-2">Berikut data reservasi yang <strong>belum divalidasi</strong> dan diproses oleh tim Akademik</h3>
      <?php if (session()->getFlashdata('pesan')) :  ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>
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
            <?php foreach ($data_reservasi as $dr) : ?>
              <!-- ?php foreach ($data_user as $du) : ?> -->
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $dr['idUser']; ?></td>
                <td><?= $dr['jenis_kegiatan']; ?></td>
                <td><?= $dr['judul_kegiatan']; ?></td>
                <td><?= $dr['tanggal_kegiatan']; ?></td>
                <td><?= $dr['jam_mulai']; ?></td>
                <td><?= $dr['jam_selesai']; ?></td>
                <td><?= $dr['link']; ?></td>
                <td><a href="/reservasi/<?= $dr['slug'] ?>" class="btn btn-success">Detail</a></td>
              </tr>
          </tbody>
        <?php endforeach; ?>
        <!-- ?php endforeach; ?> -->

        </table>
        <br>
      </div>
      <br>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>