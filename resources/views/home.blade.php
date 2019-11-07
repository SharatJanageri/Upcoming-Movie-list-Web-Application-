@extends('layouts.app')

@section('content')
@include('msg.err_msg')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}'s  Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        Hooreyy !!<br>You are logged in!!! <br>You have full access to the pages!!
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
