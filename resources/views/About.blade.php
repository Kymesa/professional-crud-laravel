@extends('layouts.Master')

@section('title', 'About')

@section('content')
    <!-- Features Section: Boxes with Icons -->
<div class="bg-gradient-to-tr from-indigo-100 via-purple-50 to-teal-100 dark:text-gray-100 dark:from-indigo-900 dark:via-purple-900 dark:to-teal-900">
    <div class="container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
      <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
        <div class="p-5 md:p-7 xl:p-10 bg-white border border-white shadow-sm rounded-lg transition hover:border-blue-600 dark:bg-gray-800 dark:border-gray-800 dark:hover:border-blue-400 dark:shadow-none">
          <svg class="hi-outline hi-rectangle-stack inline-block w-12 h-12 text-blue-600 mb-5 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122"/></svg>
          <h4 class="text-lg font-bold mb-2">
            1. UI Components Library
          </h4>
          <p class="leading-relaxed text-gray-600 dark:text-gray-400">
            We carefully handcrafted a vast collection of UI components to build all kinds of web applications and websites. We keep designing and adding new ones with each update.
          </p>
        </div>
        <div class="p-5 md:p-7 xl:p-10 bg-white border border-white shadow-sm rounded-lg transition hover:border-blue-600 dark:bg-gray-800 dark:border-gray-800 dark:hover:border-blue-400 dark:shadow-none">
          <svg class="hi-outline hi-cube inline-block w-12 h-12 text-blue-600 mb-5 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"/></svg>
          <h4 class="text-lg font-bold mb-2">
            2. Self-Hosted Web App
          </h4>
          <p class="leading-relaxed text-gray-600 dark:text-gray-400">
            You’ll love working with the Tailkit web app! It’s a compiled Vue.js based app which you can host on your own and use to explore and use all available UI components.
          </p>
        </div>
        <div class="p-5 md:p-7 xl:p-10 bg-white border border-white shadow-sm rounded-lg transition hover:border-blue-600 sm:col-span-2 lg:col-span-1 dark:bg-gray-800 dark:border-gray-800 dark:hover:border-blue-400 dark:shadow-none">
          <svg class="hi-outline hi-cog inline-block w-12 h-12 text-blue-600 mb-5 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495"/></svg>
          <h4 class="text-lg font-bold mb-2">
            3. Helper Tools
          </h4>
          <p class="leading-relaxed text-gray-600 dark:text-gray-400">
            Search and copy SVG icons, build your button markup or copy your favorite color classes with powerful tools. More are under development to give you superpowers.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- END Features Section: Boxes with Icons -->
@endsection
