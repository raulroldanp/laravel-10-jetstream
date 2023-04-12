<div class="flex flex-col sm:justify-center items-center pt-5 pb-5">
    <x-slot name="header">
        <h2 class="text-gray-900 font-semibold text-xl">Posts: Generate Slug from Title</h2>
    </x-slot>

    <div class="w-full sm:max-w-xl mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{-- @livewire('posts') --}}

        <div>
            <form wire:submit.prevent='storePost' class="border-b-2 pb-10">

                <div class="mb-4">
                    <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                    <input wire:model='title' type="text" id="title" class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
                </div>
                <div class="mb-4">
                    <label for="slug" class="block font-medium text-sm text-gray-700">Slug</label>
                    <input wire:model='slug' type="text" id="slug" class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
                </div>

                <div class="flex items-center">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Add Post
                    </button>        
                </div>
            </form>

            <h3 class="font-bold text-xl mt-10 mb-5">Latest 5 Posts</h3>

            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Title</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Slug</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($posts as $post)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $post->title }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $post->slug }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>

    </div>
</div>