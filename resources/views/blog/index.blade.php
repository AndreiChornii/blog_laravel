<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul class="list-disc">
                        @foreach($blogs as $blog)
                            <li>
                                <a href="{{route('blog_posts.list', ['blog' => $blog->id])}}">{{$blog->name}}
                                <form method="get" action="{{ route('blog.edit', ['blog' => $blog->id]) }}">
                                    <input type="hidden" name="id" value="{{$blog->id}}">
                                    <input type="hidden" name="name" value="{{$blog->name}}">
                                    @csrf
                                    <div class="flex items-center justify-begin mt-4">

                                        <x-button class="ml-3">
                                            {{ __('update blog') }}
                                        </x-button>
                                    </div>
                                </form>
                                <form method="get" action="{{ route('blog.delete', ['blog' => $blog->id]) }}">
                                    <input type="hidden" name="id" value="{{$blog->id}}">
                                    @csrf
                                    <div class="flex items-center justify-begin mt-4">

                                        <x-button class="ml-3">
                                            {{ __('delete blog') }}
                                        </x-button>
                                    </div>
                                </form>
                            </li>
                        @endforeach
                    </ul>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
