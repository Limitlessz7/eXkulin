<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manajemen Akun</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <x-resource></x-cssjs>
  <x-navbar></x-navbar>
  <x-sidebar></x-sidebar>

  <div class="card">
    <div class="card-body">
        <form action="/accounts/manage-account/" method="POST">
          @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" value="{{ old('usr_name') }}" name="usr_name" class="form-control @error('usr_name') is-invalid @enderror" id="name" placeholder="Nama">
            @error('usr_name')
            <div id="validationServer03Feedback" class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">No. Telephone</label>
            <input type="text" value="{{ old('usr_telephone') }}" name="usr_telephone" class="form-control @error('usr_telephone') is-invalid @enderror" id="telephone" placeholder="Nomor Telepon">
            @error('usr_telephone')
            <div id="validationServer03Feedback" class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" value="{{ old('usr_email') }}" name="usr_email" class="form-control @error('usr_email') is-invalid @enderror" id="email" placeholder="example@email.com">
            @error('usr_email')
            <div id="validationServer03Feedback" class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="text" name="usr_password" class="form-control @error('usr_password') is-invalid @enderror" id="password" placeholder="***">
            @error('usr_password')
            <div id="validationServer03Feedback" class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        <div class="mb-3">
            <label for="role" class="form-label ">Role</label>
            <select name="usr_roles_id" id="role" class="form-select @error('usr_role') is-invalid @enderror">
            <option value="">--Pilih Role--</option>
            @foreach ($roles as $role)
            <option value="{{ $role->rl_id }}">{{ $role->rl_name }}</option>
            @endforeach
          </select>
          @error('usr_role')
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
