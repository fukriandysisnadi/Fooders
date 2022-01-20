@extends('layout')

@section('isiPage')

<div class="m-4">
  <h3 class="pb-3">Manage Food Stock</h3>
    
  <div class="row">
    @foreach ($foods as $food)
    <div class="col-3">
        <div class="card text-black bg-light mb-3">
            <a href="{{$food->id}}">
                <img src="{{Storage::url($food->cover)}}" class="card-img">
            </a>    
            <div class="card-body">
            <h5 class="card-title">{{$food->name}}</h5>
                <p class="card-text">{{$food->category->category_name}}</p>
                <a href="{{'updateFood/'.$food->id}}" class="btn btn-primary" style="width: 100%">Update</a>
                <form method="POST" action="/hapusFood/{{$food->id}}">
                  @csrf
                  {{method_field('delete')}}
                  <input class="btn btn-danger mt-2" style="width: 100%" type="submit" value="Delete">
                </form>
             </div>
        </div>
    </div>
    @endforeach
</div>

<div class="d-flex justify-content-center">
  {{$foods->links()}}
</div>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end fixed-bottom mb-5 me-5">
    <a href="/createFood"><button class="btn btn-warning" style="width: 3rem;" type="button">+</button></a>
  </div>

</div>
    
@endsection