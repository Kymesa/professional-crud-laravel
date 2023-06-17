@extends('layouts.Master')

@section('title', 'ServicesEdit')

@section('content')

    <div class="flex justify-center ">
        <h1 class="mb-4  text-center text-2xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white">
            {{ $post->title }}</h1>
    </div>

    <div class="mb-24 mx-12 md:mx-36 xl:mx-96">
        @csrf
        <div class="flex justify-center mb-8">
            <div>
                <img width="300" class="xl:w-52 md:w-52 sm:w-52" src="{{ asset($post->image) }}" alt="{{ $post->title }}">
            </div>
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input disabled value="{{ $post->title }}" name="title" type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="">
                @error('title')
                    @include('layouts.FormErrorsCreate.ErrorTitle')
                @enderror
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                <select disabled name="category_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="{{ $post->category->id }}">{{ $post->category->name }}</option>
                </select>
                @error('category_id')
                    @include('layouts.FormErrorsCreate.ErrorCategory')
                @enderror
            </div>
            <div>
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                <input disabled value="{{ $post->price }}" name="price" type="number" id="price"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="$">
                @error('price')
                    @include('layouts.FormErrorsCreate.ErrorPrice')
                @enderror
            </div>
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                <input disabled value="{{ $post->stock }}" name="stock" type="number" id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="#">
                @error('stock')
                    @include('layouts.FormErrorsCreate.ErrorStock')
                @enderror
            </div>
        </div>
        <a href="{{ route('services.crud') }}">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</button>
        </a>
    </div>
@endsection
