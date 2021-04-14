@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 pt-16">
  <img class="inset-0 absolute h-full w-full object-cover" src="img/home.png" alt="home">
  <div class="absolute inset-0 bg-gray-900 bg-opacity-70"></div>
    <div class="h-full flex-col text-center justify-center relative mt-64 sm:mt-45">
    <h1 class="text-5xl font-semibold tracking-tight text-transparent bg-gradient-to-r bg-clip-text from-green-200 to-green-800 focus:outline-none focus:shadow-outline uppercase">Welcome to DefiatHMS</h1>
    <div class="mt-6">
    <p class="text-white font-semibold tracking-normal text-lg justify-center items-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, aspernatur. Id quam necessitatibus ullam dicta, perferendis earum asperiores voluptatem neque, officiis, maiores enim delectus. Sunt sint ducimus vitae debitis eum.</p>
    </div>

    <div class="mt-6">
    <a href="{{ route('login') }}">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
         Login
      </button>
     </a>

    <a href="{{ route('register') }}">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
            Register
        </button>
    </a>
    </div>
    
    
    </div>
</div>
@endsection
