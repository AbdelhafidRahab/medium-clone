<div class="flex flex-col md:flex-row bg-white border border-gray-200 rounded-lg shadow-sm mb-8">
    <a href="#" class="w-full md:w-1/3">
        {{-- the image url from db is broken, i use this instead --}}
        <img class="rounded-t-lg md:rounded-t-none md:rounded-l-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
    </a>
    <div class="p-5 w-full md:w-2/3">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                {{ $post->title }}
            </h5>
        </a>
        <div class="mb-3 font-normal text-gray-700">
            {{ Str::limit($post->content, 200, '...') }}
        </div>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
            Read more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>