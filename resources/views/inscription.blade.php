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
<body>
  <div class="container">
      <div class="row">
          <div class="col-lg-10 col-xl-9 mx-auto">
              <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                  <div class="card-img-left d-none d-md-flex">

                  </div>
                  <div class="card-body p-4 p-sm-5">
                      <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
                      <form action="{{ route('signup') }}" method="POST">
                          @csrf

                          <div class="form-floating mb-3">
                              <input name="firstName" class="form-control" id="floatingInputFirtname" placeholder="firstname" required autofocus>
                              @error('firstName')
                              <div class="text-danger"></div>
                                  {{$message}}
                              @enderror
                              <label for="floatingInputUsername">first name</label>
                          </div>
                          <div class="form-floating mb-3">
                              <input name="lastName" class="form-control" id="floatingInputLastname" placeholder="lastname" required autofocus>
                              @error('lastName')
                              <div class="text-danger"></div>
                                  {{$message}}
                              @enderror
                              <label for="floatingInputUsername">last name</label>
                          </div>

                          <div class="form-floating mb-3">
                              <input name="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                              <label for="floatingInputEmail">Email address</label>
                          </div>

                          <hr>

                          <div class="form-floating mb-3">
                              <input name="password" class="form-control" type="password" id="floatingPassword" placeholder="Password">
                              <label for="floatingPassword">Password</label>
                          </div>

                          <div class="form-floating mb-3">
                              <input name="password_confirmation" class="form-control" type="password" id="floatingPasswordConfirm" placeholder="Confirm Password">
                              <label for="floatingPasswordConfirm">Confirm Password</label>
                          </div>

                          <div class="d-grid mb-2">
                              <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
                          </div>

                          <a class="d-block text-center mt-2 small" href="{{ route('connexion') }}">Have an account? connexion</a>

                          <hr class="my-4">
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>
</html>

