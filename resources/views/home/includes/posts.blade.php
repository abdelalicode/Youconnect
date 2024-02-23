<div class="relative mt-2 rounded overflow-hidden shadow flex flex-col max-w-s">
    <a href="#"></a>
    <div class="relative">

        @if ($post->user_id == auth()->id())
            <div class="absolute p-5  z-10 opacity-0 hover:opacity-100">
                <form action=" {{ route('post.destroy') }}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <button type="submit">
                        <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
            </div>
        @endif
        <img class="w-full" style="aspect-ratio: 16/9;" src="{{ asset('storage/' . $post->image) }}"
            alt="Sunset in the mountains">
        <div
            class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
        </div>
        <div
            class="text-xs absolute top-0 right-0 
            
            px-3 py-2  mt-3 mr-3   transition duration-500 ease-in-out">
            @auth

                <div
                    class="@if ($post->likers->contains('id', auth()->id())) {{-- @if ($post->likers->contains('id', 1))  --}}
                bg-white text-red-600 px-3 py-2
            @else 
                bg-red-600 text-white px-3 py-2 @endif ">
                    <form action="{{ route('addLike') }}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="post_id" value=" {{ $post->id }}">
                        <button type="submit">
                            <span class="material-symbols-outlined">
                                favorite
                            </span>
                        </button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
    <div class="pb-24 px-4 py-2">
        <div class="flex gap-2 mb-2">
            <img class="w-6 h-6 rounded-full" src="{{ asset('storage/' . $post->user->image) }}" alt="Rounded avatar">
            <a href="#"
                class="font-medium text-base inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">{{ $post->user->firstName }}
                {{ $post->user->lastName }}</a>
        </div>
        <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
            <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                    <g>
                        <path
                            d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                        </path>
                    </g>
                </g>
            </svg>
            <span class="ml-1">{{ $post->created_at->diffForHumans() }}</span>
        </span>

        <p class="text-gray-500 text-xs">
            {{ $post->content }}
        </p>
    </div>
    <div class="absolute inset-x-0 bottom-0 px-4 py-2 flex flex-row items-center justify-between bg-gray-100">


        <span class="text-xs">{{ $post->likers_count }} People liked this</span>

        <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">

            <button data-modal-target="#Modal{{ $post->id }}" data-modal-toggle="#Modal{{ $post->id }}"
                class="block text-gray-400 bg-transparent hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                <div class="flex items-center">
                    <svg class="h-5 flex-shrink-0 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                        </path>
                    </svg>
                    <span>Comments</span>
                </div>
            </button>


            <span class="ml-1">


                <!-- Modal toggle -->


                <!-- Main modal -->
                <div id="#Modal{{ $post->id }}" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                            <!-- Modal header -->
                            <div
                                class="relative flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Comments
                                </h3>

                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="#Modal{{ $post->id }}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>


                            </div>
                            <!-- Modal body -->
                            <div class="ml-2 p-4 md:p-5 space-y-4">

                                <div class="flex gap-2 w-full bg-white p-4 md:p-5 z-10 border-grey-500">
                                    <img class="w-10 h-10 rounded-full"
                                        src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png"
                                        alt="">
                                    <form class="w-full max-w-sm" method="post" action="{{ route('addComment') }}">
                                        @csrf
                                        <div class="flex items-center border-b border-sky-500 py-2">
                                            <input
                                                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                                type="text" placeholder="Add your comment" aria-label="Full name"
                                                name="content">
                                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                                            <button
                                                class="flex-shrink-0 bg-sky-500 hover:bg-sky-700 border-sky-500 hover:border-sky-700 text-sm border-4 text-white px-1 rounded"
                                                type="submit">
                                                <span class="material-symbols-outlined">
                                                    send
                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                @foreach ($post->comments as $comment)
                                    <article class="md:gap-8 md:grid md:grid-cols-3 mb-5 gap-3">
                                        <div>
                                            <div class="flex items-center mb-6">

                                                @if ($comment->user->id == auth()->id())
                                                    <div class="absolute pl-96 pb-8 z-10 opacity-0 hover:opacity-100">
                                                        <form action=" {{ route('comment.destroy') }}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="hidden" name="comment_id"
                                                                value="{{ $comment->id }}">
                                                            <button type="submit">
                                                                <svg class="w-8 h-8 text-red-500" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 24 24">
                                                                    <path fill-rule="evenodd"
                                                                        d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                @endif

                                                <img class="w-10 h-10 rounded-full"
                                                    src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png"
                                                    alt="">
                                                <div class="ms-4 font-medium text-sm dark:text-white">
                                                    <p>{{ $comment->user->firstName }} {{ $comment->user->lastName }}
                                                    </p>
                                                    <div
                                                        class="text-[10px] text-gray-500 dark:text-gray-400 font-thin">

                                                        <div class="font-medium ">Member since:</div>
                                                        {{ $comment->user->created_at->format('j F Y') }}
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="space-y-4 text-sm text-gray-500 dark:text-gray-400">

                                                <li class="flex gap-1 items-center">
                                                    <span class="material-symbols-outlined">
                                                        acute
                                                    </span>
                                                    {{ $comment->created_at->diffForHumans() }}
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-span-2 mt-6 md:mt-0">
                                            <div class="flex items-start mb-5">
                                                <div class="pe-4">
                                                    <footer>
                                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">

                                                        </p>
                                                    </footer>
                                                </div>
                                            </div>
                                            <p class="mb-2 text-gray-500 dark:text-gray-400">
                                                {{ $comment->content }}
                                            </p>
                                            <aside class="flex items-center mt-3">
                                                <a href="#"
                                                    class="inline-flex items-center text-sm font-medium text-sky-600 hover:underline dark:text-sky-500">
                                                    <svg class="w-3.5 h-3.5 me-2.5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z" />
                                                    </svg>
                                                    Helpful
                                                </a>
                                                <a href="#"
                                                    class="inline-flex items-center text-sm font-medium text-sky-600 hover:underline dark:text-sky-500 group ms-5">
                                                    <svg class="w-3.5 h-3.5 me-2.5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M11.955 2.117h-.114C9.732 1.535 6.941.5 4.356.5c-1.4 0-1.592.526-1.879 1.316l-2.355 7A2 2 0 0 0 2 11.5h3.956L4.4 16a1.779 1.779 0 0 0 3.332 1.061 24.8 24.8 0 0 1 4.226-5.36l-.003-9.584ZM15 11h2a1 1 0 0 0 1-1V2a2 2 0 1 0-4 0v8a1 1 0 0 0 1 1Z" />
                                                    </svg>
                                                    Not helpful
                                                </a>
                                            </aside>
                                        </div>
                                    </article>
                                    <!-- Modal footer -->
                                    <div
                                        class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>

            </span>
        </span>
    </div>
</div>
