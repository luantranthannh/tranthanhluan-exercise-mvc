<?php

namespace App\Http\Controllers;
use App\Models\Fruit;
abstract class Controller
{
    public function getFruits()
    {
        $fruits = Fruit::all();
        return view('fruits', ['fruits' => $fruits]);
    }
}