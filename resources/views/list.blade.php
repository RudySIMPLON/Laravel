@extends('base')

@section('content')


<div class="text-center">
    <h1>Liste Utilisateur</h1><br>

    <form action="/detail" method="get">
        <button class="btn btn-success">Ajouter un Utilisateur</button>
    </form>    

</div><br><br>

<table id="myTable" class="table-stripped table table-bordered">

    
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date de Naissance</th>
            <th>Email</th>
            <th></th>
            <th></th>

        </tr>
   </thead>

    <tbody>
        @foreach ( $personnes as $personne) 
        
        <tr>
            <td>{{$personne->name}}</td>
            <td>{{$personne->surname}}</td>
            <td>{{$personne->birthday}}</td>
            <td>{{$personne->email}}</td>
            <th>
              <form action="/edit/{{$personne->id}}" method="get">
                {{csrf_field()}}
                    <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></button>
                </form>
            </td>
            <th><form action="/delete/{{$personne->id}}">
                {{csrf_field()}}
                <button class="btn btn-danger delete"><span class="glyphicon glyphicon-remove"></span></button>
            </form>
        </td>

    </tr>
  


    @endforeach
</tbody>
</table>

        <script src="//code.jquery.com/jquery.js"></script>
        
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->

<script>

 $('#myTable').DataTable();

</script>

@stop