<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Products: Livewire CRUD') }}
    </h2>
</x-slot>    

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            <button wire:click='create' class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3">New</button>
            
            @if ($modal)
                @include('livewire.products-create')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">DESCRIPTION</th>
                        <th class="px-4 py-2">AMOUNT</th>
                        <th class="px-4 py-2">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td class="border px-4 py-2">{{ $product->id }}</td>
                        <td class="border px-4 py-2">{{ $product->description }}</td>
                        <td class="border px-4 py-2">{{ $product->amount }}</td>
                        <td class="border px-4 py-2 text-center">
                            <button wire:click='edit({{ $product->id }})' class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Edit</button>
                            <button wire:click='delete({{ $product->id }})' class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>  
            </table>
        
        </div>
    </div>
</div>