@extends('logregLayout')

@section('isiPage')
    
    <h2>Login Page</h2>

    <form enctype="multipart/form-data" method="POST" action="/login">
        @csrf

        <div class="form-group row">
            <div class="d-grid gap-2">
                <a href="{{ route('login.google') }}" class="btn btn-danger btn-block">Login with Google</a>
                <a href="{{ route('login.facebook') }}" class="btn btn-primary btn-block">Login with Facebook</a>
            </div>
        </div>
        <div class="">
            <label for="username" class="col-form-label">Username</label>
        </div>
        <div class="" id="form-field">
            <input type="" id="username" name="username" class="form-control" value="{{Cookie::get('remember') !== null ? Cookie::get('remember') : ''}}">
        </div>          
        <div class="">
            <label for="password" class="col-form-label">Password</label>
        </div>
        <div class=" mb-4" id="form-field">
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember" {{Cookie::get('remember') !== null ? 'checked' : ''}}>
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>

        @if(session()->has('error'))
            <p style="color: red">{{session()->get('error')}}</p>
        @endif
        
        <div class="col-sm mb-3">
            <button type="submit" class="btn btn-primary" value="LOGIN" style="width: 100%">Sign In</button>      
    </form>     
        </div>
        <div>
            <a class="text-end" href="/register"><p>Don't have any account?</p></a> 

        </div>
@endsection