<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Ekskul</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <x-resource></x-cssjs>
  <x-navbar></x-navbar>
  <x-sidebar></x-sidebar>

  <div class="card">
    <div class="card-body">
        <form action="/extracurriculars/manage-extracurricular" method="post">
          @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Ekskul</label>
            <input type="text" value="{{ old('ext_name') }}" name="ext_name" class="form-control @error('ext_name') is-invalid @enderror" id="name" placeholder="Nama Ekskul">
            @error('ext_name')
            <div id="validationServer03Feedback" class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi Ekskul</label>
           <textarea name="ext_description" class="form-control @error('ext_description') is-invalid @enderror" id="description" placeholder="Deskripsi..." cols="30" rows="10">{{ old('ext_description') }}</textarea>
            @error('ext_description')
            <div id="validationServer03Feedback" class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select  name="ext_status" class="form-control @error('ext_status') is-invalid @enderror" id="status">
            <option value="">--Pilih Status--</option>
            <option value="Aktif">Aktif</option>
            <option value="Nonaktif">Nonaktif</option>
          </select>
          @error('ext_name')
          <div id="validationServer03Feedback" class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
      </div>
        <div class="mb3">
        <button class="btn btn-primary" type="submit">Tambah</button>
      </div>  
      </form>
    </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
