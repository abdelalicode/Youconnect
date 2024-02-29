@extends('app')


@section('posts')


  
@foreach ($posts as $post)
@include('home.includes.posts')
@endforeach

@endsection




@section('suggestion')

<div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 mt-8 ml-8"
id="navbar-sticky">
<form id="searchForm" action="{{ route('search') }}" method="GET">
    <label for="default-search"
        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
        </div>
        <input type="search" id="search"
            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Search" required>
        <button type="submit"
            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
</form>
</div>
<div id="followerstemp">

@if ($followees !== null)

@foreach ($followees as $followee)
    

@include('home.includes.suggestion')

@endforeach
@else



<h5>{{  "No Suggestions at the moment!" }}</h5>
@endif

</div>


@endsection


<script>
   document.addEventListener('DOMContentLoaded', function() {
    // console.log(search);

    search.addEventListener('keyup', async function () {
       await  fetch(`/search?query=${this.value}`)
    .then(response => response.json())
    .then(data => {
        console.log(data);
        followerstemp.innerHTML = '';
        data.users.forEach(user => {
                const html = `
                    <div class="w-full max-w-md px-8 py-2 mt-16 bg-white rounded-lg shadow-md dark:bg-gray-800 mb-5 pt-5">
                        <div class="flex justify-center -mt-16 md:justify-end">
                            <img class="object-cover w-20 h-20 border-2 border-blue-200 rounded-full dark:border-blue-400" alt="Testimonial avatar" src="${user.image ? 'storage/' + user.image : 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png'}">
                        </div>
                        <div class="flex gap-2">
                            <h2 class="mt-2 text-md font-semibold text-gray-800 dark:text-white md:mt-0">${user.firstName} ${user.lastName}</h2>
                            <span>
                                <svg class="w-5 h-5 mt-0.5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 12 2 2 5-5m4.5 5.3 1-.9a2 2 0 0 0 0-2.8l-1-.9a2 2 0 0 1-.6-1.4V7a2 2 0 0 0-2-2h-1.2a2 2 0 0 1-1.4-.5l-.9-1a2 2 0 0 0-2.8 0l-.9 1a2 2 0 0 1-1.4.6H7a2 2 0 0 0-2 2v1.2c0 .5-.2 1-.5 1.4l-1 .9a2 2 0 0 0 0 2.8l1 .9c.3.4.6.9.6 1.4V17a2 2 0 0 0 2 2h1.2c.5 0 1 .2 1.4.5l.9 1a2 2 0 0 0 2.8 0l.9-1a2 2 0 0 1 1.4-.6H17a2 2 0 0 0 2-2v-1.2c0-.5.2-1 .5-1.4Z"/>
                                </svg>
                            </span>
                        </div>
                        <p class="text-xs text-gray-600 dark:text-gray-200"><span class="font-medium">Member Since: </span>${user.created_at}</p>
                        <div class="flex justify-end mt-4">
                            <form action="{{ route('follows') }}" method="post">
                                @csrf
                                <input type="hidden" name="followee_id" value="${user.id}">
                                <button type="submit" class="text-gray-900 bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 me-2 mb-2">
                                    <svg class="mr-3 w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                                    </svg>
                                    Follow
                                </button>
                            </form>
                        </div>
                    </div>
                `;
                followerstemp.innerHTML += html;
            });
    })
    .catch(error => {
        console.error('Error:', error);
    });
    }) 
    // console.log(followerstemp);
});


</script>
