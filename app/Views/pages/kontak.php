<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Selamat datang di halaman Kontak Tim Akademik - Reservasi Zoom FTP UB</h1>
      <p>Kami siap melayani anda melalui email, telegram, atau form pada halaman ini, sesuaikan dengan bentuk permintaan anda</p>

      <button type=submit name='email'>Kirim Email</button>
      <button type=submit name='telegram'>Join Grup Telegram</button>
      <button type=submit name='form'>Kirim Melalui Form</button>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>