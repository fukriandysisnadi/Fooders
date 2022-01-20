@extends('layout')

@section('isiPage')
<div class="m-4">

        <h3 class="pb-3">Search Food</h3>
        <div class="row">
            
            @if($foods->isEmpty())
                <p>There are no food can be showed right now</p>
            @endif

            @foreach ($foods as $food)
            <div class="col-3">
                <div class="card text-black bg-light mb-3">
                    <a href="{{$food->id}}">
                        <img src="{{Storage::url($food->cover)}}" class="card-img">
                    </a>    
                    <div class="card-body">
                    <h5 class="card-title">{{$food->name}}</h5>
                        <p class="card-text">{{$food->category->category_name}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
@endsection