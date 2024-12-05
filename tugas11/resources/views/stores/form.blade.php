<x-app-layout>
    @slot('title', 'Edit a store')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $page_meta['title'] }}
        </h2>
    </x-slot>

        <x-container>
            <div class="py-10 text-gray-900">
                <x-card class="max-w">
                    <x-card.header>
                        <x-card.title>
                            {{ $page_meta['title'] }}
                        </x-card.title>
                        <x-card.description>
                            {{ $page_meta['description'] }}
                        </x-card.description>
                    </x-card.header>
                    <x-card.content>
                        <form action="{{ $page_meta['url'] }}" method="POST" enctype="multipart/form-data" class="space-y-6" novalidate>
                            @method($page_meta['method'])
                            @csrf
                            <div>
                                <x-input-label for="logo" class="sr-only" :value="__('Logo')" />
                                <input id="logo" name="logo" type="file" />
                                <x-input-error :messages="$errors->get('logo')" required />
                            </div>
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $store->name)" required />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="description" :value="__('Description')" />
                                <x-textarea id="description" class="block mt-1 w-full" type="text" name="description" required> {{ old('description', $store->description) }}</x-textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>
                            <x-primary-button>
                                Save
                            </x-primary-button>
                        </form>
                    </x-card.content>
                </x-card>
            </div>
        </x-container>
</x-app-layout>
