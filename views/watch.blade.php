@extends('layouts.master')
@section('title')
watch
@endsection
@section('main')
<div class="row">
    <video width="1000" height="600" controls>
        <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">
    </video>
</div>
@endsection
