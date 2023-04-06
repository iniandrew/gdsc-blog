<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
                    <p class="text-gray-400 mb-2">Author {{ $post->user->name }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->content }}</p>
                    <hr class="mb-4">
                    <div class="flex justify-end">
                        <a href="{{ route('post.index') }}" class="bg-red-500 text-white px-4 py-3 rounded font-medium w-50">Back to Post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
