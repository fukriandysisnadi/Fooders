<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public $table = "foods";
    use HasFactory;
    
    protected $fillable = ['name', 'description', 'price', 'category_id', 'price', 'cover', 'video'];

    public function category(){
        return $this->belongsTo(Category::class); 
    }

    public function scopeFilter($query){
        return $query->where('name','like', '%'.request('search').'%');
    }
}