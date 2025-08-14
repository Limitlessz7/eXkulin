<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Swift Serve</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body, html {
      height: 100vh;
      margin: 0;
      background: #000;
    }
    .left-side {
      background-color: #3144a1;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }
    .right-side {
      background-color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }
    .login-box {
      border: 2px solid #3191ff;
      padding: 20px;
      border-radius: 8px;
      width: 100%;
      max-width: 300px;
    }
    .input-group-text {
      background: transparent;
      border-left: none;
      cursor: default;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #3191ff;
    }
    button.btn-login {
      background: #0cb9ff;
      border: none;
      border-radius: 15px;
      font-weight: 700;
    }
    button.btn-login:hover {
      background: #0a8fd8;
    }
    /* icon style */
    .input-group .input-group-text svg {
      fill: #555;
    }
  </style>
</head>
<body>
  <div class="container-fluid h-100 d-flex p-0">
    <div class="col-6 left-side d-flex flex-column justify-content-center align-items-center">
      <!-- Ganti src dengan logo asli -->
      <img src="logo.png" alt="Swift Serve Logo" style="width:60px; height:auto;" />
      <span class="mt-3 fw-bold fs-4">Swift Serve</span>
    </div>
    <div class="col-6 right-side d-flex justify-content-center align-items-center">
      <form class="login-box">
        <h3 class="text-center fw-bold mb-4">SIGN IN</h3>

        <div class="mb-3 input-group">
          <input type="email" class="form-control" placeholder="EMAIL" required />
          <span class="input-group-text border-start-0">
            <!-- contoh icon paper plane SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
              <path d="M15.964 0.686a.5.5 0 0 1 .11.638l-15 15a.5.5 0 0 1-.848-.456l1.573-5.058L10.854 1.146a.5.5 0 0 1 4.11-.46z"/>
            </svg>
          </span>
        </div>

        <div class="mb-3 input-group">
          <input type="password" class="form-control" placeholder="PASSWORD" required />
          <span class="input-group-text border-start-0">
            <!-- icon lock SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
              <path d="M8 1a3 3 0 0 0-3 3v3H4a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1h-1V4a3 3 0 0 0-3-3z"/>
            </svg>
          </span>
        </div>

        <button type="submit" class="btn btn-login w-100 py-2">LOGIN</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS (optional, kalau mau interaktif) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
