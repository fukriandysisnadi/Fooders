<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $foods = Food::inRandomOrder()->filter()->paginate(8);
        
        return view ('home', ['foods' => $foods]);
    }

    
}
