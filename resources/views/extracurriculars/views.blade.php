<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Manajemen Ekskul</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <style>
    /* Header tabel warna hitam gelap, tulisan putih */
    thead {
      background-color: #212529; /* Bootstrap dark */
      color: white;
    }
    /* Tombol action */
    .btn-edit {
      background-color: #ffc107; /* kuning */
      color: black;
      padding: 4px 12px;
      border-radius: 4px;
      border: none;
    }
    .btn-delete {
      background-color: #dc3545; /* merah */
      color: white;
      padding: 4px 12px;
      border-radius: 4px;
      border: none;
      margin-top: 4px;
      display: block;
    }
    /* Agar tombol delete di bawah edit */
    .action-buttons {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      gap: 4px;
    }
  </style>
</head>
<body>
  <x-resource></x-resource>
  <x-navbar></x-navbar> 
  <x-sidebar></x-sidebar>
  <div class="container my-4">
    <h3>Views Ekskul</h3>

    <form class="d-flex mb-3" role="search" style="max-width: 350px;">
      <input class="form-control me-2" type="search" placeholder="Cari eskul..." aria-label="Search" />
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

  

  <table class="table table-bordered">
  <thead class="table-dark">
    <tr>
      <th>ID Ekskul</th>
      <th>Nama ekskul</th>
      <th>Status</th>
      <th>Aksi</th> <!-- kolom baru -->
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>PSHT</td>
      <td>Aktif</td>
      <td>
        <button class="btn btn-info btn-sm mb-1" onclick="showDescription('Deskripsi PSHT: Pencak Silat Tradisional')">Info Deskripsi</button><br>
        <button class="btn btn-success btn-sm mb-1" onclick="showAnnouncement('Pengumuman PSHT: Latihan tiap Rabu pukul 16.00')">Info Pengumuman</button><br>
        <button class="btn btn-warning btn-sm" onclick="joinEskul('PSHT')">Gabung Eskul</button>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Basketball</td>
      <td>Tidak Aktif</td>
      <td>
        <button class="btn btn-info btn-sm mb-1" onclick="showDescription('Deskripsi Basketball: Tim bola basket sekolah')">Info Deskripsi</button><br>
        <button class="btn btn-success btn-sm mb-1" onclick="showAnnouncement('Pengumuman Basketball: Latihan Jumat pukul 15.00')">Info Pengumuman</button><br>
        <button class="btn btn-warning btn-sm" onclick="joinEskul('Basketball')">Gabung Eskul</button>
      </td>
    </tr>
  </tbody>
</table>


  </div>
<x-footer></x-footer>  
  <!-- Bootstrap JS Bundle (optional) -->
  <script>
    function showDescription(text) {
  alert('Deskripsi: ' + text);
}

function showAnnouncement(text) {
  alert('Pengumuman: ' + text);
}

function joinEskul(name) {
  if(confirm('Apakah kamu ingin bergabung dengan eskul ' + name + '?')) {
    alert('Kamu telah bergabung dengan ' + name);
  }
}

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
