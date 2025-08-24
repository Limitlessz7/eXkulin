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

    <div class="card-body">
      
      @if (session('succes'))
        <div class="alert alert-primary alert-dismissible" role="alert">
          {{ session('succes') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

    </div>
    <a href="/accounts/manage-account/create-account" class="btn btn-primary mb-3 mt-2">+ Tambah Akun</a>

    <table class="table table-bordered">
      <thead class="table-dark text-center">
        <tr>
          <th>Nama Lengkap</th>
          <th>Email</th>
          <th>Role</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="text-center">
        @foreach ($users as $user)
        <!-- Contoh baris data akun -->
        <tr>
          <td>{{ $user->usr_name }}</td>
          <td>{{ $user->usr_email }}</td>
          <td>{{ $user->usr_roles_id }}</td>
          <td>{{ $user->usr_activation }}</td>
          <td>
            <a href="/accounts/manage-account/{{ $user->usr_id }}/edit" class="btn btn-warning btn-sm">Edit</a>
            <form action="/accounts/manage-account/{{ $user->usr_id }}" method="POST" onsubmit=" return confirm('yakin ingin dihapus?')">
              @csrf
              @method('delete')
            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
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
    </div>
    <x-footer></x-footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
