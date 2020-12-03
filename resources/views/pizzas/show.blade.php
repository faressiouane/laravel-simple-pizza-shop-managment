@extends('layouts.app')
@section('content')


    <div class="content wrapper pizza-details">

        <h1> Order for : {{ $pizza->name}} </h1>
        <p class="type"> Type - {{ $pizza->type }} </p>
        <p class="base"> Base - {{ $pizza->base }} </p>

        @if($pizza->toppings)
            <p class="toppings">Extra toppings :</p>
            <ul>
                @foreach($pizza->toppings as $topping)
                    <li>{{ $topping }} </li>
                @endforeach
            </ul>
 
        @endif

        <form action="{{ route('pizzas.destroy', ['id' => $pizza->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Complete Order</button>
        </form>
    </div>

    <a href="{{ route('pizzas.index') }}" class="back"> <- back to all pizzas</a>

@endsection