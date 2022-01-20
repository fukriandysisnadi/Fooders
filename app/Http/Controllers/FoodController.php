<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FoodController extends Controller
{
    //
    public function index($index){
        $foods = Food::all()->where('id', $index);
        
        return view ('food', ['foods' => $food]);
    }

    public function manageFood(){
        $foods = Food::paginate(8);
        return view ('manageFood', ['foods' => $foods]);
    }

    public function createFood(){
        $foods = Food::all();
        $category = Category::all();
        return view ('createFood', ['foods' => $foods, 'category' => $category]);
    }

    public function updateFood($index){
        $foods = Food::all()->where('id', $index);
        $category = Category::all();
        return view ('updateFood', ['foods' => $foods, 'category' => $category]);
    }

    public function fooddetail ($index){
        $foods= Food::all()->where('id', $index);

        return view('fooddetail', ['foods' => $foods]);
    }

    public function nambahFood(Request $req){

        $rules= [
            'name' => ['required'],
            'description' => ['required', 'max:500'],
            'category_id' => 'required',
            'price' => ['required', 'max:1000000'],
            'cover' => ['required', 'max:100'],
            'video' => ['required', 'max:100000']
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $newFood = new Food();

        $cover = $req->file('storage');
        $coverName = time().'.'.$cover->getClientOriginalExtension();
        Storage::putFileAs('public/storage', $cover, $coverName);
        $coverName = $coverName;

        $video = $req->file('video');
        $videoName = time().'.'.$trailer->getClientOriginalExtension();
        Storage::putFileAs('public/storage', $video, $videoName);
        $videoName = $videoName;

        $newFood->name = $req->name;
        $newFood->description = $req->description; 
        $newFood->category_id = $req->category_id; 
        $newFood->price = $req->price;
        $newFood->cover = $coverName;
        $newFood->video = $videoName;

        $newFood->save();
        return redirect("/manageFood");
    }

    public function ubahFood(Request $req){

        $rules= [
            'description' => ['required', 'max:500'],
            'category_id' => 'required',
            'price' => ['required', 'max:1000000'],
            'cover' => ['max:100'],
            'video' => ['max:100000']
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $oldFood = Food::find($req->id);

        $cover = $req->file('storage');
        if($cover != null){
            Storage::delete('public/storage'.$oldFood->cover);
            $coverName = time().'.'.$cover->getClientOriginalExtension();
            Storage::putFileAs('public/storage', $cover, $coverName);
            $coverName = $coverName;
            $oldFood->cover = $coverName;
        }else{
            $oldFood->cover = $oldFood->cover;
        }

        $video = $req->file('video');
        if($video != null){
            Storage::delete('public/'.$oldFood->video);
            $videoName = time().'.'.$video->getClientOriginalExtension();
            Storage::putFileAs('public/storage', $video, $videoName);
            $videoName = $videoName;
            $oldFood->video = $videoName;
        }else{
            $oldFood->video = $oldFood->video;
        }

        $oldFood->name = $oldFood->name;
        $oldFood->description = $req->description; 
        $oldFood->category_id = $req->category_id; 
        $oldFood->price = $req->price;

        $oldFood->save();
        return redirect("/manageFood");
    }

    public function hapusFood($id){
        $food = Food::find($id);

        if(isset($food)){
            // Storage::delete('public/'.$game->cover);
            // Storage::delete('public/'.$game->trailer);
            $food->delete();
        }

        return redirect("/manageFood");
    }
}
