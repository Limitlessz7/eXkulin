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
  <a href="tambah-role.php" class="btn btn-primary mb-3 mt-2">+ Tambah Role</a>

  <table class="table table-bordered">
    <thead class="table-dark text-center">
      <tr>
        <th>Nama Role</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <!-- Contoh data -->
      @foreach ($roles as $role)
      <tr>
        <td>{{ $role->rl_name }}</td>
        <td>{{ $role->rl_description }}</td>
        <td>
          <a href="accounts/manage-role/{{ $role->rl_id }}/edit" class="btn btn-warning btn-sm">Edit</a>
          <form action="/accounts/manage-role/{{ $role->rl_id }}" method="POST" onsubmit=" return confirm('yakin ingin dihapus?')">
            @csrf
            @method('delete')
          <button class="btn btn-danger btn-sm" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
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
    </div>
  <x-footer></x-footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
