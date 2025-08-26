<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manajemen Jurusan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<x-resource></x-cssjs>
<x-navbar></x-navbar>
<x-sidebar></x-sidebar>

<div class="container mt-4">
  <h3>Manajemen Jurusan</h3>

  <!-- Form Pencarian -->
  <form class="d-flex mb-3" method="GET" action="">
    <input class="form-control me-2" type="search" name="search" placeholder="Cari jurusan berdasarkan nama atau kepala jurusan..." style="width: 300px;">
    <button class="btn btn-outline-success" type="submit">Cari</button>
  </form>

  <!-- Alert Gagal Query -->
  <!-- <div class="alert alert-danger text-center">Query gagal: [pesan error]</div> -->

  <!-- Tabel Jurusan -->
  <table class="table table-bordered">
    <thead class="table-dark text-center">
      <tr>
        <th>ID Jurusan</th>
        <th>Nama Jurusan</th>
        <th>Kepala Jurusan</th>
        <th>Jumlah Siswa</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <!-- Contoh data jurusan -->
      <tr>
        <td>1</td>
        <td>IPA</td>
        <td>Drs. Supriyadi</td>
        <td>120</td>
        <td>Jurusan Ilmu Pengetahuan Alam</td>
        <td>
          <a href="edit-jurusan.php?id=JRS001" class="btn btn-warning btn-sm">Edit</a>
          <a href="hapus-jurusan.php?id=JRS001" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus jurusan ini?');">Hapus</a>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>IPS</td>
        <td>Ibu Ratna Dewi</td>
        <td>100</td>
        <td>Jurusan Ilmu Pengetahuan Sosial</td>
        <td>
          <a href="edit-jurusan.php?id=JRS002" class="btn btn-warning btn-sm">Edit</a>
          <a href="hapus-jurusan.php?id=JRS002" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus jurusan ini?');">Hapus</a>
        </td>
      </tr>

      <!-- Jika tidak ada data -->
      <!--
      <tr>
        <td colspan="6">
          <div class="alert alert-warning text-center m-0">Data jurusan tidak ditemukan.</div>
        </td>
      </tr>
      -->
    </tbody>
  </table>

  <!-- Tombol Tambah -->
  <a href="tambah-jurusan.php" class="btn btn-primary">+ Tambah Jurusan</a>

 
</div>
 <x-footer></x-footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
