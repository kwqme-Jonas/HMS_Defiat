@extends('layouts.app')


@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Hello admin
                    You're logged in!
                </div>
            </div>
        </div>
        <div class="container p-8">
                <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <button class="rounded-md bg-green-400 text-sm">logout</button>
                            </a>
                </form>
                </div>
    </div>

@endsection