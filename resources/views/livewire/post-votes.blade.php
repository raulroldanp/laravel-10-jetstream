<div class="flex flex-col sm:justify-center items-center pt-5 pb-5">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Votes: Upvoting/Downvoting Posts') }}
        </h2>
    </x-slot>

    <div class="w-full sm:max-w-xl mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
        @foreach ($postBoxes as $postBox)
            <div class="pb-3 pt-3 flex">
                {{ $postBox->title }}         
            </div>
        @endforeach        
    </div>
</div>