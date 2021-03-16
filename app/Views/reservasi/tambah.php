<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-2"><strong>Form penambahan data reservasi Zoom FTP UB</strong></h1>

      <!-- <div class="table-responsive-sm">
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
        </table>
      </div> -->

      <form action="/reservasi/save" method="post">
        <?= csrf_field(); ?>
        <div class="form-group row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" autofocus required>
          </div>
        </div>
        <div class="form-group row mb-3">
          <label for="jenis" class="col-sm-2 col-form-label">Jenis Kegiatan</label>
          <div class="col-sm-10">
            <select id="jenis" name="jenis" class="form-control">
              <option selected>Kuliah</option>
              <option>Ujian</option>
              <option>Seminar</option>
              <option>Lainnya</option>
            </select>
          </div>
        </div>
        <div class="form-group row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">Judul Kegiatan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Nama MK / Judul Kegiatan / Judul Skripsi, Thesis atau Disertasi" required>
          </div>
        </div>
        <div class="form-group row mb-3">
          <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
          <div class="col-sm-2">
            <input type="date" value="2021-03-01" class="form-control" id="tanggal" name="tanggal">
          </div>
          <div class="col-auto">
            <label for="" class="col-auto col-form-label">Format Bulan/Tanggal/Tahun</label>
          </div>
        </div>
    </div>
    <div class="form-group row mb-3">
      <label for="jam_mulai" class="col-sm-2 col-form-label">Jam Mulai</label>
      <div class="col-sm-2">
        <input type="time" min="06:00" max="20:00" value="06:00" required class="form-control" id="jam_mulai" name="jam_mulai">
      </div>
      <div class="col-auto">
        <label for="" class="col-auto col-form-label">Minimal 06:00 maksimal 20:00</label>
      </div>
    </div>
    <div class="form-group row mb-3">
      <label for="jam_selesai" class="col-sm-2 col-form-label">Jam Selesai</label>
      <div class="col-sm-2">
        <input type="time" min="06:30" max="21:00" value="06:30" required class="form-control" id="jam_selesai" name="jam_selesai">
      </div>
      <div class="col-auto">
        <label for="" class="col-auto col-form-label">Minimal 06:30 maksimal 21:00</label>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Tambah Data</button>
  </form>

</div>
</div>

<?= $this->endSection(); ?>