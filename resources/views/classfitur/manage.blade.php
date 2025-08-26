<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manajemen Kelas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<x-resource></x-cssjs>
<x-navbar></x-navbar>
<x-sidebar></x-sidebar>

<div class="container mt-4">
  <h3>Manajemen Kelas</h3>

  <!-- Form Pencarian -->
  <form class="d-flex mb-3" method="GET" action="">
    <input class="form-control me-2" type="search" name="search" placeholder="Cari berdasarkan nama kelas atau jurusan..." style="width: 300px;">
    <button class="btn btn-outline-success" type="submit">Cari</button>
  </form>

  <!-- Alert Gagal Query -->
  <!-- <div class="alert alert-danger text-center">Query gagal: [pesan error]</div> -->

  <!-- Tabel Kelas & Jurusan -->
  <table class="table table-bordered">
    <thead class="table-dark text-center">
      <tr>
        <th>ID Kelas</th>
        <th>Nama Kelas</th>
        <th>Jurusan</th>
        <th>Wali Kelas</th>
        <th>Jumlah Siswa</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <!-- Contoh data kelas -->
      <tr>
        <td>1</td>
        <td>X DKV</td>
        <td>DESAIN KOMUNIKASI VISUAL</td>
        <td>Ibu Siti Aisyah</td>
        <td>32</td>
        <td>
          <a href="edit-kelas.php?id=KLS001" class="btn btn-warning btn-sm">Edit</a>
          <a href="hapus-kelas.php?id=KLS001" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data kelas ini?');">Hapus</a>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>X PPLG</td>
        <td>PENGEMBANGAN PERANGKAT LUNAK DAN GIM</td>
        <td>Pak Ahmad</td>
        <td>30</td>
        <td>
          <a href="edit-kelas.php?id=KLS002" class="btn btn-warning btn-sm">Edit</a>
          <a href="hapus-kelas.php?id=KLS002" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data kelas ini?');">Hapus</a>
        </td>
      </tr>

      <!-- Jika tidak ada data -->
      <!--
      <tr>
        <td colspan="6">
          <div class="alert alert-warning text-center m-0">Data kelas tidak ditemukan.</div>
        </td>
      </tr>
      -->
    </tbody>
  </table>

  <!-- Tombol Tambah -->
  <a href="tambah-kelas.php" class="btn btn-primary">+ Tambah Kelas</a>


</div>
  <x-footer></x-footer> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
