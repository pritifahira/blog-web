@extends('layouts.app')

@section('tittle', "Login")

@section('content')
<div class="row">
    <div class="col-md-4"></div>

    <div class="col-md-4">
        <div class="card-body">
            <h1 class="text-center">Login</h1>

            <form method="POST" action="{{ url('login) }}">
    </div>
</div>

@endsection