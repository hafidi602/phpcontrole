<div>
    <form action="{{route('recherche')}}" method="POST" class="m-3" align="right">
        @csrf
        <input type="text" placeholder="rechercher" name="nom">
        <input type="submit" class="btn btn-primary" value="chercher">
    </form>
</div>