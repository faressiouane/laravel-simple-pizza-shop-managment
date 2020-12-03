@extends('layouts.layout')
@section('content')
        <div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif


        <div class="content">
            
            <img src="/imgs/pizza-house.png" alt="pizza logo">

            <div class="title">
                The best pizza on Cirta
            </div>
            <p class="mssg"> {{ session('mssg') }} </p>
            <a href="{{route('pizzas.create')}}" class="back">Order a Pizza</a>

            
        </div>
            
        </div>


        
@endsection