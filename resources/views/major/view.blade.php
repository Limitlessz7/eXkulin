<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Daftar Jurusan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

  <x-resource></x-resource>
  <x-navbar></x-navbar>
  <x-sidebar></x-sidebar>

  <div class="container mt-4">
    <h3>Daftar Jurusan</h3>

    <!-- Form Pencarian Jurusan -->
    <form class="d-flex mb-3" method="GET" action="">
      <input
        class="form-control me-2"
        type="search"
        name="search"
        placeholder="Cari jurusan berdasarkan nama atau kepala jurusan..."
        style="width: 300px;"
        value=""
      />
      <button class="btn btn-outline-success" type="submit">Cari</button>
    </form>

    <!-- Tabel Jurusan -->
    <table class="table table-bordered">
      <thead class="table-dark text-center">
        <tr>
  
          <th>Nama Jurusan</th>
          <th>Kepala Jurusan</th>
          <th>Jumlah Siswa</th>
          <th>Deskripsi</th>
         
        </tr>
      </thead>
      <tbody class="text-center">
        <!-- Contoh data jurusan -->
        <tr>
       
          <td>IPA</td>
          <td>Drs. Supriyadi</td>
          <td>120</td>
          <td>Jurusan Ilmu Pengetahuan Alam</td>
         
        </tr>
        <tr>
         
          <td>IPS</td>
          <td>Ibu Ratna Dewi</td>
          <td>100</td>
          <td>Jurusan Ilmu Pengetahuan Sosial</td>
         
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
    {{-- <a href="tambah-jurusan.php" class="btn btn-primary">+ Tambah Jurusan</a> --}}
  </div>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
   <x-footer></x-footer>
</body>
</html>
