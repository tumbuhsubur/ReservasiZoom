<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Selamat datang di halaman Beranda Reservasi Zoom FTP UB</h1>


      <div class="card" style="width: 50rem;">
        <div class="card-body">
          <h5 class="card-title">Diagram Alir</h5>
          <p class="card-text">Silahkan mencermati diagram alir Prosedur Permohonan Reservasi Zoom FTP UB terlebih dahulu sebelum menambahkan reservasi, diagram alirnya dapat di lihat menggunakan tombol berikut</p>
          <a href="#" class="btn btn-primary" name="diagram">Tampilkan diagram alir</a>
        </div>
      </div>
      <br>


      <h5>Berikut data reservasi yang telah divalidasi dan diproses oleh tim Akademik</h5>
      <div class="table-responsive-sm">
        <table class="table table-striped">

          <thead class="table-primary">
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
                <td><button>copy</button></td>
              </tr>
          </tbody>
        <?php endforeach; ?>

        </table>
        <br>
      </div>
      <br>

      <div class="card" style="width: 50rem;">
        <div class="card-body">
          <h5 class="card-title">Menambahkan Reservasi Baru</h5>
          <p class="card-text">Untuk menambahkan reservasi baru, silahkan gunakan tombol berikut</p>
          <a href="#" class="btn btn-primary" name="login">Login</a>
        </div>
      </div>
      <br>


      <div class="card" style="width: 50rem;">
        <div class="card-body">
          <h5 class="card-title">Melihat Reservasi Yang Belum Divalidasi</h5>
          <p class="card-text">Untuk melihat data reservasi yang masih belum divalidasi atau diproses, silahkan gunakan tombol berikut</p>
          <a href="#" class="btn btn-primary" name="cek_data">Cek Data</a>
        </div>
      </div>
      <br>


    </div>
  </div>
</div>
<?= $this->endSection(); ?>