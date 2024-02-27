
<div class="w-full max-w-md px-8 py-2 mt-16 bg-white rounded-lg shadow-md dark:bg-gray-800 mb-5 pt-5">
    <div class="flex justify-center -mt-16 md:justify-end">
        <img class="object-cover w-20 h-20 border-2 border-blue-200 rounded-full dark:border-blue-400" alt="Testimonial avatar" 
        @if($followee->image)
            src="{{ asset('storage/' . $followee->image ) }}"
        @else
            src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png"
        @endif
        >
            </div>

    <div class="flex gap-2">
    <h2 class="mt-2 text-md font-semibold text-gray-800 dark:text-white md:mt-0">{{$followee->firstName}} {{$followee->lastName}} </h2>
    <span><svg class="w-5 h-5 mt-0.5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 12 2 2 5-5m4.5 5.3 1-.9a2 2 0 0 0 0-2.8l-1-.9a2 2 0 0 1-.6-1.4V7a2 2 0 0 0-2-2h-1.2a2 2 0 0 1-1.4-.5l-.9-1a2 2 0 0 0-2.8 0l-.9 1a2 2 0 0 1-1.4.6H7a2 2 0 0 0-2 2v1.2c0 .5-.2 1-.5 1.4l-1 .9a2 2 0 0 0 0 2.8l1 .9c.3.4.6.9.6 1.4V17a2 2 0 0 0 2 2h1.2c.5 0 1 .2 1.4.5l.9 1a2 2 0 0 0 2.8 0l.9-1a2 2 0 0 1 1.4-.6H17a2 2 0 0 0 2-2v-1.2c0-.5.2-1 .5-1.4Z"/>
      </svg></span>
    </div>

    <p class="text-xs text-gray-600 dark:text-gray-200"><span class="font-medium">Member Since: </span>{{$followee->created_at->format('j F Y')}}</p>

    <div class="flex justify-end mt-4">
        <form action="{{ route('follows') }}" method="post">
            @csrf
            <input type="hidden" name="followee_id" value="{{ $followee->id }}">
            <button type="submit" class="text-gray-900 bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 me-2 mb-2">
                
                <svg class="mr-3 w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                  </svg>
                Follow
                </button>
        </form>
    </div>
</div>