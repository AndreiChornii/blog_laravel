<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create blog') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('blogs.store') }}">
        @csrf
        <div>
            <x-label for="title" :value="__('Title')" />

            <x-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-button class="ml-3">
                {{ __('Create blog') }}
            </x-button>
        </div>
    </form>
</x-app-layout>
