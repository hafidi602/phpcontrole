@extends('layouts.master')
<x-nav/>
@section('title')
liste des films    
@endsection
@section('main')
<x-recherche/>
<div class="row">
@foreach ($films as $film)
<x-card :film='$film'/>
@endforeach
</div>
{{$films->links()}}
@endsection
