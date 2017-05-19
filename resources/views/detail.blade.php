@extends('base')

@section('content')
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();

    });
</script>

  <h1>Liste des personnes</h1>


    <div class="col-sm-4">

       <form action="/add" method="post">
       {{csrf_field()}}
    
        <label for="surname" style="font-size: 20px">Nom: 
          <input type="text" name="surname" id="title">
        </label>
        <label for="surname" style="font-size: 20px">Prenom: 
          <input type="text" name="name" id="text">
        </label>

        <label for="email" style="font-size: 20px">email: 
          <input type="email" name="email" id="email">
        </label>

        <label for="birthday" style="font-size: 20px">date de naissance: 
        <input type="text" name="birthday" id="birthday">
        </label>
        <input type="submit" class="btn btn-success"> 

     </form>    

</div>


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
            <button class="btn btn-primary">Supprimer</button>
            </form>
            </th>

        </tr>


        @endforeach
    </tbody>
</table>

<div id="example">


</div>

@stop