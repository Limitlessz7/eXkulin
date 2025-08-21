<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manajemen Pendaftaran Ekstrakurikuler</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<x-resource></x-cssjs>
<x-navbar></x-navbar>
<x-sidebar></x-sidebar>

<div class="container mt-4">
  <h3>Manajemen Pendaftaran Ekstrakurikuler</h3>

  <!-- Form Pencarian -->
  <form class="d-flex mb-3" method="GET" action="">
    <input class="form-control me-2" type="search" name="search" placeholder="Cari berdasarkan nama siswa atau ekskul..." style="width: 300px;">
    <button class="btn btn-outline-success" type="submit">Cari</button>
  </form>

  <!-- Alert Gagal Query -->
  <!-- <div class="alert alert-danger text-center">Query gagal: [pesan error]</div> -->

  <!-- Tabel Pendaftaran -->
  <table class="table table-bordered">
    <thead class="table-dark text-center">
      <tr>
        <th>ID Pendaftaran</th>
        <th>Nama Siswa</th>
        <th>Ekstrakurikuler</th>
        <th>Tanggal Daftar</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <!-- Contoh data pendaftaran -->
      <tr>
        <td>P001</td>
        <td>Aulia Rahma</td>
        <td>Basket</td>
        <td>2025-08-01</td>
        <td><span class="badge bg-success">Diterima</span></td>
        <td>
          <a href="edit-pendaftaran.php?id=P001" class="btn btn-warning btn-sm">Edit</a>
          <a href="hapus-pendaftaran.php?id=P001" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus pendaftaran ini?');">Hapus</a>
        </td>
      </tr>
      <tr>
        <td>P002</td>
        <td>Rizky Darmawan</td>
        <td>Paduan Suara</td>
        <td>2025-08-03</td>
        <td><span class="badge bg-danger">Ditolak</span></td>
        <td>
          <a href="edit-pendaftaran.php?id=P002" class="btn btn-warning btn-sm">Edit</a>
          <a href="hapus-pendaftaran.php?id=P002" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus pendaftaran ini?');">Hapus</a>
        </td>
      </tr>

      <!-- Jika tidak ada data -->
      <!--
      <tr>
        <td colspan="6">
          <div class="alert alert-warning text-center m-0">Data pendaftaran tidak ditemukan.</div>
        </td>
      </tr>
      -->
    </tbody>
  </table>

  <!-- Tombol Tambah -->
  <a href="tambah-pendaftaran.php" class="btn btn-primary">+ Tambah Pendaftaran</a>

  <x-footer></x-footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
