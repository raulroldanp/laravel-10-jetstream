<x-app-layout>
    <div class="flex flex-col sm:justify-center items-center pt-5 pb-5">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Upvoting/Downvoting Posts with validation against repeating votes') }}
            </h2>
        </x-slot>

        <div class="w-full sm:max-w-xl mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            @foreach ($posts as $post)
                <div class="pb-3 pt-3 flex">
                    <div class="w-2/12">
                        @livewire('post-votes', ['post' => $post])
                    </div>     
                    <div class="w-10/12">
                        <h3 class="text-2xl mb-1">{{ $post->title }}</h3>
                        <p class="mb-1">{{ $post->post_text }}</p>
                    </div>
                </div>
            @endforeach        
        </div>
    </div>
</x-app-layout>