@extends('logregLayout')

@section('isiPage')
    
    <h2>Register Page</h2>

    <form enctype="multipart/form-data" method="POST" action="/register">
        @csrf
        <div class="">
            <label for="username" class="col-form-label">Username</label>
        </div>
        <div class="" id="form-field">
            <input type="" id="username" name="username" class="form-control">
        </div>
        <div class="">
            <label for="name" class="col-form-label">Fullname</label>
        </div>
        <div class="" id="form-field">
            <input type="" id="name" name="name" class="form-control">
        </div>       
        <div class="">
            <label for="password" class="col-form-label">Password</label>
        </div>
        <div class="" id="form-field">
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <div class="">
            <label for="role" class="col-form-label">Role</label>
        </div>
        <div>
            <select class="form-select mb-3" aria-label="Default select example" id="role" name="role">
              <option value="Member" selected>Member</option>
              <option value="Admin">Admin</option>
            </select>
        </div>
        @if ($errors->first())
            <p style="color: red">{{$errors->first()}}</p>
        @endif
        <div class="col-sm mb-3">
            <button type="submit" class="btn btn-primary" value="SINGUP" style="width: 100%">Sign Up</button>      
        </form>     
        </div>
        <div>
            <a class="text-end" href="/login"><p>Already have an account?</p></a> 
        </div>
@endsection