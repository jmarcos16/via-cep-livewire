<div class="relative bg-gray-300 h-96 w-[40rem] p-10 m-auto top-36 rounded-lg shadow border-gray-600">

    <form wire:submit="searchPostCode" class="flex w-full my-3">
        <x-text-input class="rounded-r-none w-10/12 px-4 py-3" label="CEP" placeholder="Provide PostCode"
            wire:model="postCode" />

        <x-primary-button class="rounded-l-none" wire:loading.attr="disabled">
            Search
        </x-primary-button>
    </form>

    <div class="text-red-600">
        @error('postCode')
            {{ $message }}
        @enderror
    </div>


    <div>
        <x-input-label for="address" class="mt-2">Address</x-input-label>
        <x-text-input id="address" class="w-full" wire:model="address" disabled placeholder="Your Address"
            value="{{ $address }}" />
    </div>

    <div>
        <x-input-label for="neighborhood" class="mt-2">Neighborhood</x-input-label>
        <x-text-input id="neighborhood" class="w-full" wire:model="neighborhood" disabled
            placeholder="Your Neighborhood" value="{{ $neighborhood }}" />
    </div>

    <div>
        <x-input-label for="city" class="mt-2">City</x-input-label>
        <x-text-input id="city" class="w-full" wire:model="city" disabled placeholder="Your City"
            value="{{ $city }}" />
    </div>


</div>
