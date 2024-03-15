<?php

namespace App\Http\Controllers;
use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function getFruits()
    {
        $fruits  = Fruit::all();
        return view('fruits',compact('fruits'));
    }
}