<x-app-layout>
    @slot('title', 'Stores')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-container>
        <div class="grid grid-cols-2 gap-6">
            @foreach ($stores as $store)
            <x-card class="p-6">
                <h2>{{ $store->name }}</h2>
                <img src="{{ $store->logo }}" alt="{{ $store->name }}" class="size-16 rounded-lg w-16 h-16">
                <x-card.description>
                    {{ $store->description }}
                </x-card.description>

                @if($store->user_id === auth()->user()->id)
                    <a href="{{ route('stores.edit', $store) }}" class="underline text-red-600">
                        Edit
                    </a>

                @endif
            </x-card>
            @endforeach
        </div>
    </x-container>
    </div>
</x-app-layout>

