@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a new Pizza</h1>

    <form action="/pizzas" method="POST">
        @csrf
       <!-- <label for="name">Name:</label>-->
        <input hidden type="text" id="name" name="name" value="{{Auth::user()->name}}">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="hawaiian">Hawaiian</option>
            <option value="vol">Volcano</option>
        </select>
        <label for="type">Choose base type:</label>
        <select name="base" id="base">
            <option value="crust">Crust</option>
            <option value="garlic">Garlic</option>
        </select>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price">
        <fieldset>
            <label>Extra toppings:</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
            <input type="checkbox" name="toppings[]" value="olives">Olives <br>
        </fieldset>

        <input type="submit" value="Order Pizza">
        <br>
        <br>
        <a href="/pizzas" class="btn btn-outline-primary" role="button" >Back</a>
    </form>
</div>
@endsection