<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                @php
                    $laravelLinks = [
                        ['link' => 'chirps.index', 'title' => 'Chirper: Laravel 10 Bootcamp'],
                        ['link' => 'products', 'title' => 'Products: Livewire CRUD']
                    ];

                    $livewirekitLinks = [
                        ['link' => 'posts', 'title' => 'Auto-Generate Slug from Title'],
                        ['link' => 'countries-city', 'title' => 'Two Level Parent-Child Dependent Dropdowns'],
                        ['link' => 'companies', 'title' => 'Three Level Parent-Child Dependent Dropdowns'],
                        ['link' => 'post-votes.index', 'title' => 'Upvoting/Downvoting Posts with validation against repeating votes']
                    ];
                @endphp
                
                @livewire('examples-list', ['links' => $laravelLinks, 'title' => 'Laravel 10 Examples'])
                @livewire('examples-list', ['links' => $livewirekitLinks, 'title' => 'Livewire Kit Examples'])
            
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
