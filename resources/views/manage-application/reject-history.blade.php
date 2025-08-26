<!DOCTYPE html>
<html lang="id">
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
    <h2 class="mb-3">Daftar User yang Tertolak Ekstrakurikuler</h2>

    <!-- 🔽 Filter Dropdown -->
    <div class="filter-container">
      <label for="eskulFilter">Filter berdasarkan Ekstrakurikuler:</label>
      <select id="eskulFilter" onchange="filterTable()">
        <option value="all">Semua</option>
        <option value="basketball">Basketball</option>
      </select>
    </div>

    <table id="rejectedTable" class="table table-bordered table-striped text-center">
      <thead>
        <tr>
          <th>ID User</th>
          <th>Nama Lengkap</th>
          <th>Ekstrakurikuler</th>
          <th>Alasan Penolakan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Rizky Darmawan</td>
          <td>Basketball</td>
          <td>Tidak lolos seleksi fisik</td>
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
