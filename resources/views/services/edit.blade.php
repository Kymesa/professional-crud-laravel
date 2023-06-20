@extends('layouts.master')

@section('title', 'ServicesEdit')

@section('content')
    <div class="flex justify-center my-4">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl  dark:text-white"><mark
                class="px-2 text-white bg-blue-600 rounded-lg dark:bg-blue-500">Update Services</mark></h1>
    </div>
    <form enctype="multipart/form-data" action="{{ route('services.update', $post->id) }}"
        class="mb-24 mx-12 md:mx-36 xl:mx-96" method="POST">
        @csrf
        <div class="flex justify-center mb-8">
            <div>
                <img class="xl:w-44 md:w-48 sm:w-48 w-32" src="{{ asset($post->image) }}" alt="{{ $post->title }}">
            </div>
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input value="{{ $post->title }}" name="title" type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="">
                @error('title')
                    @include('layouts.form-error-create.error-title')
                @enderror
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                <select name="category_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="{{ $post->category->id }}">{{ $post->category->name }}</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    @include('layouts.form-error-create.error-category')
                @enderror
            </div>
            <div>
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                <input value="{{ $post->price }}" name="price" type="number" id="price"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="$">
                @error('price')
                    @include('layouts.form-error-create.error-price')
                @enderror
            </div>
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                <input value="{{ $post->stock }}" name="stock" type="number" id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="#">
                @error('stock')
                    @include('layouts.form-error-create.error-stock')
                @enderror
            </div>
            <div>
                <label for="file_input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                <input value="{{ $post->image }}"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="file_input" type="file" name="img">
                @error('img')
                    @include('layouts.form-error-create.error-image')
                @enderror
            </div>
        </div>
        <div>

        </div>
        <button type="submit"
            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">Update</button>
        <a href="{{ route('services.crud') }}">
            <button type="button"
                class="text-white mt-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">BACK</button>
        </a>
    </form>

@endsection
