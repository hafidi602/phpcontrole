@extends('layouts.master')
@section('title')
detail_film
@endsection
@section('main')
<div class='row'>
<x-card :film="$film"/>
<h3>{{$film->duree}} : مدة العرض </h3>
<p>{{$film->resumer}}</p>
</div>
<a href="{{route('watch',$film->id)}}" class="btn btn-primary">مشاهدة</a>
<a href="{{route('interface')}}" class="btn btn-primary">العودة</a>
@endsection