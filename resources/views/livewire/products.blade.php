<x-slot name="header">
    <h1 class="text-gray-900">CRUD con Laravel 10 Jetstream y Livewire</h1>
</x-slot>    
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">DESCRIPTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td class="border px-4 py-2">{{ $product->id }}</td>
                        <td class="border px-4 py-2">{{ $product->description }}</td>
                    </tr>
                    @endforeach
                </tbody>  
            </table>
        
        </div>
    </div>
</div>