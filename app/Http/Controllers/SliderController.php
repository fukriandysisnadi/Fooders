<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    function sliderIndex(){
        $sliders = Slider::all();
        return view ('home', ['sliders' => $sliders]);
    }
}
