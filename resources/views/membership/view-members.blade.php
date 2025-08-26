<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Member Ekskul</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
  <x-resource></x-resource>
  <x-navbar></x-navbar>
  <x-sidebar></x-sidebar>

  <div class="container my-4">
    <h3>Daftar Member Ekskul</h3>

    <!-- Form Pencarian -->
    <form class="d-flex mb-3" method="GET" action="">
      <input
        class="form-control me-2"
        type="search"
        name="search"
        placeholder="Cari nama siswa atau ekskul..."
        style="width: 300px;"
        value=""
      />
      <button class="btn btn-outline-success" type="submit">Cari</button>
    </form>

    <!-- Tabel Member Ekskul -->
    <table class="table table-bordered text-center">
      <thead class="table-dark">
        <tr>
        
          <th>Nama Siswa</th>
          <th>Ekskul</th>
          <th>Jabatan</th>
          <th>Kelas</th>
          <th>Jurusan</th>
        
        </tr>
      </thead>
      <tbody>
        <!-- Contoh data member -->
        <tr>
         
          <td>Rizky Darmawan</td>
          <td>Rohis</td>
          <td>Ketua</td>
          <td>12A</td>
          <td>IPA</td>
          
        </tr>

        <!-- Jika tidak ada data -->
        <!--
        <tr>
          <td colspan="7" class="text-muted">Tidak ada data ditemukan.</td>
        </tr>
        -->
      </tbody>
    </table>
  </div>

  <x-footer></x-footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
