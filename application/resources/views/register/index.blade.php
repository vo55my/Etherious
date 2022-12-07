<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="css/register.css">
  <link rel="shortcut icon" href="img/favicon.png" type="image">
  <title>Register | Shinakamana</title>
</head>
<body class="text-center">
  <main class="form-signin w-100 m-auto">
    <form action="/register" method="post">
      @csrf
      <h2 class="mb-3">Shinakamana</h2>
      <h3 class="h3 mb-3 fw-normal text-center">Registration Form</h3>

      <div class="form-floating">
        <input type="text" name="name" class="form-control border-0 @error('name')is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}>
        <label for="name">Name</label>
        @error('name')
          <div class="invalid-feedback">
            {{ message }}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="text" name="username" class="form-control border-0 @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}>
        <label for="username">Username</label>
        @error('username')
          <div class="invalid-feedback">
            {{ message }}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control border-0 @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}>
        <label for="email">Email address</label>
        @error('email')
          <div class="invalid-feedback">
            {{ message }}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control border-0 @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
        <label for="password">Password</label>
        @error('name')
          <div class="invalid-feedback">
            {{ message }}
          </div>
        @enderror
      </div>

      <div class="checkbox mb-3">
      </div>
      <button class="w-100 btn btn-lg" type="submit">Register</button>
    </form>
  </main>
</body>
</html>
