<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manajemen Role</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<x-resource></x-cssjs>
<x-navbar></x-navbar>
<x-sidebar></x-sidebar>

<div class="container mt-4">
  <h3>Manajemen Role</h3>

  <!-- Form Pencarian -->
  <form class="d-flex mb-3" method="GET" action="">
    <input class="form-control me-2" type="search" name="search" placeholder="Cari role berdasarkan nama atau ID..." value="" style="width: 300px;">
    <button class="btn btn-outline-success" type="submit">Cari</button>
  </form>

  <!-- Alert Gagal (jika ada) -->
  <!-- <div class="alert alert-danger text-center">Query gagal: [pesan error]</div> -->

  <table class="table table-bordered">
    <thead class="table-dark text-center">
      <tr>
        <th>ID</th>
        <th>Nama Role</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <!-- Contoh data -->
      <tr>
        <td>R001</td>
        <td>Admin</td>
        <td>Memiliki akses penuh ke sistem</td>
        <td>
          <a href="edit-role.php?id=R001" class="btn btn-warning btn-sm">Edit</a>
          <a href="hapus-role.php?id=R001" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus role ini?');">Hapus</a>
        </td>
      </tr>
      <tr>
        <td>R002</td>
        <td>Siswa</td>
        <td>Akses terbatas, hanya melihat data</td>
        <td>
          <a href="edit-role.php?id=R002" class="btn btn-warning btn-sm">Edit</a>
          <a href="hapus-role.php?id=R002" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus role ini?');">Hapus</a>
        </td>
      </tr>

      <!-- Jika data kosong -->
      <!--
      <tr>
        <td colspan="4">
          <div class="alert alert-warning text-center m-0">Data role tidak ditemukan.</div>
        </td>
      </tr>
      -->
    </tbody>
  </table>

  <a href="tambah-role.php" class="btn btn-primary">+ Tambah Role</a>

  <x-footer></x-footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
