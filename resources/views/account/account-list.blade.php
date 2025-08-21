<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User-Account List</title>
  <style>
    select, input[type="text"] {
      padding: 8px 12px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 6px;
      background-color: #fff;
      color: #333;
      transition: border-color 0.3s, box-shadow 0.3s;
      outline: none;
      margin-right: 10px;
    }

    select:focus, input[type="text"]:focus {
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.4);
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
      text-align: center;
    }

    .filter-container {
      margin-bottom: 15px;
    }

    .filter-container label {
      font-weight: bold;
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <x-resource></x-resource>
  <x-navbar></x-navbar>
  <x-sidebar></x-sidebar>

  <div class="container">
    <h2>Daftar Akun User</h2>

    <div class="filter-container">
      <label for="roleFilter">Role:</label>
      <select id="roleFilter" onchange="filterTable()">
        <option value="all">Semua</option>
        <option value="admin">Admin</option>
        <option value="siswa">Siswa</option>
        <option value="guru">Guru</option>
      </select>

      <label for="searchInput">Cari ID/Nama:</label>
      <input type="text" id="searchInput" placeholder="Misal: U001, Budi" onkeyup="filterTable()" />
    </div>

    <table id="userTable">
      <thead>
        <tr>
          <th>ID User</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Role</th>
          <th>Telephone</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $user->usr_id }}</td>
          <td>{{ $user->usr_name }}</td>
          <td>{{ $user->usr_email }}</td>
          <td>{{ $user->usr_roles_id }}</td>
          <td>{{ $user->usr_telephone }}</td>
          <td>{{ $user->usr_activation }}</td>
          <td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div id="notFoundAlert" class="alert" style="display:none;">
      Tidak ada data ditemukan.
    </div>
  </div>

  <script>
    function filterTable() {
      const roleFilter = document.getElementById("roleFilter").value.toLowerCase();
      const searchValue = document.getElementById("searchInput").value.toLowerCase().trim();
      const table = document.getElementById("userTable");
      const rows = table.getElementsByTagName("tbody")[0].getElementsByTagName("tr");
      let found = false;

      for (let i = 0; i < rows.length; i++) {
        const idUser = rows[i].getElementsByTagName("td")[0].textContent.toLowerCase();
        const nama = rows[i].getElementsByTagName("td")[1].textContent.toLowerCase();
        const role = rows[i].getElementsByTagName("td")[3].textContent.toLowerCase();

        const matchRole = (roleFilter === "all" || role === roleFilter);
        const matchSearch = (idUser.includes(searchValue) || nama.includes(searchValue));

        if (matchRole && matchSearch) {
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
