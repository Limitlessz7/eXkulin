<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShowExtracurriculars</title>
</head>
<body>
   <x-navbar></x-navbar>
    <x-sidebar></x-sidebar>
    <!DOCTYPE html>
<html>
<head>
  <title>Daftar Ekstrakurikuler</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 20px; }
    .eskul-item { border: 1px solid #ddd; padding: 15px; margin-bottom: 10px; border-radius: 5px; }
    .eskul-title { font-weight: bold; font-size: 18px; }
    .btn { padding: 6px 12px; margin-right: 8px; border: none; cursor: pointer; border-radius: 4px; }
    .btn-info { background-color: #007bff; color: white; }
    .btn-announcement { background-color: #28a745; color: white; }
    #modal, #modal-announcement {
        display: none; 
        position: fixed; 
        top: 50%; left: 50%; 
        transform: translate(-50%, -50%);
        background: white; 
        border-radius: 8px; 
        box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        padding: 20px; 
        max-width: 400px; 
        z-index: 1000;
    }
    #overlay {
        display: none;
        position: fixed; 
        top: 0; left: 0; 
        width: 100%; height: 100%;
        background: rgba(0,0,0,0.5); 
        z-index: 900;
    }
    .close-btn {
        background: #dc3545;
        color: white;
        border: none;
        padding: 5px 8px;
        cursor: pointer;
        float: right;
        border-radius: 4px;
    }
  </style>
</head>
<body>

<h1>Daftar Ekstrakurikuler</h1>

<div class="eskul-item">
  <div class="eskul-title">Basketball</div>
  <button class="btn btn-info" onclick="showDescription('Tim bola basket sekolah')">Info Deskripsi</button>
  <button class="btn btn-announcement" onclick="showAnnouncement('Latihan hari Senin pukul 4 sore')">Info Pengumuman</button>
</div>

<div class="eskul-item">
  <div class="eskul-title">Paduan Suara</div>
  <button class="btn btn-info" onclick="showDescription('Grup paduan suara sekolah')">Info Deskripsi</button>
  <button class="btn btn-announcement" onclick="showAnnouncement('Audisi terbuka minggu depan')">Info Pengumuman</button>
</div>

<div class="eskul-item">
  <div class="eskul-title">Pramuka</div>
  <button class="btn btn-info" onclick="showDescription('Ekstrakurikuler pramuka')">Info Deskripsi</button>
  <button class="btn btn-announcement" onclick="showAnnouncement('Kemah akhir pekan ini')">Info Pengumuman</button>
</div>

<!-- Modal Deskripsi -->
<div id="overlay" onclick="closeModal()"></div>
<div id="modal">
  <button class="close-btn" onclick="closeModal()">X</button>
  <h3>Deskripsi Ekstrakurikuler</h3>
  <p id="modal-content"></p>
</div>

<!-- Modal Pengumuman -->
<div id="modal-announcement">
  <button class="close-btn" onclick="closeAnnouncementModal()">X</button>
  <h3>Pengumuman Ekstrakurikuler</h3>
  <p id="modal-announcement-content"></p>
</div>

<script>
  function showDescription(text) {
    document.getElementById('modal-content').textContent = text;
    document.getElementById('modal').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
    // tutup modal pengumuman kalau kebuka
    document.getElementById('modal-announcement').style.display = 'none';
  }

  function closeModal() {
    document.getElementById('modal').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
  }

  function showAnnouncement(text) {
    document.getElementById('modal-announcement-content').textContent = text;
    document.getElementById('modal-announcement').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
    // tutup modal deskripsi kalau kebuka
    document.getElementById('modal').style.display = 'none';
  }

  function closeAnnouncementModal() {
    document.getElementById('modal-announcement').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
  }
</script>

</body>
</html>

</body>
</html>