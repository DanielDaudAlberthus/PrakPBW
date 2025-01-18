<x-app-layout>
    {{-- <x-slot name="title">
        {{ __('Dashboard') }}
    </x-slot> --}}

    @slot('title', 'Dashboard')

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


</x-app-layout>
