<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manage Extracurricular</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <x-navbar></x-navbar>
    <x-sidebar></x-sidebar>

    <div class="container mt-5">
        <h1>MANAGE ESKUL (Extracurricular)</h1>

        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>Nama Eskul</th>
                    <th>Status</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Basketball Club</td>
                    <td>Active</td>
                    <td>Klub basket untuk siswa yang suka olahraga</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="/eskul/1/edit">✏️ Edit</a></li>
                                <li><a class="dropdown-item" href="/eskul/create">➕ Tambah Eskul</a></li>
                                <li>
                                    <form action="/eskul/1" method="POST" onsubmit="return confirm('Yakin hapus eskul ini?');" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item text-danger">❌ Hapus</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Music Band</td>
                    <td>Inactive</td>
                    <td>Kelompok musik sekolah</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item" href="/eskul/2/edit">✏️ Edit</a></li>
                                <li><a class="dropdown-item" href="/eskul/create">➕ Tambah Eskul</a></li>
                                <li>
                                    <form action="/eskul/2" method="POST" onsubmit="return confirm('Yakin hapus eskul ini?');" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item text-danger">❌ Hapus</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <!-- Tambah baris eskul lainnya jika perlu -->
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script>
    // Script untuk mengaktifkan dropdown
    document.addEventListener('DOMContentLoaded', function () {
        var dropdowns = document.querySelectorAll('.dropdown-toggle');
        dropdowns.forEach(function (dropdown) {
            dropdown.addEventListener('click', function () {
                this.classList.toggle('show');
            });
        });
    });