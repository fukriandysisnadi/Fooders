@extends('layout')

@section('isiPage')

    <div class="m-4 p-4 container bg-light">
        <div class="row">
            <div class="row col-3 ms-1 border-end">
                <ul class="list-group list-group-flush">
                    <a href="/profile" class="list-group-item list-group-item-action list-group-item-secondary"><i class="bi bi-person-circle"></i> Profile</a>
                    @if($user->role == "Member")
                    <a href="/transactionhistory" class="list-group-item list-group-item-action list-group-item-secondary active"><i class="bi bi-collection"></i> Transaction History</a>
                    @endif
                </ul>
            </div>
            <div class="row col-8 ms-4">
                <h5 class="text-middle">You don't have Transaction History yet</h5>
            </div>
        </div>

    </div>
    
@endsection