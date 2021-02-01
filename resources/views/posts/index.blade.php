<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts of blog') }} - {{ $blog->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul class="list-disc">
                        @foreach($posts as $post)
                            <li><a href="{{route('posts.show', ['post' => $post->id])}}">{{$post->title}}</li>
                        @endforeach
                    </ul>
                </div>
                <form method="GET" action="{{ route('create.post', ['blog' => $blog->id]) }}">
                    @csrf
                    <div class="flex items-center justify-begin mt-4">

                        <x-button class="ml-3">
                            {{ __('Create post') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
