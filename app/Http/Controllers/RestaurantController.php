<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
    
       $restaurants = \App\Restaurant::all();
       
        return view('restaurants', compact('restaurants'));
    }
}
