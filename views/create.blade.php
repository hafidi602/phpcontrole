@extends('layouts.master')
@section('title')
cree nouveau compte
@endsection
@extends('layouts.error')
@section('main')
<div class="container w-7 my-2 bg-light p-5">
    <form action="{{route('store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <input class="form-control" name="nom" type="text" placeholder="nom ">        
        </div>
        <div class="mb-3">
            <input class="form-control" name="prenom" type="text" placeholder="prenom ">        
        </div>
        <div class="mb-3">
        <input class="form-control" name="email" type="text" placeholder="Adresse e-mail">        
        </div>
        <div class="mb-3">
            <input class="form-control" name="password" type="password" placeholder="mot de passe">
        </div>
        <div class="mb-3">
            <input class="form-control" name="password_confirmation" type="password" placeholder="confirmer votre passe">
        </div>
        <div class="d-grid mb-3">
            <input type="submit" class="btn btn-primary btn-block" value="valider">
        </div>
    </form> 
</div>  
@endsection