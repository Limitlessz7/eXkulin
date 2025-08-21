<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Tertolak - Ekstrakurikuler</title>
  <style>
    select {
  padding: 8px 12px;
  font-size: 14px;
  border: 1px solid #ccc;
  border-radius: 6px;
  background-color: #fff;
  color: #333;
  transition: border-color 0.3s, box-shadow 0.3s;
  outline: none;
  cursor: pointer;
}

select:focus {
  border-color: #007bff;
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.4);
}

.filter-container label {
  font-weight: bold;
  margin-right: 8px;
}

    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
    }

    th {
      background-color: #f2f2f2;
    }

    .alert {
      padding: 10px;
      margin-top: 15px;
      border: 1px solid #ffc107;
      background-color: #fff3cd;
      color: #856404;
      border-radius: 4px;
    }

    .filter-container {
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <x-resource></x-resource>
  <x-navbar></x-navbar>
  <x-sidebar></x-sidebar>

  <div class="container">
    <h2 class="mb-3">Daftar User yang diterima masuk Ekstrakurikuler</h2>

    <!-- 🔽 Filter Dropdown -->
    <div class="filter-container">
      <label for="eskulFilter">Filter berdasarkan Ekstrakurikuler:</label>
      <select id="eskulFilter" onchange="filterTable()">
        <option value="all">Semua</option>
        <option value="Basketball">Basketball</option>
        <option value="Paduan Suara">Paduan Suara</option>
        <option value="Pramuka">Pramuka</option>
      </select>
    </div>

    <table id="rejectedTable">
      <thead>
        <tr>
          <th>ID User</th>
          <th>Nama Lengkap</th>
          <th>Ekstrakurikuler</th>
          <th>Alasan Penerimaan</th>
        </tr>
      </thead>
      <tbody>
        <!-- Contoh data user tertolak -->
        <tr>
          <td>U001</td>
          <td>Rina Putri</td>
          <td>Basketball</td>
          <td>Tidak lolos seleksi fisik</td>
        </tr>
        <tr>
          <td>U002</td>
          <td>Ahmad Rizal</td>
          <td>Pramuka</td>
          <td>Kuota penuh</td>
        </tr>
        <tr>
          <td>U003</td>
          <td>Silvia Hartati</td>
          <td>Paduan Suara</td>
          <td>Tidak hadir saat audisi</td>
        </tr>
        <tr>
          <td>U004</td>
          <td>Budi Santoso</td>
          <td>Basketball</td>
          <td>Tidak memenuhi tinggi badan minimum</td>
        </tr>
      </tbody>
    </table>

    <!-- Alert Data Tidak Ditemukan -->
    <div id="notFoundAlert" class="alert text-center" style="display:none;">
      Tidak ada data ditemukan.
    </div>
  </div>

  <script>
    function filterTable() {
      const filter = document.getElementById("eskulFilter").value.toLowerCase();
      const table = document.getElementById("rejectedTable");
      const rows = table.getElementsByTagName("tbody")[0].getElementsByTagName("tr");
      let found = false;

      for (let i = 0; i < rows.length; i++) {
        const eskulCell = rows[i].getElementsByTagName("td")[2];
        const eskul = eskulCell.textContent.toLowerCase();

        if (filter === "all" || eskul === filter) {
          rows[i].style.display = "";
          found = true;
        } else {
          rows[i].style.display = "none";
        }
      }

      document.getElementById("notFoundAlert").style.display = found ? "none" : "block";
    }
  </script>

  <x-footer></x-footer>
</body>
</html>
