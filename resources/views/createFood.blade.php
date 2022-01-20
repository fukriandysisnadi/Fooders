    @extends('layout')

@section('isiPage')

<div class="m-3">
    <h3 class="pt-1 pb-2">Create Foods</h3>
    
    @if ($errors->first())
            <p style="color: red">{{$errors->first()}}</p>
    @endif

    <form enctype="multipart/form-data" method="POST" action="/nambahGame">
        @csrf
        <div class="mb-3">
            <label class="form-label">Food Name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label  class="form-label">Food Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
            <div id="" class="form-text">Write a single sentence about the game</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Food Category</label>
            <select class="form-select" aria-label="Default select example" id="category_id" name="category_id">
                <option selected>Select Category</option>
                @foreach ($category as $categories)
                    <option name="category_id" value="{{$categories->id}}">{{$categories->category_name}}</option>
                @endforeach    
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="exampleFormControlTextarea1">
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
        <input type="submit" value="INSERT">
    </form>

</div>
    
@endsection