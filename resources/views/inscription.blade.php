{{-- 
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
                      </form> --}}



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

    <div class="font-[sans-serif] text-[#333] w-3/4 mx-auto p-8 h-3/4">
        <div class=" grid md:grid-cols-2 items-center gap-8 h-full">
            <form class="max-w-lg max-md:mx-auto w-full p-6" action="{{ route('signup') }}" method="POST">
                @csrf
                <div class="mb-10">
                    <h3 class="text-4xl font-extrabold">SIGN UP</h3>
                    <p class="text-sm mt-6">Sign up and Immerse yourself in a hassle-free journey with our Youcode
                        community</p>
                </div>

                <div class="mt-6">
                    <div class="flex gap-48">


                        <label class="text-[15px] mb-3 block">Firstname</label>
                        <label class="text-[15px] mb-3 block">Lastname</label>
                    </div>
                    <div class="flex gap-12">
                        <div class="relative flex items-center">
                            <input name="firstName" type="text" required
                                class="w-full text-sm bg-gray-100 px-4 py-4 rounded-md outline-blue-600"
                                placeholder="Abdelali" />
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
                            @error('firstName')
                                <div class="text-red-400"></div>
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="relative flex items-center">
                            <input name="lastName" type="text" required
                                class="w-full text-sm bg-gray-100 px-4 py-4 rounded-md outline-blue-600"
                                placeholder="TAHA" />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 682.667 682.667">
                                    <circle cx="341.333" cy="500" r="200" stroke-width="40" />
                                    <circle cx="341.333" cy="250" r="100" stroke-width="40" />
                                </svg>                                
                                
                                

                            @error('lastName')
                                <div class="text-red-400"></div>
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-6">
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
                        class="w-full shadow-xl py-3 px-4 text-sm font-semibold rounded text-white bg-gradient-to-r from-rose-500 to-pink-800 hover:bg-rose-950 focus:outline-none">
                        Sign up
                    </button>
                </div>
                <p class="text-sm mt-10 text-center">You have an account ?<a href="{{ route('connexion') }}"
                        class="text-red-700 font-semibold hover:underline ml-1">Register here</a></p>
            </form>
            <div
                class="h-full md:py-6 flex items-center relative max-md:before:hidden before:absolute before:bg-gradient-to-r before:from-rose-500 before:to-pink-800 before:h-full before:w-3/4 before:right-0 before:z-0">
                <img src="https://static.wixstatic.com/media/af6c68_ee3310df3a7049089147fa63ef9ebdb2~mv2.jpg/v1/fill/w_1899,h_2423,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/af6c68_ee3310df3a7049089147fa63ef9ebdb2~mv2.jpg"
                    class="rounded-md lg:w-4/5 md:w-11/12 z-50 relative" alt="Dining Experience" />
            </div>
        </div>
    </div>

</body>
