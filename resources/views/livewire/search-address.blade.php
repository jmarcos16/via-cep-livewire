<div>

    <div x-data="{input: ''}" class="flex gap-3">
            <x-text-input class="w-full rounded py-2" wire:model.live="cep" wire:keydown.enter="searchAddress" placeholder="Provide postal code"
                          x-model="input" type="text"
                          type="text" name="cep" id="cep" x-on:cep-searched.window="input=''" autocomplete="off" autofocus />

        <x-secondary-button class="py-2 px-6" wire:click="searchAddress">Search</x-secondary-button>
    </div>
    <x-input-error class="mt-2 relative" :messages="$errors->get('cep')" />

    <div class="overflow-x-auto py-6">

    <div class="overflow-hidden align-middle rounded-lg shadow border border-gray-300">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Address
                    </th>
                    <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Neighborhood
                    </th>
                    <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        City
                    </th>
                    <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Country
                    </th>
                </tr>
            </thead>

            <tbody>
                @if($address)
                        <tr class="bg-white dark:bg-gray-800">
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                {{$address['logradouro']}}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 ">
                                {{$address['bairro']}}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 ">
                                {{$address['localidade']}}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 ">
                                {{$address['cep']}}
                            </td>
                        </tr>
                @else
                    <tr class="bg-white dark:bg-gray-800">
                        <td class="px-6 py-4 whitespace-no-wrap text-sm text-center leading-5 font-medium text-gray-600" colspan="4">
                            No address found
                        </td>
                    </tr>
                @endif
            </tbody>

        </table>
    </div>

</div>
