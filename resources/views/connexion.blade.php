{{-- <html lang="en">
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
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/htmx.org@1.9.10"
        integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous">
    </script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Youconnect</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</head>

<body>

    <div class="font-[sans-serif] text-[#333] w-3/4 mx-auto p-12 h-3/4">
        <div class="mt-12 grid md:grid-cols-2 items-center gap-8 h-full">
            <form class="max-w-lg max-md:mx-auto w-full p-6" action="{{ route('signing') }}" method="POST">
                @csrf
                <div class="mb-10">
                    <h3 class="text-4xl font-extrabold">SIGN IN</h3>
                    <p class="text-sm mt-6">Sign in and Immerse yourself in a hassle-free journey with our Youcode community</p>
                </div>
                <div>
                    <label class="text-[15px] mb-3 block">Email</label>
                    <div class="relative flex items-center">
                        <input name="email" type="text" required
                            class="w-full text-sm bg-gray-100 px-4 py-4 rounded-md outline-blue-600"
                            placeholder="Enter email" />
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                            class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 682.667 682.667">
                            <defs>
                                <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                    <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                                </clipPath>
                            </defs>
                            <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                                <path fill="none" stroke-miterlimit="10" stroke-width="40"
                                    d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z"
                                    data-original="#000000"></path>
                                <path
                                    d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z"
                                    data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="mt-6">
                    <label class="text-[15px] mb-3 block">Password</label>
                    <div class="relative flex items-center">
                        <input name="password" type="password" required
                            class="w-full text-sm bg-gray-100 px-4 py-4 rounded-md outline-blue-600"
                            placeholder="Enter password" />
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                            class="w-[18px] h-[18px] absolute right-4 cursor-pointer" viewBox="0 0 128 128">
                            <path
                                d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                data-original="#000000"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex items-center gap-4 justify-between mt-4">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox"
                            class="shrink-0 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                        <label for="remember-me" class="ml-3 block text-sm">
                            Remember me
                        </label>
                    </div>
                </div>
                <div class="mt-10">
                    <button type="submit"
                        class="w-full shadow-xl py-3 px-4 text-sm font-semibold rounded text-white bg-sky-700 hover:bg-sky-900 focus:outline-none">
                        Sign Up
                    </button>
                </div>
                <p class="text-sm mt-10 text-center">Don't have an account <a href="{{ route('inscription') }}"
                        class="text-sky-700 font-semibold hover:underline ml-1">Register here</a></p>
            </form>
            <div
                class="h-full md:py-6 flex items-center relative max-md:before:hidden before:absolute before:bg-gradient-to-r before:from-cyan-500 before:to-sky-800 before:h-full before:w-3/4 before:right-0 before:z-0">
                <img src="https://readymadeui.com/photo.webp" class="rounded-md lg:w-4/5 md:w-11/12 z-50 relative"
                    alt="Dining Experience" />
            </div>
        </div>
    </div>

</body>
