@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
<div class="max-w-md py-4 px-8 bg-white bg-opacity-0 shadow-md rounded-lg my-20">
  <div>
    <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2>
    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
  </div>
</div>
<div class="md:ml-24 mt-64">
<div class="flex  flex-col items-center justify-between">
            @if (Route::has('login'))
                <div class="">
                    @auth
                    <button >
                         <a href="{{ url('/dashboard') }}">
                         <button class="bg-white hover:bg-blue-700 text-gray-800 font-bold py-2 px-4 rounded-md">
                           Dashboard
                         </button>
                         </a>
                    </button>
                        
                    @else

                        <a href="{{ route('login') }}">
                            <button class="bg-white hover:bg-blue-700 text-gray-800 font-bold py-2 px-4 rounded-md">
                            Login
                            </button>
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                            <button class="bg-white hover:bg-blue-700 text-gray-800 font-bold py-2 px-4 rounded-md">
                                Register
                            </button></a>
                        @endif
                    @endauth
                </div>
            @endif
</div>
</div>
</div>
@endsection
    