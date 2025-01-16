@extends('layouts.master')
@section('title')
login
@endsection
@extends('layouts.error')
@extends('layouts.succee')
@section('main')
<div class="container w-7 my-2 bg-light p-5">
    <form action="{{route('auth')}}" method="POST">
        @csrf
        <div class="mb-3">
                <input class="form-control" name="email" type="text" placeholder="Adresse e-mail">
                @error('email')
                <div class="text-danger">{{$message}}</div>
                @enderror
        </div>
        <div class="mb-3">
                <input class="form-control" name="password" type="password" placeholder="mot de passe">
                <div class="d-grid m-3">
                    <input type="submit" class="btn btn-primary btn-block" value="Se connecter">
                    <br>
                    <a href="{{route('create')}}" class="btn btn-primary btn-block">cree un compte</a>
                </div>
        </div>
    </form> 
</div>  
@endsection
