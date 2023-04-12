<div class="flex flex-col sm:justify-center items-center pt-5 pb-5">
    <x-slot name="header">
        <h1 class="text-gray-900 font-bold">Three Level Parent-Child Dependent Dropdowns</h2>
    </x-slot>

    <div class="w-full sm:max-w-xl mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
        
        <div>
            <div class="mb-4 px-4 py-3 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
                Fill in the form. Choose the country United States, then state, and cities list will be updated.
            </div>

            <form wire:submit.prevent='storeCompany' class="border-b-2 pb-10">
                <div>
                    <label for="name" class="block font-medium text-sm text-gray-700">
                        Company Name*
                    </label>
                    <input wire:model='name' id="name" type="text" class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                </div>

                <div class="mt-4">
                    <label for="country" class="block font-medium text-sm text-gray-700">
                        Country*
                    </label>
                    <select wire:model='selectedCountry' id="country" class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                        <option value="">-- choose country --</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>                    
                </div>

                <div class="mt-4">
                    <label for="state" class="block font-medium text-sm text-gray-700">
                        State*
                    </label>
                    <select wire:model='selectedState' id="state" class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                        @if ($states->count() == 0)
                            <option value="">-- choose country 'United States' first --</option>
                        @else
                            <option value="">-- choose state --</option>
                        @endif
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>                    
                </div>

                <div class="mt-4">
                    <label for="stateCity" class="block font-medium text-sm text-gray-700">
                        City*
                    </label>
                    <select wire:model='selectedStateCity' id="stateCity" class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
                        @if ($stateCities->count() == 0)
                            <option value="">-- choose state first --</option>
                        @else
                            <option value="">-- choose city --</option>
                        @endif
                        @foreach ($stateCities as $stateCity)
                            <option value="{{ $stateCity->id }}">{{ $stateCity->name }}</option>
                        @endforeach
                    </select>                    
                </div>

                <div class="flex items-center mt-4">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Add Company
                    </button>
                </div>
            </form>

            <h3 class="font-bold text-xl mt-10 mb-5">Latest Companies</h3>

            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Name</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Location</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $company->name }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $company->stateCity->name }}, {{ $company->stateCity->state->name }}, {{ $company->stateCity->state->country->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>