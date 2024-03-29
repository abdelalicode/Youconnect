<div class="w-full max-w-sm overflow-hidden bg-white rounded-lg dark:bg-gray-800">
    @if(Auth::check() && Auth::user()->image)
    <img class="object-cover object-center w-full h-48" src="{{ asset('storage/' . Auth::user()->image) }}" alt="avatar">
@else
    <img class="object-cover object-center w-full h-48" src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png" alt="avatar">
@endif

    <div class="flex items-center px-4 py-2 bg-gray-900">
        <span  class="material-symbols-outlined w-6 h-6 text-white fill-current">
            person
            </span>

            <a href="{{ route('EditeProfil') }}">
        <h1 class="mx-3 text-base font-semibold text-white">Profile</h1>
       </a>
    </div>

    <div class="px-4 py-2">
        <h1 class="text-lg font-semibold text-gray-800 dark:text-white">{{ Auth::user()->firstName }} {{ Auth::user()->lastName }}</h1>

        <p class="py-1 text-sm text-gray-700 dark:text-gray-400">Member since: <br>{{ Auth::user()->created_at->format('j F Y') }}</p>


        <div class="flex items-center mt-1 text-gray-700 dark:text-gray-200">
            <svg aria-label="location pin icon" class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z"/>
            </svg>

            <h1 class="px-2 text-xs">Youssoufia</h1>
        </div>

        <div class="flex items-center mt-1 text-gray-700 dark:text-gray-200">
            <svg aria-label="email icon" class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z"/>
            </svg>

            <h1 class="px-2 text-xs">{{ Auth::user()->email }}</h1>
        </div>
    </div>
</div>
