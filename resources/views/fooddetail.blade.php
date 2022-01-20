@extends('layout')

@section('isiPage')

    <div class="m-4 container">

        @foreach ($foods as $food)
        <div class="row">  
        <h5 class="text-dark text-opacity-50 mb-4"><i class="bi bi-house-door-fill"></i> <i class="bi bi-arrow-right-short"></i> {{$food->category->category_name}} <i class="bi bi-arrow-right-short"></i> {{$food->name}}</h5>
            
            <div class="col-sm-9">
                <div class="embed-responsive embed-responsive">
                    <iframe class="embed-responsive-item" width="960" height="540" src="{{$food->video}}" allowfullscreen></iframe>
                </div>
            </div>
            
            <div class="col-sm-3">
                <img src="{{Storage::url($food->cover)}}" class="rounded mb-3">
                <div>
                    <h4>{{$food->name}}</h4>
                    <p>{{$food->description}}</p>
                    <h6>Kategori : </h6>
                    <p>{{$food->category->category_name}}</p>
                </div>
            </div>
            @auth
            @if(Auth::user()->role == "Member")
            @foreach ($foods as $food)
            <div class="card mb-3">
                <div class="card-body fw-bold container">
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-8 pt-2">
                                @csrf
                                Buy {{$food->name}}
                                <input type="hidden" value="{{ $food->id }}" name="id">
                                <input type="hidden" value="{{ $food->name }}" name="name">
                                <input type="hidden" value="{{ $food->description }}" name="description">
                                <input type="hidden" value="{{ $food->category_id }}" name="category_id">
                                <input type="hidden" value="{{ $food->price }}" name="price">
                                <input type="hidden" value="{{ $food->cover }}"  name="cover">
                                <input type="hidden" value="{{ $food->video }}"  name="video">
                                <input type="hidden" value="1" name="quantity">
                            </div>
                            <div class="col-4 text-end">
                                <a class="btn btn-dark" type="button" href="{{ route('cart.store') }}" method="POST">Rp. {{$food->price}} - Add to cart</a>
                            </div>
                        </div>
                    </form>
                </div> 
            </div>
            @endforeach
            @endif
            @endauth
            
        </div>
        @endforeach
    </div>
    
@endsection