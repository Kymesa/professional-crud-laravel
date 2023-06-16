@extends('layouts.Master')

@section('title', 'ServicesCrud')

@section('content')
    <!-- Page Header Section: Simple -->
    {{-- <div class="bg-white dark:text-gray-100 dark:bg-gray-900">
    <div class="space-y-16  xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-12">
      <div class="text-center">
        <h2 class="text-4xl font-black text-black mb-4 dark:text-white">
          CRUD POST
        </h2>
      </div>
    </div>
</div> --}}

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6 mb-20 mx-4">
        <div class="flex justify-center">
            <a href="{{ route('services.create') }}">
                <button type="button"
                    class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Create</button>
            </a>
            <button type="button"
                class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Trashed</button>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            #
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stock
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                {{ $post->id }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <img width="60" height="40" src="{{ asset($post->image) }}" alt="">
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $post->title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $post->category->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->price }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->stock }}
                        </td>
                        <td class="flex items-center px-6 py-4 space-x-3 my-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
