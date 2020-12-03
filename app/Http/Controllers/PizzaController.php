<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    // auth protect the entire controller
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    
    public function index(){
        //ways to get data :

        //$pizzas = Pizza::all(); //grab it all
        //$pizzas = Pizza::orderBy('name', 'desc')->get(); //order all data then get it
        //$pizzas = Pizza::where('type', 'hawaiian')->get(); //filter data using where filter then get it (column, keyword)
        $pizzas = Pizza::latest()->get(); 
        
        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        $pizza->save();

        return redirect('/')->with('mssg', 'Thanks for your order');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');
    }
    
}
