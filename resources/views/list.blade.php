@extends('base')

@section('content')


<div class="text-center">
    <h1>Liste Utilisateur</h1><br>

    <form action="/detail" method="get">
        <button value="">Ajouter un Utilisateur</button>
    </form>    

</div><br><br>

<table id="myTable" class="table-stripped table table-bordered">

    <thead>

        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date de Naissance</th>
            <th>Email</th>

        </tr>

    </thead>
    <tbody>
        @foreach ( $personnes as $personne) 
        <tr>
            <th>{{$personne->name}}</th>
            <th>{{$personne->surname}}</th>
            <th>{{$personne->birthday}}</th>
            <th>{{$personne->email}}</th>
            <th>
                <form action="/edit/{{$personne->id}}" method="get">
                    <button class="btn btn-primary">modifier</button>
                </form>
            </th>
            <th><form action="/delete/{{$personne->id}}">
                <button class="btn btn-danger">Supprimer</button>
            </form>
        </th>

    </tr>


    @endforeach
</tbody>
</table>

<script src="//code.jquery.com/jquery.js"></script>
        
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script>

 $('#myTable').DataTable();

</script>

@stop