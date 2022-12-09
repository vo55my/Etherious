{{-- @extends(layout.main) --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
  <link rel="shortcut icon" href="img/favicon.png" type="image">
  <title>Login | Shinakamana</title>
</head>
<body class="text-center">
  <main class="form-signin w-100 m-auto">
      <h2 class="mb-3 display-4">Shinakamana</h2>
      <h3 class="h3 mb-3 fw-normal text-center">Login</h3>
        <form method="post" action="/login">
            @csrf
      <div class="form-floating">
        <input type="email" name="email" class="form-control border-0" id="email" placeholder="email">
        <label for="email">Email</label>
        {{-- @error('email')
          <div class="invalid-feedback">
            {{ message }}
          </div>
        @enderror --}}
      </div>
      <div class="form-floating">
        <input type="password" class="form-control border-0" id="password" placeholder="Password">
        <label for="password">Password</label>
        {{-- @error('password')
          <div class="invalid-feedback">
            {{ message }}
          </div>
        @enderror --}}
      </div>

      <div class="checkbox mb-3">
        <label class="remember">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg" type="submit"><a href="/register"></a> Login</button>
      <p class="mt-3">Not Registered? <a href="/register" class="text-decoration-none">Register Now!</a></p>
    </form>
  </main>
</body>
</html>
