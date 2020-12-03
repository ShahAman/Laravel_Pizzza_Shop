<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use Illuminate\Support\Facades\Auth;

class PizzaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $pizzas= Pizza::all();
    
        //$name = request('name');
    
        return view('pizzas.index', [
            'pizzas' => $pizzas
            ]);
    }

    public function show($id){
        $pizza = Pizza::findOrFail($id);

        return view('pizzas.details', ['pizza' => $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        $pizza = new Pizza();
        //dd(Auth::user()->name);
        $pizza->name = Auth::user()->name;
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->price = request('price');
        $pizza->toppings = request('toppings');
        $pizza->save();

        return redirect('/');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
