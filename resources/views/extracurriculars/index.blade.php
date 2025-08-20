
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mnage ekskul</title>
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


    <div class="alert alert-danger text-center">Query gagal: </div>

    <table class="table table-bordered">
      <thead class="table-dark text-center">
        <tr>
          <th>ID Buku</th>
          <th>Kategori</th>
          <th>Nama Buku</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Penerbit</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="text-center">
        
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <a href="" class="btn btn-warning btn-sm">Edit</a>
                <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus buku ini?');">Hapus</a>
              </td>
            </tr>
         
          <tr><td colspan="7"><div class="alert alert-warning text-center m-0">Data buku tidak ditemukan.</div></td></tr>
     
      </tbody>
    </table>
    <a href="add-buku.php" class="btn btn-primary">+ Tambah Buku</a>
 

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
          <th>Nama</th>
          <th>Status</th>
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
                <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus penerbit ini?')">Hapus</a>
              </td>
            </tr>
  
          <tr><td colspan="6"><div class="alert alert-warning text-center m-0">Data penerbit tidak ditemukan.</div></td></tr>
      
      </tbody>
    </table>
    <a href="" class="btn btn-primary">+ Tambah Penerbit</a>
 >
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
 
</script>

</body>
</html>
