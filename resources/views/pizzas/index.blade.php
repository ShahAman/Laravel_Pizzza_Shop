@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            
            
        <h1>Pizzas</h1>

        
        <!-- @for($i=0; $i< count($pizzas); $i++)
        <p>{{ $pizzas[$i]['type'] }}</p>
        @endfor -->

        @foreach($pizzas as $pizza)
            <div>
                {{ $loop->index+1 }}  {{ $pizza->type }} - {{ $pizza->base  }}  - {{$pizza->price}}
                <ul>
                    @foreach($pizza->toppings as $toppings)
                        <li>{{ $toppings }}</li>
                    @endforeach
                </ul>
                <a href="{{route('PizzaIds_edit',['id'=>$pizza->id])}}" class="btn btn-outline-primary" role="button" >Edit</a>
            </div>
        @endforeach
        <br>
        <a href="{{route('pizza_create')}}" class="btn btn-outline-primary" role="button" >Create Order</a>
    </div>
 </div>
@endsection