<x-app-layout>
    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <x-category-tabs> 
                        No Categories available
                    </x-category-tabs>
                </div>
            </div>

            <div class="mt-8 text-gray-900">
                @forelse($posts as $post)
                    <x-post-item :post="$post" />
                @empty
                    <div class="text-center">
                        <p class="text-grey-400">No posts found.</p>
                    </div>
                @endforelse
                {{-- we can provide our blade file for pagination inside links function or just use the default, or publish the default and modify it --}}
                {{$posts->links()}}
            </div>
        </div>
    </div>
</x-app-layout>
