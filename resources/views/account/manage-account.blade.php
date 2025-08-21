<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manajemen Akun</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <x-resource></x-cssjs>
  <x-navbar></x-navbar>
  <x-sidebar></x-sidebar>

  <div class="container mt-4">
    <h3>Manajemen Akun</h3>

    <!-- Form Pencarian -->
    <form class="d-flex mb-3" method="GET" action="">
      <input class="form-control me-2" type="search" name="search" placeholder="Cari akun berdasarkan ID atau Nama..." value="" style="width: 300px;">
      <button class="btn btn-outline-success" type="submit">Cari</button>
    </form>

    <!-- Contoh alert jika query gagal -->
    <!-- <div class="alert alert-danger text-center">Query gagal: [pesan error]</div> -->

    <table class="table table-bordered">
      <thead class="table-dark text-center">
        <tr>
          <th>ID</th>
          <th>Nama Lengkap</th>
          <th>Email</th>
          <th>Role</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <!-- Contoh baris data akun -->
        <tr>
          <td>U001</td>
          <td>Ahmad Zaki</td>
          <td>zaki@email.com</td>
          <td>Admin</td>
          <td>Aktif</td>
          <td>
            <a href="edit-akun.php?id=U001" class="btn btn-warning btn-sm">Edit</a>
            <a href="hapus-akun.php?id=U001" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus akun ini?');">Hapus</a>
          </td>
        </tr>
        <tr>
          <td>U002</td>
          <td>Siti Aminah</td>
          <td>siti@email.com</td>
          <td>Siswa</td>
          <td>Nonaktif</td>
          <td>
            <a href="edit-akun.php?id=U002" class="btn btn-warning btn-sm">Edit</a>
            <a href="hapus-akun.php?id=U002" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus akun ini?');">Hapus</a>
          </td>
        </tr>

        <!-- Jika tidak ada data -->
        <!--
        <tr>
          <td colspan="6">
            <div class="alert alert-warning text-center m-0">Data akun tidak ditemukan.</div>
          </td>
        </tr>
        -->
      </tbody>
    </table>

    <a href="tambah-akun.php" class="btn btn-primary">+ Tambah Akun</a>

    <x-footer></x-footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
