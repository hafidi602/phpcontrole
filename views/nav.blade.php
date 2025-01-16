<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('interface')}}">Tous les films</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('romantique')}}">Romantique</a>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('action')}}">Action</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('historique')}}">Historique</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('horreur')}}">D'horreur </a>
        </li>
        {{-- <li class="nav-item">
            <x-recherche/>
      </li> --}}
      </ul>
    </div>
  </nav>