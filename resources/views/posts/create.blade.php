<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between">
                        <h1 class="text-2xl font-bold">Create Post</h1>
                    </div>
                    <div class="mt-4">
                        <form action="{{ route('post.store') }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="title" class="sr-only">Title</label>
                                <input type="text" name="title" id="title" placeholder="Title" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('title') is-invalid border-red-500  @enderror">

                                @error('title')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="body" class="sr-only">Body</label>
                                <textarea name="content" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('content') is-invalid border-red-500  @enderror" placeholder="Content"></textarea>

                                @error('content')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex justify-between">
                                <a href="{{ route('post.index') }}" class="bg-red-500 text-white px-4 py-3 rounded font-medium w-50">Cancel</a>
                                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-50">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
