<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid ps-md-0">
  <div class="row g-0">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
        
      </div>
      <div class="col-md-8 col-lg-6">
          <div class="login d-flex align-items-center py-5">
              <div class="container">
                  <div class="row">
                      <div class="col-md-9 col-lg-8 mx-auto">
                          <h3 class="login-heading mb-4">Welcome!</h3>
                          <form action="{{ route('signing') }}" method="POST">
                              @csrf 
                              <div class="form-floating mb-3">
                                  <input name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                  <label for="floatingInput">Email address</label>
                              </div>
                              <div class="form-floating mb-3">
                                  <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                  <label for="floatingPassword">Password</label>
                              </div>
                              <div class="d-grid">
                                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Sign in</button>
                              </div>
                              <a class="d-block text-center mt-2 small" href="{{ route('inscription') }}" >dont Have an account? inscrire</a>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</body>
</html>