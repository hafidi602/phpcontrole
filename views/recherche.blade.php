@extends('layouts.master')
<x-nav/>
@section('title')
recherche    
@endsection
@section('main')
<x-recherche/>
<div class="row">
    @if ($films===NULL)
    <h2>Not found !</h2>    
    @else
    @foreach ($films as $film)
    <x-card :film="$film"/>
    @endforeach 
    @endif
</div>
@endsection