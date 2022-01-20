@extends('layout')

@section('isiPage')
<div class="m-4">

    @if(session()->has('success'))
        <p style="color: Green">{{session()->get('success')}}</p>
    @elseif($errors->first())
        <p style="color: red">{{$errors->first()}}</p>
    @endif

        <h3 class="pb-3">Top Ordered Food</h3>
        <div class="row">
            
            @foreach ($foods as $food)
            
            <div class="col-3">
                <div class="card text-black bg-light mb-3">
                    <a href="fooddetail/{{ $food->id }}">
                        <img src="{{Storage::url($food->cover)}}" class="card-img">
                    </a>    
                    <div class="card-body">
                    <h6 class="card-title" style="">{{$food->name}}</h6>
                        <p class="card-text">{{$food->category->category_name}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
@endsection