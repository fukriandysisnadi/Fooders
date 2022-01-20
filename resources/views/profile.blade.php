@extends('layout')

@section('isiPage')

    <div class="m-4 p-4 container bg-light">
        <div class="row">
            <div class="row col-3 ms-1 border-end">
                <ul class="list-group list-group-flush">
                    <a href="/profile" class="list-group-item list-group-item-action list-group-item-secondary active"><i class="bi bi-person-circle"></i> Profile</a>
                    @if($user->role == "Member")
                    <a href="/transactionhistory" class="list-group-item list-group-item-action list-group-item-secondary"><i class="bi bi-collection"></i> Transaction History</a>
                    @endif
                </ul>
            </div>
            <div class="row col-8 ms-4">
                <div class="mb-4">
                    <h5>{{$user->name}} Profile</h5>
                    <p>This information will be shared publicly so be careful what you share.</p>
                </div>
                
                <div>
                    @if ($errors->first())
                        <p style="color: red">{{$errors->first()}}</p>
                    @endif

                    <form enctype="multipart/form-data" method="POST" action="/updateProfile">
                        @csrf
                        <div class="col-9">
                            <div class="mb-3">
                                <h6><label class="form-label m-0">Username</label></h6>
                                <input type="text" id="username" name="username" value="{{$user->username}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <h6><label class="form-label m-0">Full Name</label></h6>
                                <input type="text" id="name" name="name" value="{{$user->name}}" class="form-control">
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <h6><label class="form-label m-0">Current Password</label></h6>
                                <input type="password" id="password" name="password" class="form-control">
                                <p>Fill out this field to check if you are authorized.</p>
                            </div>
                            <div class="mb-3">
                                <h6><label class="form-label m-0">New Password</label></h6>
                                <input type="password" id="new-password" name="new-password" class="form-control">
                                <p>Only if you want to change your password.</p>
                            </div>
                            <div class="mb-3">
                                <h6><label class="form-label m-0">Confirm Password</label></h6>
                                <input type="password" id="confirm-password" name="confirm-password" class="form-control">
                                <p>Only if you want to change your password.</p>
                            </div>

                            <button type="submit" class="btn btn-dark" value="UPDATE">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    
@endsection