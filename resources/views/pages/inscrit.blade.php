@extends('pages.layout');

@section('contenu')

<form action="/inscrit" method="POST">
     {{ csrf_field() }}

     <input type="text" placeholder="entrez nom"/>
     <input type="password" placeholder="mot de pass"/>
     <input type="submit" value="valider"/>
</form>
    
@endsection

