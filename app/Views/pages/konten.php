<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>
<header>
  <h1>Listing Reservasi Zoom Meeting Room FTP UB</h1>
</header>

<a href="form-tambah.php">Tambah Reservasi Baru</a>
<br>
<br>
<table border="1" pl-99 mt-5 mb-5 ml-5>
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Nomor HP</th>
      <th>Email</th>
      <th>Kegiatan</th>
      <th>Judul Kegiatan</th>
      <th>Tanggal</th>
      <th>Jam Mulai</th>
      <th>Jam Selesai</th>
      <th>Validasi</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>

    <button type="button" class="btn btn-danger">Bahaya</button>


  </tbody>
</table>

<p>Total data reservasi sebanyak data.</p>
<?= $this->endSection(); ?>