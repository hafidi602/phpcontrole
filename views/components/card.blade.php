@props(['film'])
<div class="col-sm-3">
<div class="card">
        <img class="card-img-top" src="{{ asset('storage/' . $film->source) }}" alt="Title" width="300" height="300"/>
        <div class="card-body">
        <h4 class="card-title">{{$film->nom}}</h4>
        </div>
        <a href="{{route('film.detail',$film->id)}}" class="stretched-link"></a>
</div>
</div>
