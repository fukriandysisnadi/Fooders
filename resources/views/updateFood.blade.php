@extends('layout')

@section('isiPage')

<div class="m-4">
    <h3 class="pt-1 pb-2">Update Food</h3>

    @if ($errors->first())
            <p style="color: red">{{$errors->first()}}</p>
    @endif

    @foreach ($foods as $food)
    <form enctype="multipart/form-data" method="POST" action="/ubahFood">
        @csrf
        <div class="mb-3">
            <label class="form-label">Food ID</label>
            <input type="text" name="id" value="{{$food->id}}" class="form-control" id="exampleFormControlInput1" readonly>
        </div>
        <div class="mb-3">
            <label  class="form-label">Food Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="2" >{{$food->description}}</textarea>
            <div id="" class="form-text">Write a single sentence about the food</div>
        </div>
        <div class="mb-3">
            <label class="form-label">Food Category</label>
            <select class="form-select" aria-label="Default select example" id="category_id" name="category_id">
                <option value="{{$food->category_id}}" selected>{{$food->category->category_name}}</option>
                @foreach ($category as $categories)
                    <option name="category_id" value="{{$categories->id}}">{{$categories->category_name}}</option>
                @endforeach    
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" value="{{$food->price}}"class="form-control" id="exampleFormControlTextarea1">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Food Cover</label>
            <input name="cover" class="form-control" type="file" accept="image/jpeg" id="formFile">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Food Video</label>
            <input name="trailer" class="form-control" type="file" accept="video/webm"id="formFile">
        </div>
        <div class="mb-5"></div>
        <input type="submit" value="UPDATE">
    </form>
    @endforeach
</div>
    
@endsection