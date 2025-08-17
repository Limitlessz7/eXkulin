<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? 'Login Swift Serve' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body, html {
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .left-side {
            background-color: #3144a1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .right-side {
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        /* Sudut melengkung */
        .right-side::before {
            content: "";
            position: absolute;
            top: 0;
            left: -40px;
            width: 80px;
            height: 80px;
            background-color: white;
            border-top-left-radius: 40px;
        }
        .right-side::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: -40px;
            width: 80px;
            height: 80px;
            background-color: white;
            border-bottom-left-radius: 40px;
        }

        .login-box {
            width: 100%;
            max-width: 300px;
        }

        .login-box h3 {
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .form-control {
            border-radius: 8px;
        }

        .input-group-text {
            background: transparent;
            border: none;
        }

        .btn-login {
            background-color: #0cb9ff;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .btn-login:hover {
            background-color: #009fdb;
        }
    </style>
</head>
<body>
    <div class="container-fluid h-100 p-0">
        <div class="row g-0 h-100">
            <!-- Left side -->
            <div class="col-6 left-side">
                <img src="{{ asset('logo.png') }}" alt="Swift Serve Logo" style="max-width: 150px;">
            </div>

            <!-- Right side -->
            <div class="col-6 right-side">
             <form class="login-box" method="POST" action="{{ route('login.post') }}">
    @csrf
    <h3>SIGN IN</h3>

    <!-- Email -->
    <div class="input-group mb-3">
        <input type="email" name="email" 
            class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email') }}"
            placeholder="EMAIL" required id="email" autofocus
            style="padding-right: 40px;">

        <span class="input-group-text" style="margin-left: -35px; background: transparent; border: none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" 
                fill="currentColor" viewBox="0 0 16 16">
                <path d="M15.964 0.686a.5.5 0 0 1 .11.638l-15 15a.5.5 0 0 1-.848-.456l1.573-5.058L10.854 1.146a.5.5 0 0 1 4.11-.46z"/>
            </svg>
        </span>

        @error('email')
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Password -->
    <div class="input-group mb-3">
        <input type="password" name="password" 
            class="form-control @error('password') is-invalid @enderror"
            placeholder="PASSWORD" required id="password"
            style="padding-right: 40px;">

        <span class="input-group-text" style="margin-left: -35px; background: transparent; border: none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" 
                fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 1a3 3 0 0 0-3 3v3H4a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1h-1V4a3 3 0 0 0-3-3z"/>
            </svg>
        </span>

        @error('password')
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Button -->
    <button type="submit" class="btn btn-login w-100">LOGIN</button>
</form>
            