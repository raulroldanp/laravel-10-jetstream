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
                    <div class="text-center">
                        {{ $post->title }}
                    </div>
                </div>            
            </div>
        @endforeach        
    </div>
</div>