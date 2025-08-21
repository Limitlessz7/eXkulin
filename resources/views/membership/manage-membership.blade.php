<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Manajemen Ekskul</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<x-resource></x-resource>
<x-navbar></x-navbar>
<x-sidebar></x-sidebar>

<div class="container mt-4">
  <!-- ============================== -->
  <!-- 🔹 TABEL 1: Manajemen Anggota -->
  <!-- ============================== -->
  <h3>Manajemen Anggota Ekskul</h3>

  <form class="d-flex mb-3" method="GET" action="">
    <input class="form-control me-2" type="search" name="search_anggota" placeholder="Cari nama siswa..." style="width: 300px;">
    <button class="btn btn-outline-success" type="submit">Cari</button>
  </form>

  <table class="table table-bordered">
    <thead class="table-dark text-center">
      <tr>
        <th>ID</th>
        <th>Nama Siswa</th>
        <th>Ekskul</th>
        <th>Status</th>
        <th>Tanggal Gabung</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <!-- Contoh data -->
      <tr>
        <td>AG001</td>
        <td>Rizky Darmawan</td>
        <td>Rohis</td>
        <td><span class="badge bg-success">Aktif</span></td>
        <td>2025-07-15</td>
        <td>
          <a href="hapus-anggota.php?id=AG001" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin mengeluarkan anggota ini dari ekskul?');">Kick</a>
        </td>
      </tr>
    </tbody>
  </table>

  <hr class="my-5">

  <!-- ============================== -->
  <!-- 🔹 TABEL 2: Manajemen Wewenang -->
  <!-- ============================== -->
  <h3>Manajemen Wewenang / Jabatan Anggota</h3>

  <form class="d-flex mb-3" method="GET" action="">
    <input class="form-control me-2" type="search" name="search_jabatan" placeholder="Cari nama siswa atau ekskul..." style="width: 300px;">
    <button class="btn btn-outline-primary" type="submit">Cari</button>
  </form>

  <table class="table table-bordered">
    <thead class="table-dark text-center">
      <tr>
        <th>ID</th>
        <th>Nama Siswa</th>
        <th>Ekskul</th>
        <th>Jabatan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <!-- Contoh data -->
      <tr>
        <td>JW001</td>
        <td>Rizky Darmawan</td>
        <td>Rohis</td>
        <td>Ketua</td>
        <td>
          <a href="ubah-jabatan.php?id=JW001" class="btn btn-warning btn-sm">Ubah Jabatan</a>
          <a href="hapus-jabatan.php?id=JW001" class="btn btn-danger btn-sm" onclick="return confirm('Hapus jabatan dari anggota ini?');">Hapus</a>
        </td>
      </tr>
    </tbody>
  </table>

  <a href="tambah-jabatan.php" class="btn btn-primary">+ Tambah Jabatan</a>

  <x-footer></x-footer>
</div>

<script src="h  ttps://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
