
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manage ekskul</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<x-resource></x-cssjs>
<x-navbar></x-navbar>
<x-sidebar></x-sidebar>
<div class="container mt-4">
  <h3>Manajemen Ekskul</h3>

  <form class="d-flex mb-3" method="GET" action="">
    <input class="form-control me-2" type="search" name="search" placeholder="Cari buku..." value="" style="width: 300px;">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>

  @if (session('succes'))
  <div class="alert alert-primary alert-dismissible" role="alert">
    {{ session('succes') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>    
@endif

    {{-- <div class="alert alert-danger text-center">Query gagal: </div> --}}
    <a href="/extracurriculars/manage-extracurricular/create-extracurricular" class="btn btn-primary mb-3 mt-2">+ Tambah ekskul</a>
    <table class="table table-bordered">
      <thead class="table-dark text-center">
        <tr>
          <th>ID Ekskul</th>
          <th>Nama ekskul</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="text-center">
        @if ($extracurriculars->isEmpty())
        <tr><td colspan="7"><div class="alert alert-warning text-center m-0">Data ekskul tidak ditemukan.</div></td></tr>
        @else
        @foreach ($extracurriculars as $extracurricular)
            <tr>
              <td>{{ $extracurricular->ext_id }}</td>
              <td>{{ $extracurricular->ext_name }}</td>
              <td>{{ $extracurricular->ext_status }}</td>
              <td>
                <a href="" class="btn btn-warning btn-sm">Edit</a>
                <form action="/extracurriculars/manage-extracurricular/{{ $extracurricular->ext_id }}" method="POST" onsubmit=" return confirm('yakin ingin dihapus?')">
                  @csrf
                  @method('delete')
                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach         
          @endif
      </tbody>
    </table>
 

  <hr class="my-5">
  <h3>Manajemen Pengumuman</h3>

  <form class="d-flex mb-3" method="GET" action="">
    <input class="form-control me-2" type="search" name="search_penerbit" placeholder="Cari penerbit..." value="" style="width: 300px;">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>

  
    <div class="alert alert-danger text-center">Query penerbit gagal: </div>
 
    <table class="table table-bordered">
      <thead class="table-dark text-center">
        <tr>
          <th>ID</th>
          <th>Nama Eskul</th>
          <th>Title</th>
          <th>description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="text-center">
      
         
            <tr>
              <td></td>
              <td></td>
             <td></td>
              <td></td>
              <td>
                <a href="" class="btn btn-warning btn-sm">Edit</a>
                <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus pengumuman ini?')">Hapus</a>
              </td>
            </tr>
  
          <tr><td colspan="6"><div class="alert alert-warning text-center m-0">Data pengumuman tidak ditemukan.</div></td></tr>
      
      </tbody>
    </table>
    <a href="" class="btn btn-primary">+ Tambah Pengumuman</a>
    <x-footer></x-footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
 
</script>

</body>
</html>
